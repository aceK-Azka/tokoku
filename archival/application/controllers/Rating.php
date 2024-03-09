<?php
class Rating extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('rating_model');
        $this->load->library('session');
    }

    public function rate_menu() {
        if ($this->session->userdata('logged_in')) {
            $menuId = $this->input->post('menu_id');
            $userId = $this->session->userdata('user_id');
            $rating = $this->input->post('rating');
            
            // Check if the user has already rated the menu
            if (!$this->rating_model->userHasRated($menuId, $userId)) {
                $this->rating_model->addRating($menuId, $userId, $rating);
            }

            // Redirect to the menu page
            redirect('menu/show_menu');
        } else {
            redirect('login');
        }
    }
}
