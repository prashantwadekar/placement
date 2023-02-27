<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');
        
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

    public function editrecord($com_id = '')
	{
		$data['result'] = $this->Studentedit_model->comfetchDataById($com_id);
		$this->load->view('common/header_view');
		$this->load->view('Company/Company_view1',$data);
		$this->load->view('common/footer_view');
	}

    public function create()
	{
        $this->load->model('Religion_model');
        $data['cmp_types'] = $this->Religion_model->get_cmptype_types();
        $data['branchlocation_types'] = $this->Religion_model->get_branchlocation_types();

		$this->load->view('common/header_view');
		$this->load->view('Company/Company_view',$data);
		$this->load->view('common/footer_view');
	

	}
    public function delete()
	{
		$this->load->view('common/header_view');
		$this->load->view('Company/CompanyDeleteview');
		$this->load->view('common/footer_view');
	

	}

    function insertcompanyDetails(){
        $com_id= $this->input->post('com_id'); 
         $company_name= $this->input->post('company_name');
         $company_website= $this->input->post('company_website'); 
         $company_email= $this->input->post('company_email'); 
         $company_contact= $this->input->post('company_contact'); 
         $company_pname= $this->input->post('company_pname'); 
          $contact_no= $this->input->post('contact_no'); 
         $company_type= $this->input->post('company_type');
	  $branch_location = implode(',', $this->input->post('branch_location'));
         $company_address= $this->input->post('company_address');
          $company_pincode= $this->input->post('company_pincode'); 
         $about_us= $this->input->post('about_us');
          $company_logo= $this->input->post('company_logo'); 
        
          $fields=array('com_id'=>$com_id,
                         'company_name'=>$company_name,
                         'company_website'=>$company_website,
                         'company_email'=>$company_email,
                         'company_contact'=>$company_contact,
                         'company_pname'=>$company_pname,
                         'contact_no'=>$contact_no,
                         'company_type'=>$company_type,
                         'branch_location'=>$branch_location,
                         'company_address'=>$company_address,
                         'company_pincode'=>$company_pincode,
                         'about_us'=>$about_us,
                         'company_logo'=>$company_logo,
                        
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Company_master",$fields);
   } 
	
  //update student
  public function updateStudentDetails()
  {
      //alert('hi');
      $com_id  = $this->input->post('com_id');
      $company_name = $this->input->post('company_name');
      $company_email = $this->input->post('company_email');
      $company_contact = $this->input->post('company_contact');
      $company_pname = $this->input->post('company_pname');
   

      $data = array(
          'com_id'=>$com_id,
          'company_name'=>$company_name,
          'company_email'=>$company_email,
          'company_contact'=>$company_contact,
          'company_pname'=>$company_pname,
        
      );

      $this->Studentedit_model->comupdate_record($com_id, $data);
  }

  public function edits($std_id) {
   $student = $this->Studentedit_model->get_student_by_id($std_id);
   $data['student'] = $student;
   $this->load->view('Studentreg/Registrationview2',$data);
}

//update data

   function update()
   {
       $data = array(
           'com_id' => $this->input->post('com_id'),
           'company_name' => $this->input->post('company_name'),
           'company_email' => $this->input->post('company_email'),
           'company_contact' => $this->input->post('company_contact'),
           'company_pname' => $this->input->post('company_pname'),
       );


       $id = $this->input->post('com_id');

       $this->load->model('Studentedit_model');
       $result = $this->Studentedit_model->comupdate_student($data, $id);

       if ($result) {
           echo 1;
       } else {
           echo 0;
       }
   }


  //edit data
  public function fetchDatafromDatabase()
   {
       $resultList = $this->Studentedit_model->fetchAllData('*','company_master',array());
       
       $result = array();
       $i = 1;
       foreach ($resultList as $key => $value) {

           $button = '<a  href="' . base_url() . 'Company/editrecord/' . $value['com_id'] . '" "title="Edit">&emsp;&emsp;<i class="fas fa-edit animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';

           $result['data'][] = array(
               $i++,
               $button,
               $value['com_id'],
               $value['company_name'],
               $value['company_email'],
               $value['company_contact'],
               $value['company_pname'],
              
           );
       }
       echo json_encode($result);
   }
   
//delete page
   public function DeletefetchDatafromDatabase()
   {
       $resultList = $this->Studentedit_model->fetchAllData('*','company_master',array());
       
       $result = array();
       $i = 1;
       foreach ($resultList as $key => $value) {

           $button1 = '<a  href="#"  onclick="deleteFun('.$value['com_id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-trash animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';


           $result['data'][] = array(
               $i++,
               $button1,
               $value['com_id'],
               $value['company_name'],
               $value['company_email'],
               $value['company_contact'],
               $value['company_pname'],
              
           );
       }
       echo json_encode($result);
   }
//unverify page
   
   public function UnverifyfetchDatafromDatabase()
   {
       $resultList = $this->Studentedit_model->fetchAllData('*','studentcreate_master',array());
       
       $result = array();
       $i = 1;
       foreach ($resultList as $key => $value) {

           $button1 = '<a  href="#"  onclick="verifyrecord('.$value['std_id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-calendar-check animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';


           $result['data'][] = array(
               $i++,
               $button1,
               $value['std_id'],
               $value['std_fullname'],
               $value['std_email'],
               $value['std_appliedfor'],
               $value['std_qualification'],
               $value['std_department'],
               $value['std_branch'],
               $value['std_term'],
              
           );
       }
       echo json_encode($result);
   }

   //verify page

   public function VerifyfetchDatafromDatabase()
   {
       $resultList = $this->Studentedit_model->fetchAllData('*','studentverify_master',array());

           $result = array();
       $i = 1;
       foreach ($resultList as $key => $value) {

           $button1 = '<a  href="#"  onclick="deleteverify('.$value['std_id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-times-circle animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';


           $result['data'][] = array(
               $i++,
               $button1,
               $value['std_id'],
               $value['std_fullname'],
               $value['std_email'],
               $value['std_appliedfor'],
               $value['std_qualification'],
               $value['std_department'],
               $value['std_branch'],
               $value['std_term'],
              
           );
       }
       echo json_encode($result);
   }
//fetch reports
   public function ReportfetchDatafromDatabase()
   {
       $resultList = $this->Studentedit_model->fetchAllData('*','studentcreate_master',array());
       
       $result = array();
       $i = 1;
       foreach ($resultList as $key => $value) {

           $button1 = '<a  href="#"  onclick="PrintDiv()" "title="Report">&emsp;&emsp;<i class="fas fa-file-alt animtxt fa-lg"style="color:blue;"></i>&nbsp;<h6></h6></a>';


           $result['data'][] = array(
               $i++,
               $button1,
               $value['std_id'],
               $value['std_fullname'],
               $value['std_email'],
               $value['std_appliedfor'],
               $value['std_qualification'],
               $value['std_department'],
               $value['std_branch'],
               $value['std_term'],
              
           );
       }
       echo json_encode($result);
   }
   // get edit data from table 

   public function getEditData()
   {
       $std_id = $this->input->post('std_id');
       $resultData = $this->Studentedit_model->fetchSingleData('*','studentcreate_master',array('std_id'=>$std_id));
       echo json_encode($resultData);
   }

       public function unverifyuser() {
           $std_id = $this->input->post('std_id');
           if ($this->Studentedit_model->moveToVerify($std_id)) {
               echo 'success';
           } else {
               echo 'failure';
           }
       }
   // delete normal record data data 
   
   public function deleteSingleData()
   {
       $com_id = $this->input->post('com_id');
       $dataDelete = $this->Studentedit_model->deleteData('company_master',array('com_id'=>$com_id));
       if($dataDelete==true)
       {
           echo 1;
       }
       else
       {
           echo 2;
       }
   }

   // delete data from verified table 
   public function deleteverifyData()
   {
       $std_id = $this->input->post('std_id');
       $dataDelete = $this->Studentedit_model->deleteData('studentverify_master',array('std_id'=>$std_id));
       if($dataDelete==true)
       {
           echo 1;
       }
       else
       {
           echo 2;
       }
   }


   public function verifyrecord()
   {
       $std_id = $this->input->post('std_id');
       $dataDelete = $this->Studentedit_model->moveToVerify($std_id);
       if($dataDelete==true)
       {
           echo 1;
       }
       else
       {
           echo 2;
       }
   }
   
}