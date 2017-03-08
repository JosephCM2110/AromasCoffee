<?php

include_once '../Data/Data.php';
include_once '../Domain/ImageProduct.php';

/**
 * Description of ImagesProductAdminData
 *
 * @author mm
 */
class ImagesProductAdminData extends Data {

    function insertTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        //Get the last id
        $queryGetLastId = "select max(idtbimageproduct) as id from tbimageproduct;";
        $idCont = mysqli_query($conn, $queryGetLastId);
        $nextId = 1;

        if ($row = mysqli_fetch_row($idCont)) {
            $nextId = trim($row[0]) + 1;
        }

        $queryInsert = "insert into tbimageproduct values (" . $nextId . ",'" .
                $imageProduct->getImagePath() . "'," . $imageProduct->getProduct() . ");";
        $result = mysqli_query($conn, $queryInsert);
        mysqli_close($conn);

        return $result;
    }

    function updateTBImageProduct($imageProduct) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tbimageproduct set product = " . $imageProduct->getProduct() .
                ", imagepath = '" . $imageProduct->getImagePath() .
                "' where idtbimageproduct=" . $imageProduct->getIdImageProduct() . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function deleteTBImageProduct($idImage) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "delete from tbimageproduct where idtbimageproduct=" . $idImage . ";";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);

        return $result;
    }

    public function getAllTBImageProducts() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select ima.idtbimageproduct, ima.imagepath, pro.nameproduct "
                . "from tbimageproduct ima inner join tbproduct pro on ima.product = pro.idtbproduct;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $imageProducts = [];
        while ($row = mysqli_fetch_array($result)) {
            $currentImageProduct = new ImageProduct($row['idtbimageproduct'], $row['imagepath'], $row['nameproduct']);
            array_push($imageProducts, $currentImageProduct);
        }

        return $imageProducts;
    }

}
