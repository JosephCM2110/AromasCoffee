<?php

include_once '../BusinessAdmin/ProductAdminBusiness.php';
include_once '../Domain/Product.php';

if (isset($_POST['update'])) {

    $nameProduct = $_POST['txtNameProduct'];
    $description = $_POST['txtDescriptionProduct'];
    $idproduct = $_POST['idProduct'];

    if (strlen($nameProduct) > 2 && strlen($description) > 2) {
        $product = new Product($idproduct, $nameProduct, $description);
        $productBusiness = new ProductAdminBusiness();
        $result = $productBusiness->updateTBProduct($product);

        if ($result) {
            header('location: ../PresentationAdmin/adminInformationProduct.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationProduct.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationProduct.php?errorData=error');
    }
} else if ($_POST['create']) {

    $nameProduct = $_POST['txtNameProduct'];
    $description = $_POST['txtDescriptionProduct'];

    if (strlen($nameProduct) > 2 && strlen($description) > 2) {
        $product = new Product(0, $nameProduct, $description);
        $productBusiness = new ProductAdminBusiness();
        $result = $productBusiness->insertTBProduct($product);

        if ($result) {
            header('location: ../PresentationAdmin/adminCreateDeleteProduct.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteProduct.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteProduct.php?errorData=error');
    }
} else if (isset($_POST['delete'])) {

    $idProduct = $_POST['idProduct'];

    $productBusiness = new ProductAdminBusiness();
    $result = $productBusiness->deleteTBProduct($idProduct);

    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteProduct.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteProduct.php?errorDelete=error');
    }
}