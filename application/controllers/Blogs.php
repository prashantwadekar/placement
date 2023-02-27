<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
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

		$this->load->model('Religion_model');

        $this->load->model('Blog_model');
    
        $data['blog_types'] = $this->Blog_model->get_blog_types();
        $data['blog_department'] = $this->Blog_model->get_blog_departments();
        $data['keyword_types'] = $this->Religion_model->get_keyword_types();

    
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
     $id= $this->input->post('id'); 
     $blog_type= $this->input->post('blog_type');
     $blog_label= $this->input->post('blog_label'); 
     $blog_link= $this->input->post('blog_link');
     $video_link= $this->input->post('video_link'); 
     $auth_person= $this->input->post('auth_person');
     $blog_dep= $this->input->post('blog_dep'); 
     $std_photo= $_FILES['std_photo']['name'];
	  $blog_keyword = implode(',', $this->input->post('blog_keyword'));
     $editor= $this->input->post('editor');
      
     
       $fields=array('id'=>$id,
                        'blog_type'=>$blog_type,
                        'blog_label'=>$blog_label,
                        'blog_link'=>$blog_link,
                        'video_link'=>$video_link,
                        'auth_person'=>$auth_person,
                        'blog_dep'=>$blog_dep,
                        'std_photo'=>$std_photo,
                        'blog_keyword'=>$blog_keyword,
                        'editor'=>$editor,
                                
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("blog_master",$fields);
   } 
	

   function PublishBlogs(){
    $id= $this->input->post('id'); 
    $blog= $this->input->post('blog');
    $pubdate= $this->input->post('pubdate'); 
    $endpubdate= $this->input->post('endpubdate');
 
 
      $fields=array('id'=>$id,
                       'blog'=>$blog,
                       'pubdate'=>$pubdate,
                       'endpubdate'=>$endpubdate,
                
                               
            'created_date'=>date('Y-m-d H:i:s'),
            'created_by'=>1);
        echo json_encode($fields);
    $this->Commonmodel->insertRecord("blogpublish_master",$fields);
  } 
	
}
