<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Master_model');
        
    }

    public function index()
	{
		$this->load->view('common/header_view');
		$this->load->view('Master/');
		$this->load->view('common/footer_view');
	

	}
	
	
	public function mainslider()
	{
        // $data['data']=$this->Master_model->getallMaster();
        // echo "<pre>";
        // print_r($data);
		$this->load->view('common/header_view');
		$this->load->view('Website/main_slider');
		$this->load->view('common/footer_view');
	

	}
    public function editmainslider()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/edit_main_slider',$data);
		$this->load->view('common/footer_view');
	

	}

    public function photo()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/photo',$data);
		$this->load->view('common/footer_view');
	

	}

    public function editphoto()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/edit_photo',$data);
		$this->load->view('common/footer_view');
	

	}

    public function video()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/add_video',$data);
		$this->load->view('common/footer_view');
	

	}

    public function editvideo()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/edit_video',$data);
		$this->load->view('common/footer_view');
	

	}

    public function course()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/add_course',$data);
		$this->load->view('common/footer_view');
	

	}

    public function modifycourse()
	{	$obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Website/edit_course',$data);
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







   function addcourse(){
	$id= $this->input->post('id'); 
	 $std_department= $this->input->post('std_department');
	 $coursename= $this->input->post('coursename'); 
	 $duration= $this->input->post('duration'); 
	 $language= $this->input->post('language'); 
	 $description= $this->input->post('description');


	  $fields=array('id'=>$id,
					 'std_department'=>$std_department,
					 'coursename'=>$coursename,
					 'duration'=>$duration,
					 'language'=>$language,
					 'description'=>$description,
					
					 
			'created_date'=>date('Y-m-d H:i:s'),
			'created_by'=>1);
	   //  echo json_encode($fields);
	   $this->db->insert('addcourse_master', $fields);	   
  } 

  
  function addvideo(){
	$id= $this->input->post('id'); 
	 $videolink= $this->input->post('videolink');
	 $videolabel= $this->input->post('videolabel'); 
	


	  $fields=array('id'=>$id,
					 'videolink'=>$videolink,
					 'videolabel'=>$videolabel,
					
					
					 
			'created_date'=>date('Y-m-d H:i:s'),
			'created_by'=>1);
	   //  echo json_encode($fields);
	   $this->db->insert('addvideo_master', $fields);	   
  } 
	

  function addslider(){
	$id= $this->input->post('id'); 
	 $slider_label= $this->input->post('slider_label');
	 $std_dob= $this->input->post('std_dob'); 
	 $edate= $this->input->post('edate'); 
	


	  $fields=array('id'=>$id,
					 'slider_label'=>$slider_label,
					 'std_dob'=>$std_dob,
					 'edate'=>$edate,
					
					
					 
			'created_date'=>date('Y-m-d H:i:s'),
			'created_by'=>1);
	   //  echo json_encode($fields);
	   $this->db->insert('addslider_master', $fields);	   
  } 

  function addphoto(){
	$id= $this->input->post('id'); 
	 $std_adharphoto= $this->input->post('std_adharphoto');
	 $photo_number= $this->input->post('photo_number'); 
	


	  $fields=array('id'=>$id,
					 'std_adharphoto'=>$std_adharphoto,
					 'photo_number'=>$photo_number,
					
					
					 
			'created_date'=>date('Y-m-d H:i:s'),
			'created_by'=>1);
	   //  echo json_encode($fields);
	   $this->db->insert('addphoto', $fields);	   
  } 
}