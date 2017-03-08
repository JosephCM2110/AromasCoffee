<?php

include_once '../DataAdmin/AchievementAdminData.php';

/**
 * Description of AchievementAdminBusiness
 *
 * @author mm
 */
class AchievementAdminBusiness {
    
    
    private $achievementData;
    
    function AchievementAdminBusiness() {
        $this->achievementData = new AchievementAdminData();
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
