<?php

namespace Model\Repository;

use Nette;

class Spravy extends Repository {

    // zobrazi vsetky prijate spravy daneho pouzivatela
    public function getAllMessage($user) {
        $result = $this->db->query('SELECT pm.user1,pm.timesend,  pm.message,pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' AND remove = 0 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi id user2
    public function getMessageUserId($id) {
        $result = $this->db->query('SELECT user2 FROM pm
            where id = ' . $id . ' ');
        $rows = $result->fetch();
        return $rows;
    }
    // zobrazi id user1
    public function getMessageUserId1($id) {
        $result = $this->db->query('SELECT user1 FROM pm
            where id = ' . $id . ' ');
        $rows = $result->fetch();
        return $rows;
    }

    public function getUserFromId($id) {
        $result = $this->db->query('SELECT login FROM users
            where id = ' . $id . ' ');
        $rows = $result->fetch();
        return $rows;
    }

    public function getIdFromIdFavoriteMessager($id) {
        $result = $this->db->query('SELECT popular_user_id FROM favorite_users
            where id = ' . $id . ' ');
        $rows = $result->fetch();
        return $rows;
    }

    // zobrazi vsetky odoslane spravy daneho pouzivatela
    public function getAllSendMessage($user) {

        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.message,pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user2=users.id where user1 = ' . $user . ' AND remove != 1 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi vsetky oblubene spravy daneho pouzivatela
    public function getAllFavoriteMessage($user) {

        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.message, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' AND favorite = 1 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi vsetky zmazane spravy daneho pouzivatela
    public function getAllDeleteMessage($user) {
        $result = $this->db->query('SELECT pm.user1,pm.timesend,pm.message, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' OR  user1 = ' . $user . ' AND remove = 1 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getAllMessageUsers($id) {

        $result = $this->db->query('SELECT user1, user2 FROM pm
          where id = ' . $id . ' ');
        $rows = $result->fetch();
        if (isset($rows->user1)) {
            $user = $rows->user1;
            $user2 = $rows->user2;
            $result = $this->db->query('SELECT pm.user1,pm.user2,pm.timesend, users.login,pm.message as sprava,pm.timestamp,pm.user2read, pm.id, pm.title FROM pm
            INNER JOIN users ON pm.user1=users.id where remove != 1 AND (user1 = ' . $user . ' AND  user2 = ' . $user2 . ') OR (user1 = ' . $user2 . ' AND  user2 = ' . $user . ') ORDER BY timesend asc');
            $rows = $result->fetchAll();
            // nastavy spravu ako precitanu
            //$this->db->query('UPDATE pm.message SET ? WHERE id=?', $data, $id);        
            return $rows;
        } else {
            return false;
        }
    }

    public function getAllMessageUsersName($user) {

        $result = $this->db->query('SELECT users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' ');
        $rows = $result->fetch();
        $result = $this->db->query(' UPDATE pm SET user2read = 1 WHERE user1 = ' . $user . '');
        return $rows;
    }


    // zobrazi vsetky prijate spravy daneho pouzivatela
    public function getFavoriteUsers($user_id) {
        $result = $this->db->query('SELECT favorite_users.id,favorite_users.popular_user_id, users.login,users.name,users.surname FROM favorite_users
            INNER JOIN users ON favorite_users.popular_user_id=users.id where user_id = '.$user_id.' ');
        $rows = $result->fetchAll();
        return $rows;
    }

    
    
    // odosle spravu
    public function sendMessage($title, $user1, $user2, $message) {
        $this->db->table("pm")->insert([
            'id2' => 1,
            'title' => $title,
            'user1' => $user1
            , 'user2' => $user2,
            'message' => $message,
            'user1read' => 1,
            'user2read' => 0,
            'timesend' => date("Y-m-d H:i:s")
        ]);
    }

    // odstranenie správy
    public function removeMessage($id) {
        $result = $this->db->query(' UPDATE pm SET remove = 1 WHERE id = ' . $id . '');
    }

    public function favoriteMessage($id) {
        $result = $this->db->query(' UPDATE pm SET favorite = 1 WHERE id = ' . $id . '');
    }

    public function removeFavoriteMessage($id) {
        $result = $this->db->query(' UPDATE pm SET favorite = 0 WHERE id = ' . $id . '');
    }

    public function removeFavoriteUsers($id) {
        $result = $this->db->query('DELETE  FROM favorite_users WHERE id = ' . $id . '');
    }

}
