<?php

include '../Data/AchievementData.php';

class AchievementBusiness {

    private $achievementData;
    
    function AchievementBusiness() {
        $this->achievementData = new AchievementData();
    }
    
    public function insertTBAchievement($achievement) {
        return $this->achievementData->insertTBAchievement($achievement);
    }

    public function updateTBAchievement($achievement) {
        return $this->achievementData->updateTBAchievement($achievement);
    }

    public function deleteTBAchievement($idAchievement) {
        return $this->achievementData->deleteTBAchievement($idAchievement);
    }

    public function getAllTBTBAchievements() {
        return $this->achievementData->getAllTBTBAchievements();
    }
    
}
