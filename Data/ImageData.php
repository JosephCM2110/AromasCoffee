<?php

include_once './Data.php';
include '../Domain/Image.php';

class ImageData extends Data{

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
