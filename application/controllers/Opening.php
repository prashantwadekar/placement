<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends CI_Controller {
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
		$this->load->view('Opening/Opening_view');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_view');
		$this->load->view('common/footer_view');
	

	}

    public function unverify()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_unverify');
		$this->load->view('common/footer_view');
	

	}

    public function edit()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_edit');
		$this->load->view('common/footer_view');
	

	}

    public function delete()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_delete');
		$this->load->view('common/footer_view');
	

	}

    public function verify()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_verify');
		$this->load->view('common/footer_view');
	

	}

    public function report()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_report');
		$this->load->view('common/footer_view');
	

	}

    function insertOpening(){
     $id= $this->input->post('id'); 
      $label_name= $this->input->post('label_name');
      
     
       $fields=array( 'label_name'=>$label_name,
                     
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Opening_master",$fields);
   } 
	
	
}