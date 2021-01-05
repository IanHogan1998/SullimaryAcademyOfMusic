<?php

class Login extends CI_Controller {

       function __construct() {
        parent::__construct();

        //Loads the AddressBook model  
        if($this->session->userdata('loggedIn')) {
            redirect('SaomBase/dashborad');
        }
    }

 public function index() {
            $view_data = array(
                'content' => $this->load->view('content/login', null, TRUE),
            ); 
        $this->load->view('layout', $view_data);
        $this->load->model('User');

        if($this->input->post('submit')) {

            if($this->User->validUser()) {
                $this->session->set_userdata('loggedIn', true);
                redirect('SaomBase/dashborad');
            }
        }
    }

    public function index2() {
            $view_data = array(
                'content' => $this->load->view('content/loginStaff', null, TRUE),
            ); 
        $this->load->view('layout', $view_data);
        $this->load->model('User');

        if($this->input->post('submit')) {

            if($this->User->validUser2()) {
                $this->session->set_userdata('loggedIn', true);
                redirect('SaomBase/dashborad2');
            }
        }
    }
    
}