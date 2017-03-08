<?php

include './Data/AchievementData.php';

class AchievementBusiness {

    private $achievementData;
    
    function AchievementBusiness() {
        $this->achievementData = new AchievementData();
    }
    
    public function getAllTBTBAchievements() {
        return $this->achievementData->getAllTBTBAchievements();
    }
    
}
