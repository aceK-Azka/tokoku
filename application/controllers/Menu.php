<?php
class Menu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('menu_model');
        $this->load->library('session');
    }

    public function show_menu() {
        if ($this->session->userdata('logged_in')) {
            $data['menu'] = $this->menu_model->getMenu();
            $this->load->view('menu/show', $data);
        } else {
            redirect('login');
        }
    }

    public function upload_menu() {
        if ($this->session->userdata('logged_in')) {
            $this->load->view('menu/upload_form', array('error' => ' '));
        } else {
            redirect('login');
        }
    }

    public function do_upload() {
        // Code untuk meng-handle upload menu
        if ($this->session->userdata('logged_in')) {
            if($this->upload()){
                $this->menu_model->addMenu();
                if($this->db->affected_rows() > 0) {
                    redirect('home');
                } else {
                    site_url('menu/do_upload');
                }
            } else {
                echo '<script> alert(\''. $this->upload->display_errors() .'\') </script>';
            }
        } else {
            redirect('login');
        }
    }

    public function search_menu() {
        if ($this->session->userdata('logged_in')) {
            $keyword = $this->input->get('keyword');
            $data['menu'] = $this->menu_model->searchMenu($keyword);
            $this->load->view('menu/show', $data);
        } else {
            redirect('login');
        }
    }

    private function upload() {
        $config['upload_path']     = './assets/images/menus/';
        // $config['upload_path']     = 'menus/';
        $config['allowed_types']   = 'jpg|png';
        $config['max_size']        = '2000';
        $config['max_width']       = '3000';
        $config['max_height']      = '3000';
    
        $this->load->library('upload', $config);
        // $this->upload->initialize($config);
        return $this->upload->do_upload('userfile');
    }
}
