<?php
include_once '../BusinessAdmin/ImagesGaleryAdminBusiness.php';
include_once '../BusinessAdmin/ImagesProductAdminBusiness.php';


if(isset($_POST['deleteGalery'])){
    
    $idImage = $_POST['idImage'];
    $path = $_POST['path'];
    
    $image = new ImagesGaleryAdminBusiness();
    $result = $image->deleteTBImage($idImage);
    if($result){
        unlink("../Resources/ImagesGalery/".$path);
    }   
    
}else if(isset ($_POST['deleteProduct'])){
    
    $idImage = $_POST['idImage'];
    $path = $_POST['path'];
    
    $image = new ImagesProductAdminBusiness();
    $result = $image->deleteTBImageProduct($idImage);
    if($result){
        unlink("../Resources/ImagesProducts/".$path);
    } 
    
    
}