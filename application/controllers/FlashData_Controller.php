<?php
    class FlashData_Controller extends CI_Controller {

        public function index() {
            $this->load->helper('url');
            //load session library
            $this->load->library('session');
            //redirect to home page
            $this->load->view('flashdata_home');
        }

        public function add() {
            //load session library
            $this->load->library('session');

            $this->load->helper('url');

            //add flash data
            $this->session->set_flashdata('item', 'item-value');
            //redirect to homepage
            redirect('flashdata');
        }
    }
?>
