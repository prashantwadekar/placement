<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Form/Form_view');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Form/Form_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertForm(){
     $emp_id= $this->input->post('emp_id'); 
      $emp_name= $this->input->post('emp_name');
      $emp_address= $this->input->post('emp_address');
      $emp_primaryno= $this->input->post('emp_primaryno');    
       $emp_secondarynumber= $this->input->post('emp_secondarynumber'); 
      $emp_email= $this->input->post('emp_email');
      $emp_gender= $this->input->post('emp_gender');
      $emp_password= $this->input->post('emp_password');
      $emp_photo= $this->input->post('emp_photo');     
      $emp_designation= $this->input->post('emp_designation'); 
      $emp_joiningdate= $this->input->post('emp_joiningdate');
      $emp_dob= $this->input->post('emp_dob');
      $emp_adharcard= $this->input->post('emp_adharcard');    
      $emp_pancard= $this->input->post('emp_pancard');    
       
     
       $fields=array('emp_id'=>$emp_id,
                      'emp_name'=>$emp_name,
                      'emp_address'=>$emp_address,
                      'emp_primaryno'=>$emp_primaryno,
                      'emp_secondarynumber'=>$emp_secondarynumber,
                      'emp_email'=>$emp_email,
                      'emp_gender'=>$emp_gender,
                      'emp_password'=>$emp_password,
                      'emp_photo'=>$emp_photo,
                      'emp_designation'=>$emp_designation,
                      'emp_joiningdate'=>$emp_joiningdate,
                      'emp_dob'=>$emp_dob,
                      'emp_adharcard'=>$emp_adharcard,
                      'emp_pancard'=>$emp_pancard,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
        //  echo json_encode($fields);
     $this->Commonmodel->insertRecord("form_master",$fields);
   } 
	
}