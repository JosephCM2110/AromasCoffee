<?php

include_once '../BusinessAdmin/AchievementAdminBusiness.php';
include_once '../Domain/Achievement.php';


if (isset($_POST['create'])) {

    $achievement = $_POST['txtAchievement'];

    $achievementO = new Achievement(0, $achievement,"");
    $achievementBusiness = new AchievementAdminBusiness();
    $result = $achievementBusiness->insertTBAchievement($achievementO);
    if ($result) {
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?success=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?error=error');
    }
    
} else if ($_POST['update']) {

    $achievement = $_POST['txtAchievement'];
    $idAchievement = $_POST['idAchievement'];
    if (strlen($achievement) > 2) {
        $achievement = new Achievement($idAchievement, $achievement, '');
        $achievementBusiness = new AchievementAdminBusiness();
        $result = $achievementBusiness->updateTBAchievement($achievement);
        if ($result) {
            header('location: ../PresentationAdmin/adminInformationAchievement.php?success=success');
        } else {
            header('location: ../PresentationAdmin/adminInformationAchievement.php?error=error');
        }
    } else {
        header('location: ../PresentationAdmin/adminInformationAchievement.php?errorData=error');
    }
} else if ($_POST['delete']) {

    $idAchievement = $_POST['idAchievement'];
    $pathImage = $_POST['path'];
    $achievementBusiness = new AchievementAdminBusiness();
    $result = $achievementBusiness->deleteTBAchievement($idAchievement);
    if ($result) {
        unlink("../Resources/ImagesAchievement/" . $path);
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?successDelete=success');
    } else {
        header('location: ../PresentationAdmin/adminCreateDeleteAchievement.php?errorDelete=success');
    }
}
