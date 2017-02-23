<?php

include_once './Data.php';
include '../Domain/Achievement.php';

class AchievementData extends Data {
    
    public function insertTBAchievement($achievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbachievement) AS id  FROM tbachievement;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbachievement VALUES (" . $nextId . ",'" .
                $achievement->getAchievement() . "','" . $achievement->getImagePath() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBAchievement($achievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbachievement SET achievement='" . $achievement->getAchievement() .
                "', imagepath = '" . $achievement->getImagePath() .
                "' WHERE idtbachievement=" . $achievement->getIdAchievement() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBAchievement($idAchievement) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbachievement WHERE idtbachievement=" . $idAchievement . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

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
