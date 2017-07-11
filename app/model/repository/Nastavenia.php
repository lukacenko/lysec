<?php

namespace Model\Repository;

use Nette;

class Nastavenia extends Repository {


    public function getInfoUser($id) {
        $result = $this->db->query('
        SELECT users.id, users.login, users.email, users.name, users.surname, users.sex,users.role, country.name as country, country.id_country as id_country FROM users
        INNER JOIN country ON users.country=country.id_country where users.id = '.$id.''); 
        $rows = $result->fetch();
        return $rows;
    }

    public function getCountry() {
        $result = $this->db->query('SELECT * FROM country');
        $rows = $result->fetchall();
        return $rows;
    }

    public function getBillingAdress($id) {
        
        $id = $this->db->query('SELECT default_billing_address_id FROM users WHERE id = '.$id.'');
        $id = $id->fetch();
        $result = $this->db->query('
        SELECT billing_address.id_billing_address, billing_address.surename, billing_address.name, billing_address.city, billing_address.street, billing_address.postcode,billing_address.phone, country.name as country, country.id_country as id_country FROM billing_address
        INNER JOIN country ON billing_address.country=country.id_country 
        WHERE billing_address.id_billing_address = '.$id->default_billing_address_id.'
        '); 
        echo '
        SELECT billing_address.id_billing_address, billing_address.surename, billing_address.name, billing_address.city, billing_address.street, billing_address.postcode,billing_address.phone, country.name as country, country.id_country as id_country FROM billing_address
        INNER JOIN country ON billing_address.country=country.id_country 
        WHERE billing_address.id_billing_address = '.$id->default_billing_address_id.'
        ';
        $rows = $result->fetch();
        return $rows;
    }
    public function getShippingAdress($id) {
        $result = $this->db->query('
        SELECT * FROM delivery_address WHERE `id_delivery_address` IN (
        SELECT `default_shipping_address_id` FROM `users` WHERE id = '.$id.')
        ');
        $rows = $result->fetch();
        return $rows;
    }
    
    public function editUser($data) {
        $values = get_object_vars($data);
        $id = $values['id'];
        unset($values['id']);
        $this->db->query('UPDATE users SET ? WHERE id=?', $values, $id);
    }

    public function editDelivery($data) {
        $values = get_object_vars($data);
        $id = $values['id'];
        unset($values['id']);
        $this->db->query('UPDATE delivery_address SET ? WHERE id_delivery_address=?', $values, $id);
    }
    
    public function editBilling($data) {
        $values = get_object_vars($data);
        $id = $values['id'];
        unset($values['id']);
        $this->db->query('UPDATE billing_address SET ? WHERE id_billing_address=?', $values, $id);
    }
}
