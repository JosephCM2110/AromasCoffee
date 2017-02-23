<?php


class Product {

    private $idProduct;
    private $nameProduct;
    private $description;
    
    function Product($idProduct, 
            $nameProduct, 
            $description) {
        $this->idProduct = $idProduct;
        $this->nameProduct = $nameProduct;
        $this->description = $description;
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getNameProduct() {
        return $this->nameProduct;
    }

    function getDescription() {
        return $this->description;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setNameProduct($nameProduct) {
        $this->nameProduct = $nameProduct;
    }

    function setDescription($description) {
        $this->description = $description;
    }


    
}
