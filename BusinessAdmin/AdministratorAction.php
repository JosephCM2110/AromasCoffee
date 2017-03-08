<?php

include_once './AdministratorBusiness.php';
include_once './LoginBusiness.php';
include_once '../Domain/User.php';

if (isset($_POST['login'])) {

    $userName = str_replace("'", "", $_POST['txtUser']);
    $password = str_replace("'", "", $_POST['txtPassword']);

    if (strlen($userName) > 2 && strlen($password) > 2) {
        $adminBusiness = new LoginBusiness();
        $result = $adminBusiness->login($userName, $password);
        if ($result) {
            if (@session_start() == false) {
                session_start();
                $_SESSION['userName'] = $userName;
            } else {
                $_SESSION['userName'] = $userName;
            }
            header('location: ../PresentationAdmin/indexAdmin.php');
        } else {
            header('location: ../PresentationAdmin/login.php?errorE=error');
        }
    } else {
        header('location: ../PresentationAdmin/login.php?error=error');
    }
}else if(isset ($_POST['create'])){
    
    $userName = $_POST['txtUserName'];
    $email = $_POST['txtEmail'];
    $password = $_POST['txtPassword'];
    
    $user = new User($userName, $email, $password);
    $adminBusiness = new AdministratorBusiness();
    $result = $adminBusiness->insertTBuser($user);
    if($result){
         header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successCreate=success');
    }else{
         header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorCreate=error');
    }
    
    
}else if(isset ($_POST['delete'])){
    
    $idUser = $_POST['idUser'];
    
    $adminBusiness = new AdministratorBusiness();
    $result = $adminBusiness->deleteTBuser($idUser);
    
    if($result){
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?successDelete=success');
    }else{
        header('location: ../PresentationAdmin/adminCreateDeleteAdministrator.php?errorDelete=error');
    }
    
    
}else if(isset ($_POST['update'])){
    
    $count = $_POST['count'];
    
    
    
    
    
}