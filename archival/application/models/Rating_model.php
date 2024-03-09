<?php
class Rating_model extends CI_Model {
    public function addRating($menuId, $userId, $rating) {
        $data = array(
            'menu_id' => $menuId,
            'user_id' => $userId,
            'rating' => $rating
        );

        return $this->db->insert('ratings', $data);
    }

    public function getMenuRating($menuId) {
        $this->db->select_avg('rating');
        $this->db->where('menu_id', $menuId);
        $query = $this->db->get('ratings');
        return $query->row()->rating;
    }

    public function userHasRated($menuId, $userId) {
        $this->db->where('menu_id', $menuId);
        $this->db->where('user_id', $userId);
        $query = $this->db->get('ratings');

        return $query->num_rows() > 0;
    }
}
