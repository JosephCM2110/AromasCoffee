<?php

include_once 'Data.php';
include './Domain/Product.php';

class ProductData extends Data{

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
