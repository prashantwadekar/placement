<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Village extends CI_Controller {
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
		$this->load->view('Village/Village_view');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
       // $obj='';
        //$data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Village/Village_view');
		$this->load->view('common/footer_view');
	

	}

    function insertVillage(){
     $country= $this->input->post('country'); 
      $state= $this->input->post('state');
      $district= $this->input->post('district');
      $village= $this->input->post('village');
      
     
       $fields=array('country'=>$country,
                      'state'=>$state,
                      'district'=>$district,
                      'village'=>$village,
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("village_master",$fields);
   } 
	
	
}