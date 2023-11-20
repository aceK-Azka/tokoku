<?php
class Home extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('menu_model');
        $this->load->model('rating_model');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            $data['menu'] = $this->menu_model->getMenuWithRating();
            $this->load->view('home/index', $data);
        } else {
            redirect('login');
        }
    }
}
