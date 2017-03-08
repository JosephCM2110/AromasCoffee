<?php

include_once 'Data.php';
include './Domain/CoffeeTour.php';

class CoffeeTourData extends Data {
    
    public function insertTBCoffeeTour($coffeeTour) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbcofeetour) AS id FROM tbcofeetour;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbcofeetour VALUES (" . $nextId . ",'" .
                $coffeeTour->getDescriptionCoffeeTour() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBCoffeeTour($coffeeTour) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbcofeetour SET descriptiontour='" . $coffeeTour->getDescriptionCoffeeTour() .
                "' WHERE idtbcofeetour=" . $coffeeTour->getIdCoffeeTour() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBCoffeeTour($idTour) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbcofeetour WHERE idtbcofeetour=" . $idTour . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBCoffeeTours() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbcofeetour;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $coffeeTours = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentTour = new CoffeeTour($row['idtbcofeetour'], 
                    $row['descriptiontour']);
            array_push($coffeeTours, $currentTour);
        }

        return $coffeeTours;
    }
    
}
