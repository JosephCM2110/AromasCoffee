<?php

include_once '../Data/Data.php';
include_once '../Domain/Achievement.php';

/**
 * Description of AchievementAdminData
 *
 * @author mm
 */
class AchievementAdminData extends Data{
   
    
    public function insertTBAchievement($achievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "select max(idtbachievement) as id  from tbachievement;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbachievement values (" . $nextId . ",'" .
                $achievement->getAchievement() . "','" . $achievement->getImagePath() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBAchievement($achievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbachievement set achievement = '" . $achievement->getAchievement() .
                "' where idtbachievement=" . $achievement->getIdAchievement() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBAchievement($idAchievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "delete from tbachievement where idtbachievement=" . $idAchievement . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBTBAchievements() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbachievement;";
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
