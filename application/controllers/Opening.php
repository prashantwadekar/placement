<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Opening extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');
        
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
		$this->load->model('Religion_model');
        $data['qualification_types'] = $this->Religion_model->get_qualification_types();
		$data['department_types'] = $this->Religion_model->get_department_types();
        $data['branch_types'] = $this->Religion_model->get_branch_types();
		$data['degree_types'] = $this->Religion_model->get_degree_types();
        $data['master_types'] = $this->Religion_model->get_master_types();
        $data['cmp_types'] = $this->Religion_model->get_cmptype_types();
        $data['emp_types'] = $this->Religion_model->get_emptype_types();
        $data['comnames_types'] = $this->Religion_model->get_companynames_types();
        $data['keyword_types'] = $this->Religion_model->get_keyword_types();


		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_view',$data);
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

	public function editrecord($id = '')
	{
		$data['result'] = $this->Studentedit_model->openfetchDataById($id);
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_view1',$data);
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
      $companyname= $this->input->post('companyname');
      $std_dob= $this->input->post('std_dob');
      $std_dob1= $this->input->post('std_dob1');
      $std_dob2= $this->input->post('std_dob2');
      $std_type= $this->input->post('std_type');
	  $std_keyword = implode(',', $this->input->post('std_keyword'));
      $std_department= $this->input->post('std_department');
      $std_branch= $this->input->post('std_branch');
      $std_mobileno= $this->input->post('std_mobileno');
      $std_email= $this->input->post('std_email');
      $std_applylink= $this->input->post('std_applylink');
	  $std_class = implode(',', $this->input->post('std_class'));
      $std_tenper= $this->input->post('std_tenper');
      $std_twper= $this->input->post('std_twper');
      $std_degree= $this->input->post('std_degree');
      $std_degreeper= $this->input->post('std_degreeper');
      $std_master= $this->input->post('std_master');
      $std_masterper= $this->input->post('std_masterper');
      $std_description= $this->input->post('std_description');
      $std_responsibility= $this->input->post('std_responsibility');
      $std_rules= $this->input->post('std_rules');
      
     
       $fields=array( 'label_name'=>$label_name,
	   'companyname'=>$companyname,
	   'std_dob'=>$std_dob,
	   'std_dob1'=>$std_dob1,
	   'std_dob2'=>$std_dob2,
	   'std_type'=>$std_type,
	   'std_keyword'=>$std_keyword,
	   'std_department'=>$std_department,
	   'std_branch'=>$std_branch,
	   'std_mobileno'=>$std_mobileno,
	   'std_email'=>$std_email,
	   'std_applylink'=>$std_applylink,
	   'std_class'=>$std_class,
	   'std_tenper'=>$std_tenper,
	   'std_twper'=>$std_twper,
	   'std_degree'=>$std_degree,
	   'std_degreeper'=>$std_degreeper,
	   'std_master'=>$std_master,
	   'std_masterper'=>$std_masterper,
	   'std_description'=>$std_description,
	   'std_responsibility'=>$std_responsibility,
	   'std_rules'=>$std_rules,

                     
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("Opening_master",$fields);
   } 
	 //update student
	 public function updateStudentDetails()
	 {
		 //alert('hi');
		 $id  = $this->input->post('id');
		 $fullname = $this->input->post('fullname');
		 $email = $this->input->post('email');
		 $phone = $this->input->post('phone');
		 $pincode = $this->input->post('pincode');

  
		 $data = array(
			 'id'=>$id,
			 'fullname'=>$fullname,
			 'email'=>$email,
			 'phone'=>$phone,
			 'pincode'=>$pincode,
		 );
  
		 $this->Studentedit_model->empupdate_record($id, $data);
	 }
  
	 public function edits($id) {
	  $student = $this->Studentedit_model->get_student_by_id($id);
	  $data['student'] = $student;
	  $this->load->view('Employee/Employee_view1',$data);
  }
  
  //update data
  
	  function update()
	  {
		  $data = array(
			  'id' => $this->input->post('id'),
			  'label_name' => $this->input->post('label_name'),
			  'std_email' => $this->input->post('std_email'),
			  'std_applylink' => $this->input->post('std_applylink'),
		  );
  
  
		  $id = $this->input->post('id');
  
		  $this->load->model('Studentedit_model');
		  $result = $this->Studentedit_model->openupdate_student($data, $id);
  
		  if ($result) {
			  echo 1;
		  } else {
			  echo 0;
		  }
	  }
  
  
	 //edit data
	 public function fetchDatafromDatabase()
	  {
		  $resultList = $this->Studentedit_model->fetchAllData('*','opening_master',array());
		  
		  $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
  
			  $button = '<a  href="' . base_url() . 'Opening/editrecord/' . $value['id'] . '" "title="Edit">&emsp;&emsp;<i class="fas fa-edit animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';
  
			  $result['data'][] = array(
				  $i++,
				  $button,
				  $value['id'],
				  $value['label_name'],
				  $value['std_email'],
				  $value['std_applylink'],
		 
				 
			  );
		  }
		  echo json_encode($result);
	  }
	  
  //delete page
	  public function DeletefetchDatafromDatabase()
	  {
		  $resultList = $this->Studentedit_model->fetchAllData('*','opening_master',array());
		  
		  $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
  
			  $button1 = '<a  href="#"  onclick="deleteFun('.$value['id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-trash animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';
  
  
			  $result['data'][] = array(
				  $i++,
				  $button1,
				  $value['id'],
				  $value['label_name'],
				  $value['std_email'],
				  $value['std_applylink'],      
			  );
		  }
		  echo json_encode($result);
	  }
  //unverify page
	  
	  public function UnverifyfetchDatafromDatabase()
	  {
		  $resultList = $this->Studentedit_model->fetchAllData('*','opening_master',array());
		  
		  $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
  
			  $button1 = '<a  href="#"  onclick="verifyrecord('.$value['id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-calendar-check animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';
  
  
			  $result['data'][] = array(
				  $i++,
				  $button1,
				  $value['id'],
				  $value['label_name'],
				  $value['std_email'],
				  $value['std_applylink'],
				 
			  );
		  }
		  echo json_encode($result);
	  }
  
	  //verify page
  
	  public function VerifyfetchDatafromDatabase()
	  {
		  $resultList = $this->Studentedit_model->fetchAllData('*','openingverify_master',array());
  
			  $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
  
			  $button1 = '<a  href="#"  onclick="deleteverify('.$value['id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-times-circle animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';
  
  
			  $result['data'][] = array(
				  $i++,
				  $button1,
				  $value['id'],
				  $value['label_name'],
				  $value['std_email'],
				  $value['std_applylink'],
				 
			  );
		  }
		  echo json_encode($result);
	  }
  //fetch reports
	  public function ReportfetchDatafromDatabase()
	  {
		  $resultList = $this->Studentedit_model->fetchAllData('*','opening_master',array());
		  
		  $result = array();
		  $i = 1;
		  foreach ($resultList as $key => $value) {
  
			  $button1 = '<a  href="#"  onclick="PrintDiv()" "title="Report">&emsp;&emsp;<i class="fas fa-file-alt animtxt fa-lg"style="color:blue;"></i>&nbsp;<h6></h6></a>';
  
  
			  $result['data'][] = array(
				  $i++,
				  $button1,
				  $value['id'],
				  $value['label_name'],
				  $value['std_email'],
				  $value['std_applylink'],
		 
				 
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
		  $id = $this->input->post('id');
		  $dataDelete = $this->Studentedit_model->deleteData('opening_master',array('id'=>$id));
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
		  $id = $this->input->post('id');
		  $dataDelete = $this->Studentedit_model->deleteData('openingverify_master',array('id'=>$id));
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
		  $id = $this->input->post('id');
		  $dataDelete = $this->Studentedit_model->OpenmoveToVerify($id);
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