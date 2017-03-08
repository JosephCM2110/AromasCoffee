<?php

include_once '../DataAdmin/AdministratorData.php';

/**
 * Description of AdministratorBusiness
 *
 * @author mm
 */
class AdministratorBusiness {
    
    public $adminData;
    
    public function AdministratorBusiness(){
        $this->adminData = new AdministratorData();
    }
    public function insertTBuser($user){
        return $this->adminData->insertTBUser($user);
    }
    public function updateTBuser($user){
        return $this->adminData->updateTBUser($user);
    }
    public function deleteTBuser($idUser){
        return $this->adminData->deleteTBUser($idUser);
    }
    public function getAllTBuser(){
        return $this->adminData->getAllTBUser();
    }
    
    
    
}
