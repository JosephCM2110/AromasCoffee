<?php

include_once 'Data.php';
include './Domain/Achievement.php';

class AchievementData extends Data {
    
    public function getAllTBTBAchievements() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbachievement;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $achievements = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentAchievement = new Achievement($row['idtbachievement'], 
                    $row['achievement'], $row['imagepath']);
            array_push($achievements, $currentAchievement);
        }

        return $achievements;
    }
    
}
