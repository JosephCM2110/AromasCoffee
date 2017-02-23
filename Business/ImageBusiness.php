<?php

include '../Data/ImageData.php';

class ImageBusiness {

    private $imageData;
    
    function ImageBusiness() {
        $this->imageData = new ImageData();
    }

    public function insertTBImage($image) {
        return $this->imageData->insertTBImage($image);
    }

    public function updateTBImage($image) {
        return $this->imageData->updateTBImage($image);
    }

    public function deleteTBImage($idImage) {
        return $this->imageData->deleteTBImage($idImage);
    }

    public function getAllTBImages() {
        return $this->imageData->getAllTBImages();
    }
    
}
