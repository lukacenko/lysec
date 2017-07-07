<?php

namespace Model\Repository;

use Nette;

class Obnova extends Repository {

// zobrazi vsetky produkty
    public function recoveryPassword($password, $id, $email) {
        $result = $this->db->query('UPDATE users SET password = "'.$password.'" WHERE email = "' . $email . '" AND forgot_pass_identity = "' . $id . '"');
        $result = $this->db->query('UPDATE users SET forgot_pass_identity = "" WHERE email = "' . $email . '" AND forgot_pass_identity = "' . $id . '"');
        return $result;
    }    

    public function verificationId($id, $email) {
        $result = $this->db->query('SELECT * FROM users WHERE email = "' . $email . '" AND forgot_pass_identity = "' . $id . '"');
        $rows = $result->fetch();
        return $rows;      
    }    
    

}
