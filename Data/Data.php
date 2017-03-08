<?php

class Data {

    public $server;
    public $user;
    public $password;
    public $db;
    public $connection;
    public $isActive;

    public function Data() {
        $hostName = gethostname();
        
        switch ($hostName) {
            case "admin": //Joseph's PC
                $this->isActive = false;
                $this->server = "127.0.0.1";
                $this->user = "root";
                $this->password = "";
                $this->db = "aromascoffee";
                break;
            default: //Hosting
                $this->isActive = false;
                $this->server = "192.17.230.59";
                $this->user = "adminsoft";
                $this->password = "123456";
                $this->db = "harvestsoft";
                break;
            case "Michael": //Joseph's PC
                $this->isActive = false;
                $this->server = "127.0.0.1";
                $this->user = "root";
                $this->password = "";
                $this->db = "aromascoffee";
                break;
        }
    }

}
