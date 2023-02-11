<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Employee_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Employee_model->getallEmployee();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Employee/Employee_view');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/Employee_view');
		$this->load->view('common/footer_view');
	}
    public function edit()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeEditview');
		$this->load->view('common/footer_view');
	}
    public function delete()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeDelete');
		$this->load->view('common/footer_view');
	}
    public function report()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeReport');
		$this->load->view('common/footer_view');
	}



    function insertEmployee(){
     $firstname= $this->input->post('firstname'); 
      $lastname= $this->input->post('lastname');
      $jobtitle= $this->input->post('jobtitle'); 
      $workday= $this->input->post('workday'); 
       $radio= $this->input->post('radio');
       $email= $this->input->post('email'); 
       $department= $this->input->post('department'); 
        $branch= $this->input->post('branch');
        $address= $this->input->post('address'); 
        $state= $this->input->post('state'); 
         $city= $this->input->post('city');
         $subject= $this->input->post('subject'); 
         $pincode= $this->input->post('pincode'); 
         $phone= $this->input->post('phone');
         $sphone= $this->input->post('sphone');
         $licence= $this->input->post('licence'); 
         $photo= $this->input->post('photo'); 
         $skills= $this->input->post('skills'); 
      
     
       $fields=array('firstname'=>$firstname,
                      'lastname'=>$lastname,
                      'jobtitle'=>$jobtitle,
                      'workday'=>$workday,
                      'radio'=>$radio,
                      'email'=>$email,
                      'department'=>$department,
                      'branch'=>$branch,
                      'address'=>$address,
                      'state'=>$state,
                      'city'=>$city,
                      'subject'=>$subject,
                      'pincode'=>$pincode,
                      'phone'=>$phone,
                      'sphone'=>sphone,
                      'licence'=>$licence,
                      'photo'=>$photo,
                      'skills'=>$skills,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("employee_master",$fields);
   } 
	
	
}