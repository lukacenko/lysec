<?php

namespace Model\Repository;

use Nette;

class Nastavenia extends Repository {


    public function getInfoUser($id) {
        $result = $this->db->query('SELECT * FROM users where id = ' . $id . '');
        $rows = $result->fetch();
        return $rows;
    }
    public function editUser($data) {
        $values = get_object_vars($data);
        $id = $values['id'];
        unset($values['id']);
        $this->db->query('UPDATE users SET ? WHERE id=?', $values, $id);
    }

}
