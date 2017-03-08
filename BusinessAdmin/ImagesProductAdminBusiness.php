<?php

include_once '../DataAdmin/ImagesProductAdminData.php';

/**
 * Description of ImagesProductAdminBusiness
 *
 * @author mm
 */
class ImagesProductAdminBusiness {
   
    public $imageProductData;
    
    public function ImagesProductAdminBusiness(){
        $this->imageProductData = new ImagesProductAdminData();
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
