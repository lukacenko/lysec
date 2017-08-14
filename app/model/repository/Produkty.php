<?php

namespace Model\Repository;

use Nette;

class Produkty extends Repository {

    public function inserProduct($val, $id) {
        return $this->db->query('INSERT INTO product', [
                    'product_name' => $val->product_name,
                    'keywords' => $val->keywords,
                    'title_photo' => $val->title_photo,
                    'other_photo' => $val->other_photo,
                    'availability' => $val->availability,
                    'price' => $val->price,
                    'postage' => $val->postage,
                    'category' => $val->one,
                    'material' => $val->material,
                    'color' => $val->color,
                    'production' => $val->production,
                    'subcategory' => $val->two,
                    'id_shop' => $val->shop,
                    'id_user' => $id,
        ]);
    }

    // zobrazi vsetky produkty
    public function getAllProduct() {
        $result = $this->db->query('SELECT * FROM product ORDER BY timestamp DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi produkt podla ID
    public function getSingleProduct($id) {
        $result = $this->db->query('SELECT product.product_name,material.material, production.production,product.other_photo,product.product_desc,product.price,product.stock,product.postage, color.color FROM product 
                                  INNER JOIN color ON id_color=product.color                 
                                  INNER JOIN material ON id_material=product.production                 
                                  INNER JOIN production ON id_production=product.color                 
                 where id = ' . $id . ' ORDER BY timestamp DESC ');
        $rows = $result->fetch();
        return $rows;
    }
    
    // zobrazi produkt podla ID
    public function getProductFromId($id_product) {
        $result = $this->db->query('SELECT * FROM product 
                 where id = ' . $id_product . '');
        $rows = $result->fetchAll();
        return $rows;
    }    
    // zobrazi produkt podla ID
    public function getIdShop($id) {
        $result = $this->db->query('SELECT id_user FROM product where id = ' . $id . '');
        $rows = $result->fetch();
        return $rows;
    }
    public function getAllProductUsers() {
        $result = $this->db->query('SELECT * FROM product ORDER BY timestamp DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getAllAvailability() {
        $result = $this->db->query('SELECT * FROM availability ORDER BY availability DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getShop($id) {
        $result = $this->db->query('SELECT * FROM shop where id_user = ' . $id . '');
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

        if ($id != null) {
            $result = $this->db->query('SELECT * FROM sub_category WHERE parent = ' . $id . ' AND level = 0 ORDER BY sub_category_name DESC');
        } else {
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
        if ($id_p != null) {
            $result = $this->db->query('SELECT * FROM sub_category WHERE level = 1 AND parent2 = ' . $id_p . ' ORDER BY sub_category_name DESC');
        } else {
            $result = $this->db->query('SELECT * FROM sub_category WHERE level = 1 ORDER BY sub_category_name DESC');
        }
        $rows = $result->fetchAll();
        $return = array();
        foreach ($rows as $col) {
            $return[$col['id_sub_category']] = $col['sub_category_name'];
        }
        return $return;
    }
    // odstranenie produtku
    public function removeProduct($id) {
        $result = $this->db->query(' DELETE FROM product WHERE id = ' . $id . '');
    }

}
