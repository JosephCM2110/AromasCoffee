<?php

include_once '../Data/Data.php';
include_once '../Domain/Characteristic.php';
/**
 * Description of CharacteristicsAdminData
 *
 * @author mm
 */
class CharacteristicsAdminData extends Data {

    function getAllTbcharacteristic() {

        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbcharacteristic;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $characteristics = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentCharacteristic = new Characteristic($row['idtbcharacteristic'], $row['characteristic']);
            array_push($characteristics, $currentCharacteristic);
        }
        
        if(sizeof($characteristics) >= 1){
            return $characteristics;
        }else{
            return false;
        }
        
    }
    
    public function insertTBCharacteristic($characteristic) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "select max(idtbcharacteristic) as id from tbcharacteristic;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbcharacteristic values (" . $nextId . ",'" .
                $characteristic . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBCharacteristic($characteristic) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbcharacteristic set characteristic = '" . $characteristic->getCharateristic() .
                "' where idtbcharacteristic = " . $characteristic->getIdCharacteristic() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBCharacteristic($idCharacteristic) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbcharacteristic WHERE idtbcharacteristic=" . $idCharacteristic . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

}
