<?php

include_once 'Data.php';
include './Domain/Image.php';

class ImageData extends Data{

    public function insertTBImage($image) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbimage) AS id  FROM tbimage;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbimage VALUES (" . $nextId . ",'" .
                $image->getImagePath() . "','" . $image->getDescription() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBImage($image) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbimage SET description='" . $image->getDescription() .
                "', imagepath = '" . $image->getImagePath() .
                "' WHERE idtbimage=" . $image->getIdImage() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImage($idImage) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbimage WHERE idtbimage=" . $idImage . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImages() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimage;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $images = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImage = new Image($row['idtbimage'], 
                    $row['imagepath'], $row['description']);
            array_push($images, $currentImage);
        }

        return $images;
    }
    
}
