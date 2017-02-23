<?php

class Achievement {
    
    private $idAchievement;
    private $achievement;
    private $imagePath;
    
    function Achievement($idAchievement, $achievement, $imagePath) {
        $this->idAchievement = $idAchievement;
        $this->achievement = $achievement;
        $this->imagePath = $imagePath;
    }

    function getIdAchievement() {
        return $this->idAchievement;
    }

    function getAchievement() {
        return $this->achievement;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function setIdAchievement($idAchievement) {
        $this->idAchievement = $idAchievement;
    }

    function setAchievement($achievement) {
        $this->achievement = $achievement;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }


    
}
