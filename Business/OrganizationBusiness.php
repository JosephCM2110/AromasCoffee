<?php

include './Data/OrganizationData.php';

class OrganizationBusiness {

    private $organizationData;
    
    function OrganizationBusiness() {
        $this->organizationData = new OrganizationData();
    }
    public function getAllTBOrganizations() {
        return $this->organizationData->getAllTBOrganizations();
    }
    
}
