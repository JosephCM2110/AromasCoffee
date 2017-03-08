<?php

include './Data/CoffeeTourData.php';

class CoffeeTourBusiness {

    private $coffeeTourData;
    
    function CoffeeTourBusiness() {
        $this->coffeeTourData = new CoffeeTourData();
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
