<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('City_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->City_model->getallCity();
        // echo "<pre>";
        //print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('SelectStudent/list_view');
        $this->load->database('mydbr_db');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        //$obj='';
        //$data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Taluka/Taluka_view',$data);
		$this->load->view('common/footer_view');
	

	}

    function insertTaluka(){
     $country= $this->input->post('country'); 
      $state= $this->input->post('state');
      $district= $this->input->post('district');
      $taluka= $this->input->post('taluka'); 

      
     
       $fields=array('country'=>$country,
                      'state'=>$state,
                      'district'=>$district,
                      'taluka'=>$taluka,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("taluka_master",$fields);
   } 
	
	
}