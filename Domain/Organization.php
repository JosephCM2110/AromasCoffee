<?php

class Organization {

    private $idOrganization;
    private $nameOrganization;
    private $history;
    private $mission;
    private $vision;
    private $location;
    
    function Organization($idOrganization, 
            $nameOrganization, 
            $history, 
            $mission, 
            $vision, 
            $location) {
        $this->idOrganization = $idOrganization;
        $this->nameOrganization = $nameOrganization;
        $this->history = $history;
        $this->mission = $mission;
        $this->vision = $vision;
        $this->location = $location;
    }

    function getIdOrganization() {
        return $this->idOrganization;
    }

    function getNameOrganization() {
        return $this->nameOrganization;
    }

    function getHistory() {
        return $this->history;
    }

    function getMission() {
        return $this->mission;
    }

    function getVision() {
        return $this->vision;
    }

    function getLocation() {
        return $this->location;
    }

    function setIdOrganization($idOrganization) {
        $this->idOrganization = $idOrganization;
    }

    function setNameOrganization($nameOrganization) {
        $this->nameOrganization = $nameOrganization;
    }

    function setHistory($history) {
        $this->history = $history;
    }

    function setMission($mission) {
        $this->mission = $mission;
    }

    function setVision($vision) {
        $this->vision = $vision;
    }

    function setLocation($location) {
        $this->location = $location;
    }


    
}
