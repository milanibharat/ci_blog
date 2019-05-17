<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('welcome_message');
    }

    public function signin() {
        
    }

    public function signup() {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        if ($this->form_validation->run()) {
            $this->load->model('queries');                                                                          //echo 'Success';
            $data = $this->post();
            unset($data['submit']);
            if ($this->queries->register($data)) {
                $this->session->set_flashdata('response','Registered Successfully');
            } else {
                $this->session->set_flashdata('response','Registered Failed');
            }
        } else {
            echo validation_errors();
        }
    }

}
