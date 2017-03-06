<?php

include_once 'Data.php';
include './Domain/Organization.php';

class OrganizationData extends Data {

    public function insertTBOrganization($organization) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtborganization) AS id "
                . "FROM tborganization;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tborganization VALUES (" . $nextId . 
                ",'" . $organization->getNameOrganization() . 
                "', '" . $organization->getHistory() .
                "', '" . $organization->getMission() .
                "', '" . $organization->getVision() .
                "', '" . $organization->getLocation() .
                "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBOrganization($organization) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tborganization SET " .
                "nameorganization='" . $organization->getNameOrganization() .
                "', history='" . $organization->getHistory() .
                "', mission='" . $organization->getMission() .
                "', vision='" . $organization->getVision() .
                "', location='" . $organization->getLocation() .
                "' WHERE idtborganization=" . $organization->getIdOrganization() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBOrganization($idOrganization) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tborganization WHERE "
                . "idtborganization=" . $idOrganization . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBOrganizations() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tborganization;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentOrganization = new Organization(
                    $row['idtborganization'],
                    $row['nameorganization'],
                    $row['history'],
                    $row['mission'],
                    $row['vision'],
                    $row['location']);
        
        return $currentOrganization;
    }
    
}
