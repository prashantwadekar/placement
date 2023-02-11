<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Student_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Student_model->getallstudent();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('student/studentDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('student/student_view');
		$this->load->view('common/footer_view');
	

	}

    function insertStudent(){
     $studentname= $this->input->post('studentname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('studentname'=>$studentname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("student_master",$fields);
   } 
	
	
}