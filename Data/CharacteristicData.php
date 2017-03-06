<?php

include_once 'Data.php';
include './Domain/Characteristic.php';

class CharacteristicData extends Data {

    public function insertTBCharacteristic($characteristic) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbcharacteristic) AS id FROM tbcharacteristic;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbcharacteristic VALUES (" . $nextId . ",'" .
                $characteristic->getCharateristic() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBCharacteristic($characteristic) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbcharacteristic SET characteristic='" . $characteristic->getCharateristic() .
                "' WHERE idtbcharacteristic=" . $characteristic->getIdCharacteristic() . ";";
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

    public function getAllTBCharacteristics() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbcharacteristic;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $characteristics = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentCharacteristic = new Characteristic($row['idtbcharacteristic'], 
                    $row['characteristic']);
            array_push($characteristics, $currentCharacteristic);
        }

        return $characteristics;
    }
    
}
