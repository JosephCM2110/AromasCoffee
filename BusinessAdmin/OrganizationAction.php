<?php

include_once './OrganizationAdminBusiness.php';

if(isset($_POST['history'])){
    
    $history = $_POST['txtHistory'];
    if(strlen($history) > 10){
        
        $organizationBusiness = new OrganizationAdminBusiness();
        $result = $organizationBusiness->updateHistory($history);
        if($result){
            header('location: ../PresentationAdmin/adminInformationHistory.php?success=success');
        }else{
            header('location: ../PresentationAdmin/adminInformationHistory.php?error=error');
        }
        
    }else{
        header('location: ../PresentationAdmin/adminInformationHistory.php?errorData=error');
    }
    
    
}else if(isset ($_POST['mission'])){
    
    $mission = $_POST['txtMission'];
    if(strlen($mission) > 10){
        
        $organizationBusiness = new OrganizationAdminBusiness();
        $result = $organizationBusiness->updateMission($mission);
        if($result){
            header('location: ../PresentationAdmin/adminInformationMission.php?success=success');
        }else{
            header('location: ../PresentationAdmin/adminInformationMission.php?error=error');
        }
        
    }else{
        header('location: ../PresentationAdmin/adminInformationMission.php?errorData=error');
    }
    
}else if(isset ($_POST['vision'])){
    
    $view = $_POST['txtView'];
    if(strlen($view) > 10){
        
        $organizationBusiness = new OrganizationAdminBusiness();
        $result = $organizationBusiness->updateVision($view);
        if($result){
            header('location: ../PresentationAdmin/adminInformationView.php?success=success');
        }else{
            header('location: ../PresentationAdmin/adminInformationView.php?error=error');
        }
        
    }else{
        header('location: ../PresentationAdmin/adminInformationView.php?errorData=error');
    }
    
}
