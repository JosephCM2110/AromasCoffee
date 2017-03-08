<?php

include_once '../Data/Data.php';
include_once '../Domain/Product.php';
/**
 * Description of ProductAdminData
 *
 * @author mm
 */
class ProductAdminData extends Data {
    
    public function insertTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "select max(idtbproduct) as id  from tbproduct;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbproduct values (" . $nextId . ",'" .
                $product->getNameProduct() . "','" . $product->getDescription() . "');";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    public function updateTBProduct($product) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbproduct set description = '" . $product->getDescription() .
                "', nameproduct = '" . $product->getNameProduct() .
                "' where idtbproduct = " . $product->getIdProduct() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBProduct($idProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "delete from tbproduct where idtbproduct=" . $idProduct . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBProducts() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tbproduct;";
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
