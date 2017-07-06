<?php

namespace Model\Repository;

use Nette;

class Produkty extends Repository {

// zobrazi vsetky produkty
    public function getAllProduct() {
        $result = $this->db->query('SELECT * FROM product ORDER BY timestamp DESC');
        $rows = $result->fetchAll();
        return $rows;
    }    
    
    public function getAllAvailability() {
        $result = $this->db->query('SELECT * FROM availability ORDER BY availability DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getAllColor() {
        $result = $this->db->query('SELECT * FROM color ORDER BY color DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

}
