<?php

class Posts extends CI_Controller {

    public function index($offset = 0) {
        //adding pagination config
        $config['base_url'] = base_url() . 'posts/index/';
        $config['total_rows'] = $this->db->count_all('posts');
        $config['per_page'] = 3;
        $config['uri_segment'] = 3;
        $config['attributes'] = array('class' => 'pagination-links');  //styling
        //init pagination
        $this->pagination->initialize($config);

        //title
        $data['title'] = 'Latest Posts';                             //Shows heading according to file name
        $data['posts'] = $this->post_model->get_posts(FALSE, $config['per_page'], $offset);
        // print_r($data['posts']);
        /* Debugging 
          echo '<pre> ';
          print_r($data);
         */
        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL) {
        $data['post'] = $this->post_model->get_posts($slug);
        $post_id = $data['post']['id'];
        $data['comments'] = $this->comment_model->get_comments($post_id);
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = $data['post']['title'];
        $this->load->view('templates/header');
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        //check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['title'] = 'Create Post';
        $data['categories'] = $this->post_model->get_categories();
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('posts/create', $data);
            $this->load->view('templates/footer');
        } else {
            //Upload Image and different config 
            $config['upload_path'] = './assets/images/posts';
            $config['allowed_types'] = 'jpeg|png|gip|jpg';
            $config['max_size'] = '2048';
            $config['width'] = '2000';
            $config['height'] = '2000';
            $this->load->library('upload', $config);
            //check if image uploaded successfully or not
            if (!$this->upload->do_upload()) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                $data = array('upload_data' => $this->upload->data());
                $post_image = $_FILES['userfile']['name'];
            }
            $this->post_model->create_post($post_image);
            //Set Session
            $this->session->set_flashdata('post_created', 'Your post has been created.');
            redirect('posts');
        }
    }

    public function delete($id) {
        // Check login
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $this->post_model->delete_post($id);
        // Set message
        $this->session->set_flashdata('post_deleted', 'Your post has been deleted');
        redirect('posts');
    }

    public function edit($slug) {
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $data['post'] = $this->post_model->get_posts($slug);

        //check user
        if ($this->session->userdata('user_id') != $this->post_model->get_posts($slug)['user_id']) {
            redirect('posts');
        }

        $data['categories'] = $this->post_model->get_categories();
        if (empty($data['post'])) {
            show_404();
        }
        $data['title'] = 'Edit Post';
        $this->load->view('templates/header');
        $this->load->view('posts/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        if (!$this->session->userdata('logged_in')) {
            redirect('users/login');
        }
        $this->post_model->update_post();
        //Set Session
        $this->session->set_flashdata('post_updated', 'Your post has been updated.');
        redirect('posts');
    }

}
