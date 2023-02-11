<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('State_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->State_model->getallState();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('State/StateDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('State/State_view');
		$this->load->view('common/footer_view');
	

	}

    function insertState(){
     $Statename= $this->input->post('Statename'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Statename'=>$Statename,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("State_master",$fields);
   } 
	
	
}