<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Placementinfo extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Opening_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Opening_model->getallOpening();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Placementdetails/login-user');
		$this->load->view('common/footer_view');
	

	}	
	
}