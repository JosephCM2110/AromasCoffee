<?php

class CoffeeTour {

    private $idCoffeeTour;
    private $descriptionCoffeeTour;
    
    function CoffeeTour($idCoffeeTour, $descriptionCoffeeTour) {
        $this->idCoffeeTour = $idCoffeeTour;
        $this->descriptionCoffeeTour = $descriptionCoffeeTour;
    }

    function getIdCoffeeTour() {
        return $this->idCoffeeTour;
    }

    function getDescriptionCoffeeTour() {
        return $this->descriptionCoffeeTour;
    }

    function setIdCoffeeTour($idCoffeeTour) {
        $this->idCoffeeTour = $idCoffeeTour;
    }

    function setDescriptionCoffeeTour($descriptionCoffeeTour) {
        $this->descriptionCoffeeTour = $descriptionCoffeeTour;
    }



    
}
