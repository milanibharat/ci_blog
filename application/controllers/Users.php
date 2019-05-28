<?php

class Users extends CI_Controller {

    public function register() {
        $data['title']='Sign Up';
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cnfpassword', 'Confirm Password', 'matches[password]');      //password2
        
         if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {
            //Encrypt Password
            $enc_password=md5($this->input->post->password);
            
            $this->user_model->register($enc_password);
            
            //Set Session
            $this->session->set_flashdata('User Registered','You can now log in');
            
            redirect('posts');                                         //Do not use return statement here       
                    
        }
    }

}
