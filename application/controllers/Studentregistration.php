<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studentregistration extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');
		 
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationview1');
		$this->load->view('common/footer_view');
	

	}
	public function editrecord($std_id = '')
	{
		$data['result'] = $this->Studentedit_model->fetchDataById($std_id);
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationview2',$data);
		$this->load->view('common/footer_view');
	}
	
	
	public function create()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationview1',$data);
		$this->load->view('common/footer_view');

	}  
	
    public function edit()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/RegistrationEdit',$data);
		$this->load->view('common/footer_view');

	}  
	public function eeditStudent()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationview2',$data);
		$this->load->view('common/footer_view');

	} 
    public function delete()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationdelete',$data);
		$this->load->view('common/footer_view');

	}  
      public function verify()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationverify',$data);
		$this->load->view('common/footer_view');

	}   
     public function unverify()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/Registrationunverify',$data);
		$this->load->view('common/footer_view');

	}
    public function report()
	{
        
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Studentreg/RegistrationReport',$data);
		$this->load->view('common/footer_view');

	}

    function insertStudentDetails(){
     $std_id= $this->input->post('std_id'); 
      $std_fullname= $this->input->post('std_fullname');
      $std_fathername= $this->input->post('std_fathername'); 
      $std_mothername= $this->input->post('std_mothername'); 
      $std_age= $this->input->post('std_age'); 
      $std_email= $this->input->post('std_email');
       $std_dob= $this->input->post('std_dob'); 
      $std_gender= $this->input->post('std_gender');
       $std_cast= $this->input->post('std_cast'); 
      $std_subcast= $this->input->post('std_subcast');
       $std_appliedfor= $this->input->post('std_appliedfor'); 
      $std_qualification= $this->input->post('std_qualification');
       $std_department= $this->input->post('std_department'); 
      $std_branch= $this->input->post('std_branch');
       $std_term= $this->input->post('std_term'); 
      $std_degree= $this->input->post('std_degree');
       $std_degreeper= $this->input->post('std_degreeper'); 
      $std_master= $this->input->post('std_master');
       $std_masterper= $this->input->post('std_masterper'); 
      $std_pincode= $this->input->post('std_pincode');
       $std_adharnumber= $this->input->post('std_adharnumber'); 
      $std_mobileno= $this->input->post('std_mobileno');
      $std_country= $this->input->post('std_country'); 
      $std_state= $this->input->post('std_state');
       $std_city= $this->input->post('std_city'); 
      $std_certification= $this->input->post('std_certification');
       $std_hobbies= $this->input->post('std_hobbies'); 
      $std_skills= $this->input->post('std_skills');
      $std_address= $this->input->post('std_address');
      $std_adharphoto= $this->input->post('std_adharphoto'); 
     $std_photo= $this->input->post('std_photo');
      
     
       $fields=array('std_id'=>$std_id,
                      'std_fullname'=>$std_fullname,
                      'std_fathername'=>$std_fathername,
                      'std_mothername'=>$std_mothername,
                      'std_age'=>$std_age,
                      'std_email'=>$std_email,
                      'std_dob'=>$std_dob,
                      'std_gender'=>$std_gender,
                      'std_cast'=>$std_cast,
                      'std_subcast'=>$std_subcast,
                      'std_appliedfor'=>$std_appliedfor,
                      'std_qualification'=>$std_qualification,
                      'std_department'=>$std_department,
                      'std_branch'=>$std_branch,
                      'std_term'=>$std_term,
                      'std_degree'=>$std_degree,
                      'std_degreeper'=>$std_degreeper,
                      'std_master'=>$std_master,
                      'std_masterper'=>$std_masterper,
                      'std_pincode'=>$std_pincode,
                      'std_adharnumber'=>$std_adharnumber,
                      'std_mobileno'=>$std_mobileno,
                      'std_country'=>$std_country,
                      'std_state'=>$std_state,
                      'std_city'=>$std_city,
                      'std_certification'=>$std_certification,
                      'std_hobbies'=>$std_hobbies,
                      'std_skills'=>$std_skills,
                      'std_address'=>$std_address,
                      'std_adharphoto'=>$std_adharphoto,
                      'std_photo'=>$std_photo,
                     
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
        //  echo json_encode($fields);
		$this->db->insert('studentcreate_master', $fields);
		$student_id = $this->db->insert_id();
		
		$verification_data = array(
		  'std_id' => $student_id,
		  'std_fullname'=>$std_fullname,
		  'std_email'=>$std_email,
		  'std_appliedfor'=>$std_appliedfor,
		  'std_qualification'=>$std_qualification,
		  'std_department'=>$std_department,
		  'std_branch'=>$std_branch,
		  'std_term'=>$std_term,
		  'verification_status' => 0
		);
		
		$this->db->insert('studentunverify_master', $verification_data);
		
   } 

   

   //update student
   public function updateStudentDetails()
   {
	   //alert('hi');
	   $std_id  = $this->input->post('std_id');
	   $std_fullname = $this->input->post('std_fullname');
	   $std_email = $this->input->post('std_email');
	   $std_appliedfor = $this->input->post('std_appliedfor');
	   $std_qualification = $this->input->post('std_qualification');
	   $std_department = $this->input->post('std_department');
	   $std_branch = $this->input->post('std_branch');
	   $std_term = $this->input->post('std_term');

	   $data = array(
		   'std_id'=>$std_id,
		   'std_fullname'=>$std_fullname,
		   'std_email'=>$std_email,
		   'std_appliedfor'=>$std_appliedfor,
		   'std_qualification'=>$std_qualification,
		   'std_department'=>$std_department,
		   'std_branch'=>$std_branch,
		   'std_term'=>$std_term,
	   );

	   $this->Studentedit_model->update_record($std_id, $data);
   }

   public function edits($std_id) {
    $student = $this->Studentedit_model->get_student_by_id($std_id);
    $data['student'] = $student;
    $this->load->view('RegistrationView2',$data);
}


   public function update()
   {
	   $std_id = $this->input->post('std_id');
	   $data = array(
		   'std_fullname' => $this->input->post('std_fullname'),
		   'std_email' => $this->input->post('std_email'),
		   'std_appliedfor' => $this->input->post('std_appliedfor'),
		   'std_qualification' => $this->input->post('std_qualification'),
		   'std_department' => $this->input->post('std_department'),
		   'std_branch' => $this->input->post('std_branch'),
		   'std_term' => $this->input->post('std_term'),
	   );
	   $this->Studentedit_model->update_student($std_id, $data);
   }
   


   //edit data
   public function fetchDatafromDatabase()
	{
		$resultList = $this->Studentedit_model->fetchAllData('*','studentcreate_master',array());
		
		$result = array();
		$i = 1;
		foreach ($resultList as $key => $value) {

			$button = '<a  href="' . base_url() . 'Studentregistration/editrecord/' . $value['std_id'] . '" "title="Edit">&emsp;&emsp;<i class="fas fa-edit animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';

			$result['data'][] = array(
				$i++,
                $button,
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
	

    public function DeletefetchDatafromDatabase()
	{
		$resultList = $this->Studentedit_model->fetchAllData('*','studentcreate_master',array());
		
		$result = array();
		$i = 1;
		foreach ($resultList as $key => $value) {

            $button1 = '<a  href="#"  onclick="deleteFun('.$value['std_id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-trash animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';


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

    
	public function UnverifyfetchDatafromDatabase()
	{
		$resultList = $this->Studentedit_model->fetchAllData('*','studentunverify_master',array());
		
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
	
    public function VerifyfetchDatafromDatabase()
	{
		$resultList = $this->Studentedit_model->fetchAllData('*','studentverify_master',array());
		
		$result = array();
		$i = 1;
		foreach ($resultList as $key => $value) {
            $button1 = '<a  href="#"  "title="delete">&emsp;&emsp;Verified&nbsp;<h6></h6></a>';

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
	
	

    // public function update()
	// {
    //     //alert('hi');
	// 	$std_id  = $this->input->post('std_id');
	// 	$std_fullname = $this->input->post('std_fullname');
	// 	$std_email = $this->input->post('std_email');
	// 	$std_appliedfor = $this->input->post('std_appliedfor');
	// 	$std_qualification = $this->input->post('std_qualification');
	// 	$std_department = $this->input->post('std_department');
	// 	$std_branch = $this->input->post('std_branch');
	// 	$std_term = $this->input->post('std_term');

	// 	$data = array(
	// 		'std_id'=>$std_id,
	// 		'std_fullname'=>$std_fullname,
	// 		'std_email'=>$std_email,
	// 		'std_appliedfor'=>$std_appliedfor,
	// 		'std_qualification'=>$std_qualification,
	// 		'std_department'=>$std_department,
	// 		'std_branch'=>$std_branch,
	// 		'std_term'=>$std_term,
	// 	);
	// 	$update = $this->Studentedit_model->updateData('studentcreate_master',$data,array('std_id'=>$std_id));
	// 	if($update==true)
	// 	{
	// 		echo 1;
	// 	}
	// 	else{
	// 		echo 2;
	// 	}
	// }
    public function deleteSingleData()
	{
		$std_id = $this->input->post('std_id');
		$dataDelete = $this->Studentedit_model->deleteData('studentcreate_master',array('std_id'=>$std_id));
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