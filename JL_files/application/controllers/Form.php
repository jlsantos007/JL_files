<?php
    class Form extends CI_Controller {

        public function index() {
            //load from helper
            $this->load->helper(array('form' ,'url'));
            //load from validation library
            $this->load->library('form_validation');
            //set validation rule
            $this->form_validation->set_rules('name', 'Name', 'required');

            if($this->form_validation->run() == true) {
                $this->load->view('formsuccess');
            }
            else {
                $this->load->view('myform');
            }
        }
    }
?>
