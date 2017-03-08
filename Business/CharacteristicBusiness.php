<?php

include './Data/CharacteristicData.php';

class CharacteristicBusiness {
   
    private $characteristicData;
    
    function CharacteristicBusiness() {
        $this->characteristicData = new CharacteristicData();
    }

    public function getAllTBCharacteristics() {
        return $this->characteristicData->getAllTBCharacteristics();
    }
    
}
