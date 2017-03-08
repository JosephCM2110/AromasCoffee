<?php

include '../Data/ImageData.php';

class ImageBusiness {

    private $imageData;
    
    function ImageBusiness() {
        $this->imageData = new ImageData();
    }

    public function getAllTBImages() {
        return $this->imageData->getAllTBImages();
    }
    
}
