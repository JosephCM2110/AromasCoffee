<?php

include_once '../Data/Data.php';
include_once '../Domain/Image.php';

/**
 * Description of ImagesGaleryAdminData
 *
 * @author mm
 */
class ImagesGaleryAdminData extends Data {
    
    
    function insertTBImage($image) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "select max(idtbimage) as id  from tbimage;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbimage values (" . $nextId . ",'" .
                $image->getImagePath() . "','" . $image->getDescription() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    function updateTBImage($image) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbimage set description='" . $image->getDescription() .
                "', imagepath = '" . $image->getImagePath() .
                "' where idtbimage=" . $image->getIdImage() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    function deleteTBImage($idImage) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "delete from tbimage where idtbimage = " . $idImage . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    function getAllTBImages() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbimage;";
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
