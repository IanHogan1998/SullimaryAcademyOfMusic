
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

//    function selectContacts() {
//        $display_block = "";
//        $stored_proc_call = "CALL SelectContacts()";
//        $query = $this->db->query($stored_proc_call);
//
//        if ($query->num_rows() > 0) {
//            foreach ($query->result_array() as $contact) {
//
//
//                $id = $contact['master_id'];
//                $display_name = stripslashes($contact['display_name']);
//                $display_block .= "<option value=\"" . $id . "\">" . $display_name . "</option>";
//            }
//        } else {
//            $display_block .= "<option>No Contacts to Select</option>";
//        }
//        $query->free_result();
//        mysqli_next_result($this->db->conn_id);
//        return $display_block;
//    }

//    function getSelectedContactDetails($master_id) {
//
//        $display_block2 = "";
//        $master_data['master_id'] = $master_id;
//        //Calls the stored procedure to get the details (Name, Address, Email, phone etc.) of the selected Contact
//        $stored_proc_call = "CALL SelectContactDetails(?)";
//        $query = $this->db->query($stored_proc_call, $master_data);
//
//        //If the a record is found
//        if ($query->num_rows() > 0) {
//            $result = $query->row();
//            $display_block2 .= "<h3>Showing Record for: " . $result->display_name . "</h3>";
//            $display_block2 .= 'Address: ' . $result->address . ', ' . $result->city . ', ' . $result->town . ', (' . $result->AddressType . ')</br>';
//            $display_block2 .= 'Telephone: ' . $result->telephoneNo . ' (' . $result->TelType . ')</br>';
//            $display_block2 .= 'Email: ' . $result->email . '( ' . $result->EmailType . ')</br>';
//            $display_block2 .= 'Fax: ' . $result->fax_number . '( ' . $result->FaxType . ')</br>';
//            $display_block2 .= 'Personal Notes: ' . ' ' . $result->note . '</br>';
//        } else {
//            $display_block2 = "Selected Contact not found in Address Book";
//        }
//        mysqli_next_result($this->db->conn_id);
//        return $display_block2;
//    }

    function deleteStudent($student_id) {
//Calls the stored procedure to delete from the master name table
        $data = array('student_id' => $student_id);
        $stored_proc_call = "CALL deleteStudent(?)";
        $query = $this->db->query($stored_proc_call, $data);
//If the row in master_table was deleted
        if ($this->db->affected_rows() > 0) {
            $stored_proc_call = "CALL deletestudentFName(?)";
            $query = $this->db->query($stored_proc_call, $data);

            $stored_proc_call = "CALL deleteLName(?)";
            $query = $this->db->query($stored_proc_call, $data);
//Delete from the Address table
            $stored_proc_call = "CALL deleteemailAddress(?)";
            $query = $this->db->query($stored_proc_call, $data);
//Delete from the telephone table
            $stored_proc_call = "CALL deletepassword(?)";
            $query = $this->db->query($stored_proc_call, $data);
//Delete from the email table
            $stored_proc_call = "CALL deleteAddress(?)";
            $query = $this->db->query($stored_proc_call, $data);
            $stored_proc_call = "CALL deletephoneNumber(?)";
            $query = $this->db->query($stored_proc_call, $data);
            $stored_proc_call = "CALL deleteCourse(?)";
            $query = $this->db->query($stored_proc_call, $data);
            $stored_proc_call = "CALL deleteDOB(?)";
            $query = $this->db->query($stored_proc_call, $data);
        }
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