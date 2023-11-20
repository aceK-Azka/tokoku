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

   // Contoh di dalam Login.php
    public function do_login() {
        $this->load->model('user_model'); // Pastikan model di-load
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'logged_in' => true,
            'seller_id' => 1 // Perlu dibuat Model pemanggilan ID berdasarkan 'Seller'
        );

        if ($this->user_model->check_login($username, $password)) {
            // Login berhasil
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            // Login gagal
            echo "failed";
        }
        // redirect('home/index');
    }

    public function do_signup() {
        $this->load->model('user_model'); // Pastikan model di-load
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = array(
            'username' => $username,
            'logged_in' => true
        );

        if ($this->user_model->check_login($username, $password)) {
            // Login berhasil
            $this->session->set_userdata($data);
            $this->load->view('home/index');
        } else {
            // Login gagal
            echo "failed";
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('username');
        redirect('login');
    }
}
