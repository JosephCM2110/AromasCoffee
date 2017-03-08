<?php

include_once 'Data.php';
include './Domain/Characteristic.php';

class CharacteristicData extends Data {

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
