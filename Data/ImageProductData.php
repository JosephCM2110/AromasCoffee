<?php

include_once 'Data.php';
include './Domain/ImageProduct.php';

class ImageProductData extends Data {

    public function insertTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbimageproduct) AS id FROM tbimageproduct;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbimageproduct VALUES (" . $nextId . ",'" .
                $imageProduct->getImagePath() . "'," . $imageProduct->getProduct() . ");";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbimageproduct SET product=" . $imageProduct->getProduct() .
                ", imagepath = '" . $imageProduct->getImagePath() .
                "' WHERE idtbimageproduct=" . $imageProduct->getIdImageProduct() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageProduct($idImage) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbimageproduct WHERE idtbimageproduct=" . $idImage . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageProducts() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimageproduct;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $imageProducts = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageProduct = new ImageProduct($row['idtbimageproduct'], 
                    $row['imagepath'], $row['product']);
            array_push($imageProducts, $currentImageProduct);
        }

        return $imageProducts;
    }
    
    public function getAllTBImageProductsByProduct($idProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbimageproduct where product=" . $idProduct . ";";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $imageProducts = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageProduct = new ImageProduct($row['idtbimageproduct'], 
                    $row['imagepath'], $row['product']);
            array_push($imageProducts, $currentImageProduct);
        }

        return $imageProducts;
    }
    
}
