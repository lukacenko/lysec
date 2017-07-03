<?php

namespace Model\Repository;

use Nette;

class Nastavenia extends Repository {

    /**
     * @var Nette\Database\Context
     */
    /*
      private $database;

      public function __construct(Nette\Database\Context $database)
      {
      $this->database = $database;
      }
     */
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
