<?php

include_once 'Data.php';
include './Domain/Product.php';

class ProductData extends Data{

    public function insertTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "SELECT MAX(idtbproduct) AS id  FROM tbproduct;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "INSERT INTO tbproduct VALUES (" . $nextId . ",'" .
                $product->getNameProduct() . "','" . $product->getDescription() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "UPDATE tbproduct SET description='" . $product->getDescription() .
                "', nameproduct = '" . $product->getNameProduct() .
                "' WHERE idtbproduct=" . $product->getIdProduct() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBProduct($idProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "DELETE FROM tbproduct WHERE idtbproduct=" . $idProduct . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBProducts() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tbproduct;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $products = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentProduct = new Product($row['idtbproduct'], 
                    $row['nameproduct'], $row['description']);
            array_push($products, $currentProduct);
        }

        return $products;
    }
    
}
