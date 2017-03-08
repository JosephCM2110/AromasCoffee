<?php

include_once '../Data/Data.php';
include_once '../Domain/User.php';

/**
 * Description of LoginAdminData
 *
 * @author mm
 */
class AdministratorData extends Data {

       
    function getAllTBUser(){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
                
        $querySelect = mysqli_query($conn, "select idtbuser, nameuser, email, passworduser from tbuser");
        $arrayUser = [];
        while($row = mysqli_fetch_array($querySelect)){
            
            $currrentUser = new User($row['nameuser'], $row['email'], $row['passworduser']);
            $currrentUser->setIdUser($row['idtbuser']);
            array_push($arrayUser, $currrentUser);
            
        }
        mysqli_close($conn);

        if (sizeof($arrayUser) >= 1) {
            return $arrayUser;
        } else {
            return false;
        }
          
    }
    
    function insertTBUser($user){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
        
        $resultId = mysqli_query($conn, "select max(idtbuser) from tbuser;");
        $row = mysqli_fetch_array($resultId);
        $idTbUser = $row[0] + 1;
        
        $queryInsert = mysqli_query($conn, "insert into tbuser values (".$idTbUser.",'".$user->getUserName()."',"
                . "'".$user->getEmail()."','".$user->getPassword()."');");

        mysqli_close($conn);

        if ($queryInsert) {
            return true;
        } else {
            return false;
        }
          
    }
    function updateTBUser($user){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
                
        $queryUpdate = mysqli_query($conn, "update tbuser set nameuser = '".$user->getUserName()."',"
                . " email = '".$user->getEmail()."', passworduser = '".$user->getPassword()."'"
                . " where idtbuser = ".$user->getIdUser().";");

        mysqli_close($conn);

        if ($queryUpdate) {
            return true;
        } else {
            return false;
        }
          
    }
    
    function deleteTBUser($idUser){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');
                
        $queryDelete = mysqli_query($conn, "delete from tbuser where idtbuser = ".$idUser);

        mysqli_close($conn);

        if ($queryDelete) {
            return true;
        } else {
            return false;
        }
          
    }
    
    

}
