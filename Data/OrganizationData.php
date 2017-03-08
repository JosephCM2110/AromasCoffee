<?php

include_once 'Data.php';
include './Domain/Organization.php';

class OrganizationData extends Data {

    public function getAllTBOrganizations() {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $querySelect = "SELECT * FROM tborganization;";
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
    
}
