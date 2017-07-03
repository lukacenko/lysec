<?php

namespace Model\Repository;

use Nette;

class Spravy extends Repository {

    // zobrazi vsetky prijate spravy daneho pouzivatela
    public function getAllMessage($user) {
        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' AND remove = 0 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi vsetky prijate spravy daneho pouzivatela
    public function getMessageUserId($id) {
        $result = $this->db->query('SELECT user2 FROM pm
            where id = ' . $id . ' ');
        $rows = $result->fetch();
        return $rows;
    }

    // zobrazi vsetky odoslane spravy daneho pouzivatela
    public function getAllSendMessage($user) {

        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user2=users.id where user1 = ' . $user . ' ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi vsetky oblubene spravy daneho pouzivatela
    public function getAllFavoriteMessage($user) {

        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' AND oblubena = 1 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    // zobrazi vsetky zmazane spravy daneho pouzivatela
    public function getAllDeleteMessage($user) {
        $result = $this->db->query('SELECT pm.user1,pm.timesend, pm.timestamp,pm.user2read, pm.id, pm.title, users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user2 = ' . $user . ' AND remove = 1 ORDER BY timesend DESC');
        $rows = $result->fetchAll();
        return $rows;
    }

    public function getAllMessageUsers($user) {

        $result = $this->db->query('SELECT pm.timesend, users.login,pm.message as sprava,pm.timestamp,pm.user2read, pm.id, pm.title FROM pm
            INNER JOIN users ON pm.user1=users.id where user1 = ' . $user . ' ');
        $rows = $result->fetchAll();

        // nastavy spravu ako precitanu
        //$this->db->query('UPDATE pm.message SET ? WHERE id=?', $data, $id);        
        return $rows;
    }

    public function getAllMessageUsersName($user) {

        $result = $this->db->query('SELECT users.login FROM pm
            INNER JOIN users ON pm.user1=users.id where user1 = ' . $user . ' ');
        $rows = $result->fetch();
        $result = $this->db->query(' UPDATE pm SET user2read = 1 WHERE user1 = ' . $user . '');
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
        $result = $this->db->query(' UPDATE pm SET oblubena = 1 WHERE id = ' . $id . '');
    }

}
