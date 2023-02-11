<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Education_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Education_model->getallEducation();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Education/EducationDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Education/Education_view');
		$this->load->view('common/footer_view');
	

	}

    function insertEducation(){
     $Educationname= $this->input->post('Educationname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Educationname'=>$Educationname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Education_master",$fields);
   } 
	
	
}