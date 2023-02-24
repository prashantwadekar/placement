<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Master_model');
        
    }

    public function index()
	{
		$this->load->view('common/header_view');
		$this->load->view('Opening/Opening_view');
		$this->load->view('common/footer_view');
	

	}
	
	
	public function religion()
	{
        // $data['data']=$this->Master_model->getallMaster();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Master/religion_master');
		$this->load->view('common/footer_view');
	

	}
    public function caste()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Master/caste_master',$data);
		$this->load->view('common/footer_view');
	

	}

    public function subcaste()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/subcaste_master');
		$this->load->view('common/footer_view');
	

	}

    public function qualification()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/qualification_master');
		$this->load->view('common/footer_view');
	

	}

    public function stream()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/stream_master');
		$this->load->view('common/footer_view');
	

	}

    public function department()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/department_master');
		$this->load->view('common/footer_view');
	

	}

    public function branch()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/branch_master');
		$this->load->view('common/footer_view');
	

	}

    public function term()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/term_master');
		$this->load->view('common/footer_view');
	

	}

    public function degree()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/degree_master');
		$this->load->view('common/footer_view');
	

	}

    public function country()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/country_master');
		$this->load->view('common/footer_view');
	

	}

    public function state()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/state_master');
		$this->load->view('common/footer_view');
	

	}

    public function city()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/city_master');
		$this->load->view('common/footer_view');
	

	}

    public function village()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/village_master');
		$this->load->view('common/footer_view');
	

	}

    public function certification()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/certification_master');
		$this->load->view('common/footer_view');
	

	}

    public function hobbies()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/hobbies_master');
		$this->load->view('common/footer_view');
	

	}

    public function skills()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/skills_master');
		$this->load->view('common/footer_view');
	

	}

    public function keyword()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/keyword_master');
		$this->load->view('common/footer_view');
	

	}

    public function keytype()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/keytype_master');
		$this->load->view('common/footer_view');
	

	}

    public function emptype()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/emptype_master');
		$this->load->view('common/footer_view');
	

	}

    public function comptype()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/comptype_master');
		$this->load->view('common/footer_view');
	

	}
	function keyword_master(){
		$id= $this->input->post('id'); 
		 $label_name= $this->input->post('label_name');
		 $keyword= $this->input->post('keyword'); 
		
	
	
		  $fields=array('id'=>$id,
						 'label_name'=>$label_name,
						 'keyword'=>$keyword,
						
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('keyword_master', $fields);	   
	  } 

	  function keyword_type(){
		$id= $this->input->post('id'); 
		 $keyword= $this->input->post('keyword'); 
		
	
	
		  $fields=array('id'=>$id,
						 'keyword'=>$keyword,
						
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('keyword_type', $fields);	   
	  } 


	  function hobbies_master(){
		$id= $this->input->post('id'); 
		 $hobbies= $this->input->post('hobbies'); 
		
	
	
		  $fields=array('id'=>$id,
						 'hobbies'=>$hobbies,
						
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('hobbies_master', $fields);	   
	  } 

	  function Employee_type(){
		$id= $this->input->post('id'); 
		 $employee_type= $this->input->post('employee_type'); 
		
	
	
		  $fields=array('id'=>$id,
						 'employee_type'=>$employee_type,
						
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('employeetype_master', $fields);	   
	  } 

	  function degree_master(){
		$id= $this->input->post('id'); 
		 $degree_name= $this->input->post('degree_name'); 
		 $degree= $this->input->post('degree'); 
		 $department= $this->input->post('department'); 
		 $branch= $this->input->post('branch'); 
		
	
	
		  $fields=array('id'=>$id,
						 'degree_name'=>$degree_name,
						 'degree'=>$degree,
						 'department'=>$department,
						 'branch'=>$branch,
						
						
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('degree_master', $fields);	   
	  } 

	  function comtype_master(){
		$id= $this->input->post('id'); 
		 $comtype= $this->input->post('comtype'); 
	 
		  $fields=array('id'=>$id,
						 'comtype'=>$comtype,
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('comtype_master', $fields);	   
	  } 

	  function certification_master(){
		$id= $this->input->post('id'); 
		 $cert_name= $this->input->post('cert_name'); 
		 $description= $this->input->post('description'); 
	 
		
	
	
		  $fields=array('id'=>$id,
						 'cert_name'=>$cert_name,
						 'description'=>$description,
					
		 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('certification_master', $fields);	   
	  } 

	  function subcast_master(){
		$id= $this->input->post('id'); 
		 $subcast_name= $this->input->post('subcast_name'); 
		 $religion= $this->input->post('religion'); 
		 $caste= $this->input->post('caste'); 
	 

		  $fields=array('id'=>$id,
						 'subcast_name'=>$subcast_name,
						 'religion'=>$religion,
						 'caste'=>$caste,
			 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('subcast_master', $fields);	   
	  } 


	  function religion_master(){
		$id= $this->input->post('id'); 
		 $religion= $this->input->post('religion'); 

		  $fields=array('id'=>$id,
						 'religion'=>$religion,
					
	 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('religion_master', $fields);	   
	  } 


	  function branch_master(){
		$id= $this->input->post('id'); 
		 $branch_name= $this->input->post('branch_name'); 
		 $dept_head= $this->input->post('dept_head'); 
		 $contact= $this->input->post('contact'); 
		 $details= $this->input->post('details'); 
	
		  $fields=array('id'=>$id,
						 'branch_name'=>$branch_name,
						 'dept_head'=>$dept_head,
						 'contact'=>$contact,
						 'details'=>$details,
			 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('branch_master', $fields);	   
	  } 


	  function village_master(){
		$id= $this->input->post('id'); 
		 $village_name= $this->input->post('village_name'); 
	 
		  $fields=array('id'=>$id,
						 'village_name'=>$village_name,
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('village_master', $fields);	   
	  } 

	  function city_master(){
		$id= $this->input->post('id'); 
		 $city_name= $this->input->post('city_name'); 
	 
		  $fields=array('id'=>$id,
						 'city_name'=>$city_name,
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('city_master', $fields);	   
	  } 

	  function state_master(){
		$id= $this->input->post('id'); 
		 $state_name= $this->input->post('state_name'); 
	 
		  $fields=array('id'=>$id,
						 'state_name'=>$state_name,
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('state_master', $fields);	   
	  } 

	  function country_master(){
		$id= $this->input->post('id'); 
		 $country= $this->input->post('country'); 
	 
		  $fields=array('id'=>$id,
						 'country'=>$country,
						 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('country_master', $fields);	   
	  } 

	  function department_master(){
		$id= $this->input->post('id'); 
		 $dep_name= $this->input->post('dep_name'); 
		 $dept_head= $this->input->post('dept_head'); 
		 $contact= $this->input->post('contact'); 
		 $details= $this->input->post('details'); 
	
		  $fields=array('id'=>$id,
						 'dep_name'=>$dep_name,
						 'dept_head'=>$dept_head,
						 'contact'=>$contact,
						 'details'=>$details,
			 
				'created_date'=>date('Y-m-d H:i:s'),
				'created_by'=>1);
		   //  echo json_encode($fields);
		   $this->db->insert('department_master', $fields);	   
	  } 

    function insertMaster(){
     $label_name= $this->input->post('label_name'); 
    //  $Comp_name= $this->input->post('Comp_name');
	//  $date= $this->input->post('date');
	//  $pub_date= $this->input->post('pub_date');
	//  $pub_edate= $this->input->post('pub_edate');
	//  $type= $this->input->post('type');
	//  $keyword= $this->input->post('keyword');
	//  $mobileno= $this->input->post('mobileno');
	//  $email= $this->input->post('email');
	//  $link= $this->input->post('link');
	//  $department= $this->input->post('department');
	//  $branch= $this->input->post('branch');
	//  $clas= $this->input->post('clas');
	//  $ssc= $this->input->post('ssc');
	//  $hsc= $this->input->post('hsc');
	//  $degree= $this->input->post('degree');
	//  $degreeper= $this->input->post('degreeper');
	//  $master= $this->input->post('master');
	//  $masterper= $this->input->post('masterper');
	//  $description= $this->input->post('description');
	//  $responsiblity= $this->input->post('responsiblity');
	//  $rules= $this->input->post('rules');


      
     
       $fields=array('label_name'=>$label_name,
	   					// 'Comp_name'=>$Comp_name,
						//    'date'=>$date,
						//    'pub_date'=>$pub_date,
						//    'pub_edate'=>$pub_edate,
						//    'type'=>$type,
						//    'keyword'=>$keyword,
						//    'mobileno'=>$mobileno,
						//    'email'=>$email,
						//    'link'=>$link,
						//    'department'=>$department,
						//    'branch'=>$branch,
						//    'clas'=>$clas,
						//    'ssc'=>$ssc,
						//    'hsc'=>$hsc,
						//    'degree'=>$degree,
						//    'degreeper'=>$degreeper,
						//    'master'=>$master,
						//    'masterper'=>$masterper,
						//    'description'=>$description,
						//    'responsiblity'=>$responsiblity,
						//    'rules'=>$rules,
						   
						   
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("master",$fields);
   } 
	
	
}