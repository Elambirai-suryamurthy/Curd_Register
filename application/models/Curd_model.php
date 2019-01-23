<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Curd_model extends CI_Model {

    private $_empID;
    private $_firstName;
    private $_lastName;
    private $_email;
    private $_address;
    private $_salary;
    private $_contactNo;

    public function setEmpID($empID) {
        $this->_empID = $empID;
    }
    public function setFirstName($firstName) {
        $this->_firstName = $firstName;
    }
    public function setLastName($lastName) {
        $this->_lastName = $lastName;
    }    
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setAddress($address) {
        $this->_address = $address;
    }
    public function setSalary($salary) {
        $this->_salary = $salary;
    }
    public function setContactNo($contactNo) {
        $this->_contactNo = $contactNo;
    }
    
    public function getEmpList() {        
        $this->db->select(array('e.id', 'e.name', 'e.last_name', 'e.email', 'e.address', 'e.contact_no', 'e.salary'));
        $this->db->from('employees e');        
        $query = $this->db->get();
        return $query->result_array();
    }
 
    public function createEmp() { 
        $data = array(
            'name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'address' => $this->_address,
            'contact_no' => $this->_contactNo,
            'salary' => $this->_salary,
        );
        $this->db->insert('employees', $data);
        return $this->db->insert_id();
    }
   
    public function updateEmp() { 
        $data = array(
            'name' => $this->_firstName,
            'last_name' => $this->_lastName,
            'email' => $this->_email,
            'address' => $this->_address,
            'contact_no' => $this->_contactNo,
            'salary' => $this->_salary,
        );
        $this->db->where('id', $this->_empID);
        $this->db->update('employees', $data);
    }

    public function getEmp() {        
        $this->db->select(array('e.id', 'e.name as first_name', 'e.last_name', 'e.email', 'e.address', 'e.contact_no', 'e.salary'));
        $this->db->from('employees e');  
        $this->db->where('e.id', $this->_empID);     
        $query = $this->db->get();
       return $query->row_array();
    }

    public function deleteEmp() {         
        $this->db->where('id', $this->_empID);
        $this->db->delete('employees');  
    }
    
}	
?>