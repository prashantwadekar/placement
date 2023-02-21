<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blogs extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Branch_model');
        
    }
	
	
	// public function index()
	// {
    //     // $data['data']=$this->Branch_model->getallBranch();
    //     // echo "<pre>";
    //     // print_r($data);
	// 	//$this->load->view('common/header_view');
	// 	$this->load->view('Registration/Loginpage_view');
	// 	//$this->load->view('common/footer_view');
	

	// }
    public function create()
	{
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Blogs/blogscreate_view',$data);
		$this->load->view('common/footer_view');

	}

    public function publish()
	{
        $obj='';
        $data['data']=$obj;
		$this->load->view('common/header_view');
		$this->load->view('Blogs/blogspublish_view',$data);
		$this->load->view('common/footer_view');

	}
   

    function insertBlogs(){
     $blog_type= $this->input->post('blog_type');
     $editor= $this->input->post('editor'); 
   

      
      
     
       $fields=array('blog_type'=>$blog_type,
                        'editor'=>$editor,
                      
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("blogs",$fields);
   } 
	
	
}
