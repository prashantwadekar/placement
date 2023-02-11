
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Createaccount extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('Country_model');
        
    }
	
	
	public function index()
	{
        //$data['data']=$this->Country_model->getallCountry();
        // echo "<pre>";
        // print_r($data);
		//$this->load->view('common/header_view');
		$this->load->view('Registration/Createaccount_view');
		//$this->load->view('common/footer_view');
	

	}
    

    function insertSignup(){
        $username= $this->input->post('username'); 
        $email= $this->input->post('email'); 
      $password= $this->input->post('password');
      $repassword= $this->input->post('repassword');
      $mobilenumber= $this->input->post('mobilenumber');

      
     
       $fields=array('username'=>$username,
                      'email'=>$email,
                      'password'=>$password,
                      'repassword'=>$repassword,
                      'mobilenumber'=>$mobilenumber,  
                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("createaccount_master",$fields);
   } 
	
	
}