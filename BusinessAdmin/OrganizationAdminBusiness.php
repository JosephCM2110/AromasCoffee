<?php

include_once '../DataAdmin/OrganizationAdminData.php';

/**
 * Description of OrganizationAdminBusiness
 *
 * @author mm
 */
class OrganizationAdminBusiness {
    
    public $organization;
    
    public function OrganizationAdminBusiness(){
        $this->organization = new OrganizationAdminData();
    }    
    public function updateHistory($history){
        return $this->organization->updateHistory($history);
    }
    public function updateMission($mission){
        return $this->organization->updateMission($mission);
    }
    public function updateVision($vision){
        return $this->organization->updateVision($vision);
    }
    public function getAllOrganization(){
        return $this->organization->getAllTBOrganizations();
    }
    
    
    
    
}
