<?php

include './DescriptiveSheetCoffeeAdminBusiness.php';

if(isset($_POST['update'])){
    
    if(isset($_POST['idDescriptiveSheetCofee']) && isset($_POST['coffeeRegion']) && 
            isset($_POST['characteristicRegion']) &&  isset($_POST['heigth']) && 
            isset($_POST['varietiesCoffee']) &&  isset($_POST['harvestPeriod']) &&
            isset($_POST['driedType'])){
        
        $idDescriptiveSheetCoffee = $_POST['idDescriptiveSheetCofee'];
        $coffeeRegion = $_POST['coffeeRegion'];
        $characteristicRegion = $_POST['characteristicRegion'];
        $heigth = $_POST['heigth'];
        $varietiesCoffee = $_POST['varietiesCoffee'];
        $harvestPeriod = $_POST['harvestPeriod'];
        $driedType = $_POST['driedType'];
        
        if(strlen($idDescriptiveSheetCoffee) > 0 && strlen($coffeeRegion) > 0 &&
                strlen($characteristicRegion) > 0 && strlen($heigth) > 0 &&
                strlen($varietiesCoffee) > 0 && strlen($harvestPeriod) > 0 &&
                strlen($driedType) > 0){
            
            $descriptiveSheetCoffee = new DescriptiveSheetCofee($idDescriptiveSheetCoffee, 
                    $coffeeRegion, $characteristicRegion, $heigth, 
                    $varietiesCoffee, $harvestPeriod, $driedType);
            $descriptiveSheetCofeeBusiness = new DescriptiveSheetCofeeAdminBusiness();
            
            $result = $descriptiveSheetCofeeBusiness->updateTBDescriptiveSheetCofee($descriptiveSheetCoffee);
            
            if($result == 1){
                header('location: ../PresentationAdmin/adminInformationDescriptivesheetcofee.php?success=success');
            } else {
                header('location: ../PresentationAdmin/adminInformationDescriptivesheetcofee.php?error=error');
            }
        } else {
            header('location: ../PresentationAdmin/adminInformationDescriptivesheetcofee.php?errorData=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationDescriptivesheetcofee.php?errorData=error');
    }
} else {
    header('location: ../PresentationAdmin/adminInformationDescriptivesheetcofee.php?errorData=error');
}

