<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hod extends CI_Controller {
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
		$this->load->view('common/Hod_header');
		$this->load->view('Hod/Hod_view');
		$this->load->view('common/footer_view');
	

	}
//     public function create()
// 	{
        
//         $obj='';
//         $data['data']=$obj;
// 		$this->load->view('common/header_view');
// 		$this->load->view('Country/Country_view',$data);
// 		$this->load->view('common/footer_view');
	

// 	}

//     function insertCountry(){
//      $country= $this->input->post('country'); 
//       $countrycode= $this->input->post('countrycode');

      
     
//        $fields=array('country'=>$country,
//                       'countrycode'=>$countrycode,
                     
                     
                      
//              'created_date'=>date('Y-m-d H:i:s'),
//              'created_by'=>1);
//         //  echo json_encode($fields);
//      $this->Commonmodel->insertRecord("country_master",$fields);
//    } 
	
	
}