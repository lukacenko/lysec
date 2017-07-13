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

    public function getAllCategory() {
        $result = $this->db->query('SELECT * FROM category ORDER BY category_name DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getAllSubCategory($id) {
        
        if($id != null){
            $result = $this->db->query('SELECT * FROM sub_category WHERE parent = ' . $id . ' AND level = 0 ORDER BY sub_category_name DESC');
        }else{
            $result = $this->db->query('SELECT * FROM sub_category WHERE level = 0 ORDER BY sub_category_name DESC');
        }
        $rows = $result->fetchAll();
        $return = array();
        foreach ($rows as $col) {
            $return[$col['id_sub_category']] = $col['sub_category_name'];
        }
        return $return;
    }

    public function getAllSubCategoryLevel2($id_p) {
        if($id_p != null){
            $result = $this->db->query('SELECT * FROM sub_category WHERE level = 1 AND parent2 = '.$id_p.' ORDER BY sub_category_name DESC');
        }else{
            $result = $this->db->query('SELECT * FROM sub_category WHERE level = 1 ORDER BY sub_category_name DESC');
        }
        $rows = $result->fetchAll();
        $return = array();
        foreach ($rows as $col) {
            $return[$col['id_sub_category']] = $col['sub_category_name'];
        }
        return $return;
    }

}
