<?php

include_once '../Data/Data.php';
include_once '../Domain/Organization.php';

/**
 * Description of OrganizationAdminData
 *
 * @author mm
 */
class OrganizationAdminData extends Data{    
    
    function getAllTBOrganizations() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "select * from tborganization;";
        $result = mysqli_query($conn, $querySelect);
        mysqli_close($conn);

        $row = mysqli_fetch_array($result);
        $currentOrganization = new Organization(
                    $row['idtborganization'],
                    $row['nameorganization'],
                    $row['history'],
                    $row['mission'],
                    $row['vision'],
                    $row['location']);        
        return $currentOrganization;
    }
    
    function updateHistory($history){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tborganization set history = '".$history."';";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);
        if($result){
            return true;
        }else{
            return false;
        }       
        
    }
    
    function updateMission($mission){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tborganization set mission = '".$mission."';";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);
        if($result){
            return true;
        }else{
            return false;
        }       
        
    }
    
    function updateVision($vision){
        
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $queryUpdate = "update tborganization set vision = '".$vision."';";
        $result = mysqli_query($conn, $queryUpdate);
        mysqli_close($conn);
        if($result){
            return true;
        }else{
            return false;
        }       
        
    }
    
    
    
}
