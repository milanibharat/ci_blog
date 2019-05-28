<?php

class User_model extends CI_Model {

    public function register($enc_password) {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'zipcode' => $this->input->post('zipcode'),
            'password' => $enc_password,           
        );
        return $this->db->insert('users', $data);
    }
    
    //User LogIn
    public function login($username,$password){
        //validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result=$this->db->get('users');
        if($result->num_rows()==1){
            return $result->row(0)->id;
        }else{
            return FALSE;
        }
    }
    
//check username exists
    public function check_username_exists($username){
        $query=$this->db->get_where('users',array('username'=>$username));
        if(empty($query->row_array())){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
    //check email exists
     public function check_email_exists($email){
        $query=$this->db->get_where('users',array('email'=>$email));
        if(empty($query->row_array())){
            return TRUE;
        }else{
            return FALSE;
        }
    }
}

?>