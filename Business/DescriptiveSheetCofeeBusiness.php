<?php

include './Data/DescriptiveSheetCofeeData.php';

class DescriptiveSheetCofeeBusiness {

    private $descriptiveSheetCofeeData;
    
    function DescriptiveSheetCofeeBusiness() {
        $this->descriptiveSheetCofeeData = new DescriptiveSheetCofeeData();
    }

    public function insertTBDescriptiveSheetCofee($descriptiveSheetCofee) {
        return $this->descriptiveSheetCofeeData->insertTBDescriptiveSheetCofee($descriptiveSheetCofee);
    }

    public function updateTBDescriptiveSheetCofee($descriptiveSheetCofee) {
        return $this->descriptiveSheetCofeeData->updateTBDescriptiveSheetCofee($descriptiveSheetCofee);
    }

    public function deleteTBDescriptiveSheetCofee($idDescriptiveSheetCofee) {
        return $this->descriptiveSheetCofeeData->deleteTBDescriptiveSheetCofee($idDescriptiveSheetCofee);
    }

    public function getAllTBDescriptiveSheetCofees() {
        return $this->descriptiveSheetCofeeData->getAllTBDescriptiveSheetCofees();
    }
    
}
