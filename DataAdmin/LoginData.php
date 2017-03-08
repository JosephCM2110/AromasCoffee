<?php

include_once '../Data/Data.php';

/**
 * Description of LoginData
 *
 * @author mm
 */
class LoginData extends Data{
    
     function login($userName, $password) {
        $conn = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        $conn->set_charset('utf8');

        $result = mysqli_query($conn, "select * from tbuser where"
                . " nameuser = '" . $userName . "' and passworduser = '"
                . $password . "';");

        mysqli_close($conn);
        
        $count = mysqli_num_rows($result);

        if ($count >= 1) {
            return true;
        } else {
            return false;
        }
    }
    
    
}
