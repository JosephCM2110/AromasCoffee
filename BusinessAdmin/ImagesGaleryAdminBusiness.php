<?php

include_once '../DataAdmin/ImagesGaleryAdminData.php';

/**
 * Description of ImagesGaleryAdminBusiness
 *
 * @author mm
 */
class ImagesGaleryAdminBusiness {
    
    public $imagesGalery;
    
    public function ImagesGaleryAdminBusiness(){
        $this->imagesGalery = new ImagesGaleryAdminData();
    }
    
    public function insertTBImage($image) {
        return $this->imagesGalery->insertTBImage($image);
    }

    public function updateTBImage($image) {
        return $this->imagesGalery->updateTBImage($image);
    }

    public function deleteTBImage($idImage) {
        return $this->imagesGalery->deleteTBImage($idImage);
    }

    public function getAllTBImages() {
        return $this->imagesGalery->getAllTBImages();
    }
    
}
