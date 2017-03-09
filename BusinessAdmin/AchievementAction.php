<?php

include_once '../BusinessAdmin/AchievementAdminBusiness.php';
include_once '../Domain/Achievement.php';


if (isset($_POST['create'])) {

    $achievement = $_POST['txtAchievement'];
    $fileImage = 'fileImage';

    if ($_FILES[$fileImage]["error"] > 0) {
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?errorData=error');
    } else {

        $allowed = array("image/jpg", "image/jpeg", "image/gif", "image/png");
        $limit_kb = 10000;

        if (in_array($_FILES[$fileImage]['type'], $allowed) &&
                $_FILES[$fileImage]['size'] <= $limit_kb * 1024) {

            $path = "../Resources/ImagesAchievement/" . $_FILES[$fileImage]['name'];

            /* verifiacion imagen a isertar no exista */
            if (!file_exists($path)) {
                /* verificacion imagen hata movido a la ruta de destino */
                $result = @move_uploaded_file($_FILES[$fileImage]["tmp_name"], $path);
                if ($result) {
                    $achievement = new Achievement(0, $achievement,$_FILES[$fileImage]['name']);
                    $achievementBusiness = new AchievementAdminBusiness();
                    $result = $achievementBusiness->insertTBAchievement($achievement);
                    if($result){
                        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?success=success');
                    }else{
                        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?error=error');
                    }                    
                }
            } else {
                header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?errorExis=error');
            }
        } else {
            header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?errorSize=error');
        }
    }
} else if ($_POST['update']) {
    
    $achievement = $_POST['txtAchievement'];
    $idAchievement = $_POST['idAchievement'];
    if(strlen($achievement) > 2){
        $achievement = new Achievement($idAchievement, $achievement,'');
        $achievementBusiness = new AchievementAdminBusiness();
        $result = $achievementBusiness->updateTBAchievement($achievement);
        if($result){
            header('location: ../PresentationAdmin/adminInformationAchievement.php?success=success');
        }else{
            header('location: ../PresentationAdmin/adminInformationAchievement.php?error=error');
        }
    }else{
        header('location: ../PresentationAdmin/adminInformationAchievement.php?errorData=error');
    }
    
} else if ($_POST['delete']) {
    
    $idAchievement = $_POST['idAchievement'];
    $pathImage = $_POST['path'];
    $achievementBusiness = new AchievementAdminBusiness();
    $result = $achievementBusiness->deleteTBAchievement($idAchievement);
    if($result){
        unlink("../Resources/ImagesAchievement/".$path);
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?successDelete=success');
    }else{
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?errorDelete=success');
    }
    
    
    
}
