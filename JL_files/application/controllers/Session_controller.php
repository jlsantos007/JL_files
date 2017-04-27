<?php
    class Session_controller extends CI_Controller {

        public function index() {
            //load session library
            $this->load->library('session');
            //adding data to session
            $this->session->set_userdata('name', 'virat');

            $this->load->view('session_view');
        }

        public function unset_session_data() {
            //loading session library
            $this->session->unset_userdata('name');
            //removing session data
            $this->load->view('session_view');
        }
    }
?>
