<?php

include_once '../DataAdmin/ProductAdminData.php';

/**
 * Description of ProductAdminBusiness
 *
 * @author mm
 */
class ProductAdminBusiness {

    public $productData;

    public function ProductAdminBusiness() {

        $this->productData = new ProductAdminData();
    }

    public function insertTBProduct($product) {
        return $this->productData->insertTBProduct($product);
    }

    public function updateTBProduct($product) {
        return $this->productData->updateTBProduct($product);
    }

    public function deleteTBProduct($idProduct) {
        return $this->productData->deleteTBProduct($idProduct);
    }

    public function getAllTBProducts() {
        return $this->productData->getAllTBProducts();
    }

}
