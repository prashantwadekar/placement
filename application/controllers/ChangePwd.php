<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChangePwd extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('ChangePwd_model');
        
    }
	
	
	public function index()
	{
        $this->load->view('common/header_view');
		$this->load->view('ChangePwd/ChangePwd_view');
		$this->load->view('common/footer_view');
	

	}
   

    function insertChangePwd(){
     $ChangePwdname= $this->input->post('ChangePwdname'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('ChangePwdname'=>$ChangePwdname,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("ChangePwd_master",$fields);
   } 
	
	
}