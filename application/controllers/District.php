<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class District extends CI_Controller {
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
		$this->load->view('District/DistrictDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('District/District_view', $data);
		$this->load->view('common/footer_view');
	

	}
    

    function insertDistrict(){
     $Districtname= $this->input->post('Districtname'); 
    
      
     
       $fields=array('Districtname'=>$Districtname,
           
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("District_master",$fields);
   } 
	
	
}