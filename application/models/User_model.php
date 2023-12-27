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
        else if (password_verify($password, $return)) {
            $this->session->set_flashdata('msg', '<p>Password salah</p>');
            return false;
        }
        else return true;
    }

    public function check_signup($username, $password, $category) {
        // Mengambil data user dari 'users' sesuai `username` ke $return
        $return = $this->db->get_where('users', array('username' => $username))->result();
        // Mengecek apa datanya sudah ada atau belum
        if ($return) {
            $this->session->set_flashdata('msg', '<p>Username sudah dipakai, silahkan ganti</p>');
            return false;
        } else {
            $data = array(
                'username'  => $username,
                'role'      => $category,
                'password'  => password_hash($password, PASSWORD_DEFAULT),
            );
            $this->db->insert('users', $data);
            $this->session->set_flashdata('msg', '<p>Silakan login kembali</p>');
            return true;
        } 
    }

    public function getSellerID($username) {
        $this->db->select('id');
        $this->db->where('username', $username);
        return $this->db->get('users')->row(0)->id;
    }
}

// Code Archive
        // if (!isset($password)){
        //     $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        //     return $query->num_rows() == 1;
        // }
        // $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        // return $query->num_rows() == 1;

