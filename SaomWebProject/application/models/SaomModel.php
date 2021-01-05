
<?php

Class SaomModel extends CI_Model {

    function addEntryMember() {

        


        //Inserts address from the form into array with the keys the same name as the database 
        $member_data['studentFName'] = $this->input->post('studentFName');
        $member_data['studentLName'] = $this->input->post('studentLName');
        $member_data['emailAddress'] = $this->input->post('emailAddress');
        $member_data['password'] = $this->input->post('password');
        $member_data['Address'] = $this->input->post('Address');
        $member_data['phoneNumber'] = $this->input->post('phoneNumber');
        $member_data['Course'] = $this->input->post('Course');
        $member_data['DOB'] = $this->input->post('DOB');
        //Calls the stored procedure to add a address details to the address table
        $stored_proc_call = "Call RegisterUser(?,?,?,?,?,?,?,?)";
        $this->db->query($stored_proc_call, $member_data);
    }

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
?>