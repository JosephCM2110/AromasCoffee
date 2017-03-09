<?php

include '../DataAdmin/DescriptiveSheetCoffeeAdminData.php';

class DescriptiveSheetCofeeAdminBusiness {

    private $descriptiveSheetCofeeData;
    
    function DescriptiveSheetCofeeAdminBusiness() {
        $this->descriptiveSheetCofeeData = new DescriptiveSheetCofeeAdminData();
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