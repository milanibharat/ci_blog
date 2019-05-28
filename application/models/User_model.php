<?php

class User_model extends CI_Model {

    public function register($enc_password) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $this->input->post('password'),           
        );
        return $this->db->insert('users', $data);
    }

}

?>