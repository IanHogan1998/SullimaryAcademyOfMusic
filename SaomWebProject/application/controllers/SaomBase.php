<?php

class SaomBase extends CI_Controller {

    function __construct() {
        parent::__construct();
    }
/*
  studentFName,
  studentLName,
  emailAddress,
  password,
  Address,
  phoneNumber,
  Course,
  DOB */
 
    function AddEntry() {
        //Validation Rules for addEntry View
        $user_validation_rules = array(
            array('field' => 'studentFName',
                'label' => 'Firstname',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'studentLName',
                'label' => 'Surname',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide a %s.')),
            array('field' => 'emailAddress',
                'label' => 'Email',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'password',
                'label' => 'Password',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'Address',
                'label' => 'Address',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'phoneNumber',
                'label' => 'phone Number',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'Course',
                'label' => 'Course',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')),
            array('field' => 'DOB',
                'label' => 'DOB',
                'rules' => 'required',
                'errors' => array('required' => 'You must provide an %s.')));
        $this->form_validation->set_rules($user_validation_rules);
        if ($this->form_validation->run() == FALSE) {
            //Load the Man Menu View
            $this->load->view('AddUser');
        } else {
            //Loads the Model of GGBase from the modles folder
            $this->load->model('SaomModel');
            //Add all the details to master table in the database and if all
            // Calls the addEntry function in the Model GGBase

            $this->SaomModel->addEntryMember();
            $view_data = array(
                'content' => $this->load->view('content/index', null, TRUE),
            );
            $this->load->view('layout', $view_data);
        }
    }

    public function index() {
        if ($this->session->userdata('loggedIn')) {

            $view_data = array(
                'content' => $this->load->view('content/index', null, true)
            );
            $this->load->view('layout2', $view_data);
        } else {
            $view_data = array(
                'content' => $this->load->view('content/index', null, true)
            );

            $this->load->view('layout', $view_data);
        }
    }

    public function aboutUs() {

        $view_data = array(
            'content' => $this->load->view('content/aboutUs', null, true)
        );

        $this->load->view('layout', $view_data);
    }

    public function dashborad() {

        $view_data = array(
            'content' => $this->load->view('content/dashborad', null, true)
        );

        $this->load->view('layout', $view_data);
    }

    public function dashborad2() {

        $view_data = array(
            'content' => $this->load->view('content/dashborad', null, true)
        );

        $this->load->view('layout2', $view_data);
    }

    public function viewEvent() {

        $view_data = array(
            'content' => $this->load->view('content/viewEvent', null, true)
        );

        $this->load->view('layout', $view_data);
    }
     public function manageStudent() {

        $view_data = array(
            'content' => $this->load->view('content/manageStudent', null, true)
        );

        $this->load->view('layout', $view_data);
    }

   function DeleteEntry() {
       $this->load->model('SaomModel');
        //This method fills the select box with contacts names on the 
        //Select option list for drop down on SelectEntry View. It then renders 
        //the SelecEntry view with the dropdown list values 
        //Select all contacts in the addressbook
        $data['display_block'] = $this->SaomModel->selectContacts();

        //Render the View SelectEntry with the contact list.            
        $this->load->view('DeleteEntry', $data);
    }

    function DeleteSelectedContact() {
        $this->load->model("SaomModel");
        $this->SaomModel->DeleteContact($this->input->post('master_id'));
        $data['display_block'] = $this->SaomModel->selectContacts();
        $this->load->view('DeleteEntry', $data);
    }

    function Logout() {
        unset($_SESSION['loggedIn']);
        $this->session->sess_destroy();
        redirect('Login/index');
    }

    function Logout2() {
        unset($_SESSION['loggedIn']);
        $this->session->sess_destroy();
        redirect('Login/index2');
    }

}

?>