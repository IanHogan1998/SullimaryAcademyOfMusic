<?php

class User extends CI_Model {
    
    function validUser() {
        
        // check if a user with fname and lname exist
        $user_details['emailAddress'] = $this->input->post('emailAddress');
        $user_details['password'] = $this->input->post('password');
        
        //call stored procedure to see if fname and lname exist
        $selectContact = "CALL validUser(?,?)";
        $query = $this->db->query($selectContact, $user_details);
        
        // if records return from the table
        if($query->num_rows() > 0){
            return(true);
        }else {
            return(false);
        }
    }
     function validUser2() {
        
        // check if a user with fname and lname exist
        $user_details['emailAddress'] = $this->input->post('emailAddress');
        $user_details['password'] = $this->input->post('password');
        
        //call stored procedure to see if fname and lname exist
        $selectContact = "CALL validStaff(?,?)";
        $query = $this->db->query($selectContact, $user_details);
        
        // if records return from the table
        if($query->num_rows() > 0){
            return(true);
        }else {
            return(false);
        }
    }
}