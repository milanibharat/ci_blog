<?php

class Users extends CI_Controller {

    public function register() {
        $data['title'] = 'Sign Up';

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
        $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cnfpassword', 'Confirm Password', 'matches[password]');      //password2

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/register', $data);
            $this->load->view('templates/footer');
        } else {
            //Encrypt Password
            $enc_password = md5($this->input->post('password'));

            $this->user_model->register($enc_password);

            //Set Session
            $this->session->set_flashdata('user_registered', 'You can now log in');

            redirect('posts');                                         //Do not use return statement here       
        }
    }

    public function login() {
        $data['title'] = 'Sign In';

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('users/login', $data);
            $this->load->view('templates/footer');
        } else {
            //Get username
            $username = $this->input->post('username');

            //Get and Encrypt Password
            $password = md5($this->input->post('password'));

            //Login User
            $user_id = $this->user_model->login($username, $password);

            if ($user_id) {
                //create session
                $user_data=array(
                    'user_id'=>$user_id,
                    'username'=>$username,
                    'logged_in'=>TRUE
                );
                $this->session->set_userdata($user_data);
                
                //Set Message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

                redirect('posts');                                         //Do not use return statement here    
            } else {
                //Set Message
                $this->session->set_flashdata('login_failed', 'Invalid Login Credentials');

                redirect('users/login');                                         //Do not use return statement here      
            }
        }
    }

    public function logout() {
        //Unset User data
                $this->session->unset_userdata($logged_in);
                $this->session->unset_userdata($user_id);
                $this->session->unset_userdata($username);
                
                //Set Message
                $this->session->set_flashdata('user_loggedout', 'You are now logged out');

                redirect('users/login');                                         //Do not use return statement here    
            }      
    
    //Check if username exists
    public function check_username_exists($username) {
        $this->form_validation->set_message('check_username_exists', 'That username already used. Please choose different username');
        if ($this->user_model->check_username_exists($username)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function check_email_exists($email) {
        $this->form_validation->set_message('check_email_exists', 'That email already used. Please choose different email');
        if ($this->user_model->check_email_exists($email)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}
