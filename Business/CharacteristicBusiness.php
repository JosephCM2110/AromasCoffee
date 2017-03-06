<?php

include './Data/CharacteristicData.php';

class CharacteristicBusiness {
   
    private $characteristicData;
    
    function CharacteristicBusiness() {
        $this->characteristicData = new CharacteristicData();
    }
    
    public function insertTBCharacteristic($characteristic) {
        return $this->characteristicData->insertTBCharacteristic($characteristic);
    }

    public function updateTBCharacteristic($characteristic) {
        return $this->characteristicData->updateTBCharacteristic($characteristic);
    }

    public function deleteTBCharacteristic($idCharacteristic) {
        return $this->characteristicData->deleteTBCharacteristic($idCharacteristic);
    }

    public function getAllTBCharacteristics() {
        return $this->characteristicData->getAllTBCharacteristics();
    }
    
}
