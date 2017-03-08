<?php



/**
 * Description of User
 *
 * @author mm
 */
class User {
   
    private $idUser;
    private $userName;
    private $email;
    private $passwordUser;
    
    public function User($userName,$email,$password){
        $this->userName = $userName;
        $this->email = $email;
        $this->passwordUser = $password;
    }
    
    public function setIdUser($idUser){
        $this->idUser = $idUser;
    }
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function setPassword($password){
        $this->passwordUser = $password;
    }
    
    public function getIdUser(){
        return $this->idUser;
    }
    public function getUserName(){
        return $this->userName;
    }
    public function getEmail(){
        return  $this->email;
    }
    public function getPassword(){
        return $this->passwordUser;
    }
    
    
    
}
