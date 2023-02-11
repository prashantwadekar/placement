<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SelectStudent extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('SelectStudent_model');
        
    }
	
	
	public function index()
	{
        // $data['data']=$this->SelectStudent_model->getallSelectStudent();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('SelectStudent/SelectStudentDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function branch()
	{
		$this->load->view('common/header_view');
		$this->load->view('SelectStudent/BranchwiseDetailsview');
		$this->load->view('common/footer_view');
	

	}

    public function department()
	{
		$this->load->view('common/header_view');
		$this->load->view('SelectStudent/DepartmenthwiseDetailsview');
		$this->load->view('common/footer_view');
	

	}

    public function company()
	{
		$this->load->view('common/header_view');
		$this->load->view('SelectStudent/CompanywiseDetailsview');
		$this->load->view('common/footer_view');
	

	}

 
	
	
}