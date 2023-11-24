<?php
class User_model extends CI_Model {
    public function check_login($username, $password) {
        // Mengambil 'password' dari 'users' sesuai `username` ke $return
        $this->db->select('password');
        $this->db->where('username', $username);
        $return = $this->db->get('users')->row(0)->password;
        // Mengecek $return == parameter $password
        if ($return == NULL) {
            $this->session->set_flashdata('msg', '<p>Username tidak ditemukan, silahkan daftar dahulu</p>');
            return false;
        }
        else if ($password != $return) {
            $this->session->set_flashdata('msg', '<p>Password salah</p>');
            return false;
        }
        else return true;
    }
}

// Code Archive
        // if (!isset($password)){
        //     $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        //     return $query->num_rows() == 1;
        // }
        // $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        // return $query->num_rows() == 1;

