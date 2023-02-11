<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Role extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Role_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Role_model->getallRole();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Role/RoleDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Role/Role_view');
		$this->load->view('common/footer_view');
	

	}

    function insertRole(){
     $Rolename= $this->input->post('Rolename'); 
      $phone= $this->input->post('phone');
      $subject= $this->input->post('subject'); 
      
     
       $fields=array('Rolename'=>$Rolename,
                      'phone'=>$phone,
                      'fksubjectId'=>$subject,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Role_master",$fields);
   } 
	
	
}