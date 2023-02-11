<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Designation_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Designation_model->getallDesignation();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Designation/DesignationDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Designation/Designation_view');
		$this->load->view('common/footer_view');
	

	}

    function insertDesignation(){
     $Designationname= $this->input->post('Designationname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Designationname'=>$Designationname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Designation_master",$fields);
   } 
	
	
}