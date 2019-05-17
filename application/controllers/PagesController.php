<?php

class PagesController extends CI_Controller {

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }
        $data['title'] = ucfirst($page);                    //Shows heading according to file name

        $this->load->view('templates/header');
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

}

?>