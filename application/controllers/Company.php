<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Company_model');
        
    }
	
	
	public function edit()
	{
        // $data['data']=$this->Company_model->getallCompany();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Company/CompanyDetailsview');
		$this->load->view('common/footer_view');
	

	}
    public function create()
	{
		$this->load->view('common/header_view');
		$this->load->view('Company/Company_view');
		$this->load->view('common/footer_view');
	

	}
    public function delete()
	{
		$this->load->view('common/header_view');
		$this->load->view('Company/CompanyDeleteview');
		$this->load->view('common/footer_view');
	

	}

    function insertStudentDetails(){
        $company_id= $this->input->post('company_id'); 
         $company_name= $this->input->post('company_name');
         $company_website= $this->input->post('company_website'); 
         $company_email= $this->input->post('company_email'); 
         $company_contactno= $this->input->post('company_contactno'); 
         $contact_name= $this->input->post('contact_name');
          $contact_no= $this->input->post('contact_no'); 
         $std_qualification= $this->input->post('std_qualification');
          $about_us= $this->input->post('about_us'); 
         $company_address= $this->input->post('company_address');
          $company_pincode= $this->input->post('company_pincode'); 
         $std_skills= $this->input->post('std_skills');
          $company_logo= $this->input->post('company_logo'); 
        
          $fields=array('company_id'=>$company_id,
                         'company_name'=>$company_name,
                         'company_website'=>$company_website,
                         'company_email'=>$company_email,
                         'company_contactno'=>$company_contactno,
                         'contact_name'=>$contact_name,
                         'contact_no'=>$contact_no,
                         'std_qualification'=>$std_qualification,
                         'about_us'=>$about_us,
                         'company_address'=>$company_address,
                         'company_pincode'=>$company_pincode,
                         'std_skills'=>$std_skills,
                         'company_logo'=>$company_logo,
                        
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Company_master",$fields);
   } 
	
	
}