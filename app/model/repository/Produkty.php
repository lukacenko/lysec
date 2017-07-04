<?php

namespace Model\Repository;

use Nette;

class Produkty extends Repository {

// zobrazi vsetky prijate spravy daneho pouzivatela
    public function getAllProduct() {
        $result = $this->db->query('SELECT * FROM product ORDER BY timestamp DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

}
