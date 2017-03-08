<?php

include_once '../BusinessAdmin/ImagesGaleryAdminBusiness.php';
include_once '../Domain/Image.php';


$ds = DIRECTORY_SEPARATOR;

$storeFolder = '../Resources/ImagesGalery/';

if (!empty($_FILES)) {

    $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    if (in_array($_FILES['file']['type'], $allowed)) {
        $tempFile = $_FILES['file']['tmp_name'];

        $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;

        $targetFile = $targetPath . $_FILES['file']['name'];

        if (move_uploaded_file($tempFile, $targetFile)) {

            $image = new Image(0, $_FILES['file']['name'], "Café Aromas");
            $imagesBusiness = new ImagesGaleryAdminBusiness();
            $result = $imagesBusiness->insertTBImage($image);
        }
    }
}
?> 