<?php

namespace Model\Repository;

use Nette;

class Spravy extends Repository
{

    // zobrazi vsetky spravy daneho pouzivatela
    public function getAllMessage($user){
        $row = $this->db->table("pm")->where('user2', $user)->fetchAll();
        return $row;        
    }
    
    // odosle spravu
    public function sendMessage($title, $user1, $user2, $message){
            $this->db->table("pm")->insert([
                'id2' => 1,
                'title' => $title,
                'user1' => $user1,
                'user2' => $user2,
                'message' => $message,
                'user1read' => 1,
                'user2read' => 0,
            ]);
    }
    // odstranenie správy
    public function removeMessage(){
        $this->db->table("pm")->update([
            'remove' => 1
        ]);
    }
    
}