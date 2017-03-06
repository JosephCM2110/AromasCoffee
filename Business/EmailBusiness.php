<?php

include './Data/EmailData.php';

class EmailBusiness {

    private $emailData;
    
    function EmailBusiness() {
        $this->emailData = new EmailData();
    }

    public function insertTBEmail($email) {
        return $this->emailData->insertTBEmail($email);
    }

    public function updateTBEmail($email) {
        return $this->emailData->updateTBEmail($email);
    }

    public function deleteTBEmail($idEmail) {
        return $this->emailData->deleteTBEmail($idEmail);
    }

    public function getAllTBEmails() {
        return $this->emailData->getAllTBEmails();
    }
    
}
