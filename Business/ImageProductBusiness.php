<?php

include '../Data/ImageProductData.php';

class ImageProductBusiness {

    private $imageProductData;
    
    function ImageProductBusiness() {
        $this->imageProductData = new ImageProductData();
    }

    public function insertTBImageProduct($imageProduct) {
        return $this->imageProductData->insertTBImageProduct($imageProduct);
    }

    public function updateTBImageProduct($imageProduct) {
        return $this->imageProductData->updateTBImageProduct($imageProduct);
    }

    public function deleteTBImageProduct($idImage) {
        return $this->imageProductData->deleteTBImageProduct($idImage);
    }

    public function getAllTBImageProducts() {
        return $this->imageProductData->getAllTBImageProducts();
    }
    
}
