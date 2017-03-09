<?php

include './CoffeeTourBusinessAdmin.php';

if(isset($_POST['update'])){
    
    if (isset($_POST['idCoffeeTour']) && isset($_POST['descriptionTour'])) {
        
        $idCoffeeTour = $_POST['idCoffeeTour'];
        $descriptionTour = $_POST['descriptionTour'];
        
        if(strlen($idCoffeeTour) > 0 && strlen($descriptionTour) > 0){
            
            $coffeeTour = new CoffeeTour($idCoffeeTour, $descriptionTour);
            $coffeeTourBusiness = new CoffeeTourBusinessAdmin();
            $result = $coffeeTourBusiness->updateTBCoffeeTour($coffeeTour);
            
            if($result == 1){
                header('location: ../PresentationAdmin/adminInformationCoffeeTour.php?success=success');
            } else {
                header('location: ../PresentationAdmin/adminInformationCoffeeTour.php?error=error');
            }
            
        } else {
            header('location: ../PresentationAdmin/adminInformationCoffeeTour.php?errorData=error');
        }
        
    } else {
        header('location: ../PresentationAdmin/adminInformationCoffeeTour.php?errorData=error');
    }
    
} else {
    header('location: ../PresentationAdmin/adminInformationCoffeeTour.php?errorData=error');
}
