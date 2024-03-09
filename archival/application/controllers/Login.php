<?php
class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('user_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login/index');
    }

    public function signup() {
        $this->load->view('login/form_signup');
    }

   // Contoh di dalam Login.php
    public function do_login() {
        $this->load->model('user_model'); // Pastikan model di-load
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'logged_in' => true,
            'seller_id' => $this->user_model->getSellerID($username) // Perlu dibuat Model pemanggilan ID berdasarkan 'Seller'
        );

        if ($this->user_model->check_login($username, $password)) {
            // Login berhasil
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            // Login gagal
            echo "failed";
            redirect('login');
        }
    }

    public function do_signup() {
        $this->load->model('user_model'); // Pastikan model di-load
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $category = $this->input->post('category');

        if ($this->user_model->check_signup($username, $password, $category)) {
            // Daftar berhasil
            redirect('login');
        } else {
            // Daftar gagal
            echo "failed";
            redirect('login/signup');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
