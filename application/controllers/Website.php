<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');
        
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
	public function create()
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

  public function coursefetchDatafromDatabase()
  {
	  $resultList = $this->Studentedit_model->fetchAllData('*','addcourse_master',array());
	  
	  $result = array();
	  $i = 1;
	  foreach ($resultList as $key => $value) {

		  $button = '<a  href="' . base_url() . 'Website/editrecord/' . $value['id'] . '" "title="Edit">&emsp;&emsp;<i class="fas fa-edit animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';

		  $result['data'][] = array(
			  $i++,
			  $button,
			  $value['id'],
			  $value['coursename'],
			  $value['duration'],
		  );
	  }
	  echo json_encode($result);
  }

  public function editrecord($id = '')
  {
	  $data['result'] = $this->Studentedit_model->coursefetchDataById($id);
	  $this->load->view('common/header_view');
	  $this->load->view('Website/courseedit_view',$data);
	  $this->load->view('common/footer_view');
  }

  
  function update()
  {
	  $data = array(
		  'id' => $this->input->post('id'),
		  'coursename' => $this->input->post('coursename'),
		  'duration' => $this->input->post('duration'),
	  );


	  $id = $this->input->post('id');

	  $this->load->model('Studentedit_model');
	  $result = $this->Studentedit_model->courseupdate_student($data, $id);

	  if ($result) {
		  echo 1;
	  } else {
		  echo 0;
	  }
  }

  
}