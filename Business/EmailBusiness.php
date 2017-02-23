<?php

include '../Data/EmailData.php';

class EmailBusiness {

    private $emailData;
    
    function EmailBusiness() {
        $this->emailData = new EmailData();
    }

    public function insertTBEmail($email) {
        return $this->emailData->insertTBEmail($email);
    }

    public function updateTBEmail($email) {
        $this->emailData->updateTBEmail($email);
    }

    public function deleteTBEmail($idEmail) {
        $this->emailData->deleteTBEmail($idEmail);
    }

    public function getAllTBEmails() {
        $this->emailData->getAllTBEmails();
    }
    
}
