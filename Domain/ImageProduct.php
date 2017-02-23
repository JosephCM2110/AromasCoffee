<?php


class ImageProduct {
    
    private $idImageProduct;
    private $imagePath;
    private $product;
    
    function ImageProduct($idImageProduct, 
            $imagePath, 
            $product) {
        $this->idImageProduct = $idImageProduct;
        $this->imagePath = $imagePath;
        $this->product = $product;
    }

    function getIdImageProduct() {
        return $this->idImageProduct;
    }

    function getImagePath() {
        return $this->imagePath;
    }

    function getProduct() {
        return $this->product;
    }

    function setIdImageProduct($idImageProduct) {
        $this->idImageProduct = $idImageProduct;
    }

    function setImagePath($imagePath) {
        $this->imagePath = $imagePath;
    }

    function setProduct($product) {
        $this->product = $product;
    }


    
}
