<?php

include_once './Data.php';
include '../Domain/DescriptiveSheetCofee.php';

class DescriptiveSheetCofeeData extends Data {
    
    public function insertTBDescriptiveSheetCofee($descriptiveSheetCofee) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbdescriptivesheetcofee) AS id "
                . "FROM tbdescriptivesheetcofee;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbdescriptivesheetcofee VALUES (" . $nextId . 
                ",'" . $descriptiveSheetCofee->getCofeeRegion() . 
                "', '" . $descriptiveSheetCofee->getCharacteristicRegion() .
                "', '" . $descriptiveSheetCofee->getHeight() .
                "', '" . $descriptiveSheetCofee->getVarietiesCofee() .
                "', '" . $descriptiveSheetCofee->getHarvestPeriod() .
                "', '" . $descriptiveSheetCofee->getDriedType() .
                "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBDescriptiveSheetCofee($descriptiveSheetCofee) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbdescriptivesheetcofee SET " .
                "coffeeregion='" . $descriptiveSheetCofee->getCofeeRegion() .
                "', characteristicregion='" . $descriptiveSheetCofee->getCharacteristicRegion() .
                "', height='" . $descriptiveSheetCofee->getHeight() .
                "', varietiescofee='" . $descriptiveSheetCofee->getVarietiesCofee() .
                "', harvestperiod='" . $descriptiveSheetCofee->getHarvestPeriod() .
                "', driedtype='" . $descriptiveSheetCofee->getDriedType() .
                "' WHERE idtbdescriptivesheetcofee=" . $descriptiveSheetCofee->getIdDescriptiveSheetCofee() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBDescriptiveSheetCofee($idDescriptiveSheetCofee) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbdescriptivesheetcofee WHERE "
                . "idtbdescriptivesheetcofee=" . $idDescriptiveSheetCofee . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBDescriptiveSheetCofees() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbdescriptivesheetcofee;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $descriptiveSheetCofees = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentDescriptiveSheetCofee = new DescriptiveSheetCofee(
                    $row['idtbdescriptivesheetcofee'],
                    $row['coffeeregion'],
                    $row['characteristicregion'],
                    $row['height'],
                    $row['varietiescofee'],
                    $row['harvestperiod'],
                    $row['driedtype']);
            array_push($descriptiveSheetCofees, $currentDescriptiveSheetCofee);
        }
        return $descriptiveSheetCofees;
    }
    
}
