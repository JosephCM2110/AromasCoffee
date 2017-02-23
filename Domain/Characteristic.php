<?php


class Characteristic {

    private $idCharacteristic;
    private $charateristic;
    
    function Characteristic($idCharacteristic, 
            $charateristic) {
        $this->idCharacteristic = $idCharacteristic;
        $this->charateristic = $charateristic;
    }

    function getIdCharacteristic() {
        return $this->idCharacteristic;
    }

    function getCharateristic() {
        return $this->charateristic;
    }

    function setIdCharacteristic($idCharacteristic) {
        $this->idCharacteristic = $idCharacteristic;
    }

    function setCharateristic($charateristic) {
        $this->charateristic = $charateristic;
    }


    
}
