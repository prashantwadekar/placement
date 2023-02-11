<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Dashboard_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->Dashboard_model->getallDashboard();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Dashboard/Dashboardview');
		$this->load->view('common/footer_view');
	

	}
 
    
	
	
}