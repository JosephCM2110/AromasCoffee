<?php

include_once '../DataAdmin/CharacteristicsAdminData.php';

/**
 * Description of CharacteristicsAdminBusiness
 *
 * @author mm
 */
class CharacteristicsAdminBusiness {
    
    public $charactData;
    
    public function CharacteristicsAdminBusiness(){
        $this->charactData = new CharacteristicsAdminData();
    }
    
    public function getAlltbCharacteristics(){
        return $this->charactData->getAllTbcharacteristic();
    }
    
     public function insertTBCharacteristic($characteristic) {
        return $this->charactData->insertTBCharacteristic($characteristic);
    }

    public function updateTBCharacteristic($characteristic) {
        return $this->charactData->updateTBCharacteristic($characteristic);
    }

    public function deleteTBCharacteristic($idCharacteristic) {
        return $this->charactData->deleteTBCharacteristic($idCharacteristic);
    }
    
    
}
