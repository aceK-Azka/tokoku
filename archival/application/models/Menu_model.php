<?php
class Menu_model extends CI_Model {
    private $data = array();
    public function getMenu() {
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function getMenuWithRating() {
        $menus = $this->getMenu();
        foreach ($menus as &$menu) {
            $menu['rating'] = $this->rating_model->getMenuRating($menu['id']);
        }
        return $menus;
    }

    public function searchMenu($keyword) {
        $this->db->like('name', $keyword);
        $this->db->or_like('description', $keyword);
        $query = $this->db->get('menu');
        return $query->result_array();
    }

    public function addMenu() {
        $this->data = array(
            'name'          => $this->input->post('name'),
            'description'   => $this->input->post('description'),
            'photo'         => $this->upload->data('file_name'),
            'whatsapp_link' => $this->input->post('whatsapp_link'),
            'seller_id'     => $this->session->userdata('seller_id')
        );
        $this->db->insert('menu', $this->data);
    }
}
