<?php

class Queries extends CI_Model {
    public function register($data){
        return $this->db->insert('tbl_users',$data);
    }
}

?>