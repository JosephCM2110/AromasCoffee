<?php

include '../DataAdmin/CoffeeTourDataAdmin.php';

class CoffeeTourBusinessAdmin {

    private $coffeeTourData;
    
    function CoffeeTourBusinessAdmin() {
        $this->coffeeTourData = new CoffeeTourDataAdmin();
    }

    public function insertTBCoffeeTour($coffeeTour) {
        return $this->coffeeTourData->insertTBCoffeeTour($coffeeTour);
    }

    public function updateTBCoffeeTour($coffeeTour) {
        return $this->coffeeTourData->updateTBCoffeeTour($coffeeTour);
    }

    public function deleteTBCoffeeTour($idTour) {
        return $this->coffeeTourData->deleteTBCoffeeTour($idTour);
    }

    public function getAllTBCoffeeTours() {
        return $this->coffeeTourData->getAllTBCoffeeTours();
    }
    
}
