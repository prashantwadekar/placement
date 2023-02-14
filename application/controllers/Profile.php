<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');
		 
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Profile/Profile_view');
		$this->load->view('common/footer_view');
	

	}
	
}