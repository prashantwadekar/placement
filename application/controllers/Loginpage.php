<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Loginpage extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Country_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		//$this->load->view('common/header_view');
		$this->load->view('Registration/Loginpage_view');
		//$this->load->view('common/footer_view');
	

	}


    function insertLogin(){
     $username= $this->input->post('username'); 
      $password= $this->input->post('password');
     
       $fields=array('username'=>$username,                   
                      'password'=>$password,
                                         
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("loginpage_master",$fields);
   } 
	
	
}