<?php

include './Data/ProductData.php';

class ProductBusiness {
    
    private $productData;
    
    function ProductBusiness() {
        $this->productData = new ProductData();
    }
    public function getAllTBProducts() {
        return $this->productData->getAllTBProducts();
    }
    
}
