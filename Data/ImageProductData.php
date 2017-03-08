<?php

include_once './Data.php';
include '../Domain/ImageProduct.php';

class ImageProductData extends Data {

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
    
}
