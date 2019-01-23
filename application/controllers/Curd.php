<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Curd extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Curd_model', 'emp');
    }
   
    public function index() {
        $data['page'] = 'emp-list';
        $data['title'] = 'Employee List | TechArise';
        $data['empInfo'] = $this->emp->getEmpList();    
        $this->load->view('emp/index', $data);
    }
 
    public function add() {
        $data['page'] = 'emp-add';
        $data['title'] = 'Employee Add | TechArise';
        $this->load->view('emp/add', $data);
    }

    public function save() {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('contact_no', 'Phone', 'trim|required');
        $this->form_validation->set_rules('salary', 'Salary', 'trim|required');     
        if($this->form_validation->run() == FALSE) {
       
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $contact_no = $this->input->post('contact_no');
        $salary = $this->input->post('salary');

        $this->emp->setFirstName($first_name);
        $this->emp->setLastName($last_name);
        $this->emp->setEmail($email);
        $this->emp->setAddress($address);
        $this->emp->setSalary($salary);
        $this->emp->setContactNo($contact_no);

        $this->emp->createEmp();
        redirect('/');
        } else {        
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $contact_no = $this->input->post('contact_no');
            $salary = $this->input->post('salary');

            $this->emp->setFirstName($first_name);
            $this->emp->setLastName($last_name);
            $this->emp->setEmail($email);
            $this->emp->setAddress($address);
            $this->emp->setSalary($salary);
            $this->emp->setContactNo($contact_no);

            $this->emp->createEmp();
            redirect('/');
        }
    }

  
    public function edit($id='') {
        $data['page'] = 'emp-edit';
        $data['title'] = 'Employee Edit | TechArise';
        $this->emp->setEmpID($id);
        $data['empInfo'] = $this->emp->getEmp();
        $this->load->view('emp/edit', $data);
    }
    
    public function update() {
        $this->load->library('form_validation');
       
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');
        $this->form_validation->set_rules('contact_no', 'Phone', 'trim|required');
        $this->form_validation->set_rules('salary', 'Salary', 'trim|required');     
        if($this->form_validation->run() == FALSE) {
          $this->edit();
        } else {    
            $emp_id = $this->input->post('emp_id');
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $address = $this->input->post('address');
            $contact_no = $this->input->post('contact_no');
            $salary = $this->input->post('salary');

            $this->emp->setEmpID($emp_id);
            $this->emp->setFirstName($first_name);
            $this->emp->setLastName($last_name);
            $this->emp->setEmail($email);
            $this->emp->setAddress($address);
            $this->emp->setSalary($salary);
            $this->emp->setContactNo($contact_no);

            $this->emp->updateEmp();
            redirect('/');
        }
    }

    public function display($id='') {
        $data['page'] = 'emp-display';
        $data['title'] = 'Employee Display | TechArise';
        $this->emp->setEmpID($id);
        $data['empInfo'] = $this->emp->getEmp();
        $this->load->view('emp/display', $data);
    }
   
    public function delete($id='') {
        $this->emp->setEmpID($id);
        $this->emp->deleteEmp();
        redirect('/');
    }
}
?>