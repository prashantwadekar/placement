<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Department_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Department_model->getallDepartment();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Department/DepartmentDetailsview',$data);
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Department/Department_view');
		$this->load->view('common/footer_view');
	

	}

    function insertDepartment(){
     $Departmentname= $this->input->post('Departmentname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Departmentname'=>$Departmentname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Department_master",$fields);
   } 
	
	
}