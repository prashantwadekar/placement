<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {
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
		$this->load->view('State/StateDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('State/State_view', $data);
		$this->load->view('common/footer_view');
	

	}
    

    function insertState(){
     $branchname= $this->input->post('Statename'); 
    
      
     
       $fields=array('Statename'=>$Statename,
           
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("State_master",$fields);
   } 
	
	
}