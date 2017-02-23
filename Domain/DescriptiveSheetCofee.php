<?php

class DescriptiveSheetCofee {
  
    private $idDescriptiveSheetCofee;
    private $cofeeRegion;
    private $characteristicRegion;
    private $height;
    private $varietiesCofee;
    private $harvestPeriod;
    private $driedType;
    
    function DescriptiveSheetCofee($idDescriptiveSheetCofee, 
            $cofeeRegion, 
            $characteristicRegion, 
            $height, 
            $varietiesCofee, 
            $harvestPeriod, 
            $driedType) {
        $this->idDescriptiveSheetCofee = $idDescriptiveSheetCofee;
        $this->cofeeRegion = $cofeeRegion;
        $this->characteristicRegion = $characteristicRegion;
        $this->height = $height;
        $this->varietiesCofee = $varietiesCofee;
        $this->harvestPeriod = $harvestPeriod;
        $this->driedType = $driedType;
    }

    function getIdDescriptiveSheetCofee() {
        return $this->idDescriptiveSheetCofee;
    }

    function getCofeeRegion() {
        return $this->cofeeRegion;
    }

    function getCharacteristicRegion() {
        return $this->characteristicRegion;
    }

    function getHeight() {
        return $this->height;
    }

    function getVarietiesCofee() {
        return $this->varietiesCofee;
    }

    function getHarvestPeriod() {
        return $this->harvestPeriod;
    }

    function getDriedType() {
        return $this->driedType;
    }

    function setIdDescriptiveSheetCofee($idDescriptiveSheetCofee) {
        $this->idDescriptiveSheetCofee = $idDescriptiveSheetCofee;
    }

    function setCofeeRegion($cofeeRegion) {
        $this->cofeeRegion = $cofeeRegion;
    }

    function setCharacteristicRegion($characteristicRegion) {
        $this->characteristicRegion = $characteristicRegion;
    }

    function setHeight($height) {
        $this->height = $height;
    }

    function setVarietiesCofee($varietiesCofee) {
        $this->varietiesCofee = $varietiesCofee;
    }

    function setHarvestPeriod($harvestPeriod) {
        $this->harvestPeriod = $harvestPeriod;
    }

    function setDriedType($driedType) {
        $this->driedType = $driedType;
    }


    
}
