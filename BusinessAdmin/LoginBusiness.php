<?php

include_once '../DataAdmin/LoginData.php';

/**
 * Description of LoginBusiness
 *
 * @author mm
 */
class LoginBusiness {
    
    public $loginData;
    
    public function LoginBusiness(){
        $this->loginData = new LoginData();
    }    
    public function login($userName, $password){
        return $this->loginData->login($userName, $password);
    }
}
