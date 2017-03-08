<?php

include '../Data/ImageProductData.php';

class ImageProductBusiness {

    private $imageProductData;
    
    function ImageProductBusiness() {
        $this->imageProductData = new ImageProductData();
    }
    public function getAllTBImageProducts() {
        return $this->imageProductData->getAllTBImageProducts();
    }
    
}
