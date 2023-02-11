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