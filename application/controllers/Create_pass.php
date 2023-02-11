<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_pass extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('City_model');
        
    }
	
	
	public function index()
	{
        
		$this->load->view('Login/create_pass_view');
	

	}
   
    function insertCity(){
     $Cityname= $this->input->post('Cityname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Cityname'=>$Cityname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("City_master",$fields);
   } 
	
	
}