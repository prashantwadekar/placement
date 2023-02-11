<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
        // $this->load->model('City_model');
        
    }
	
	
	public function index()
	{
        
		$this->load->view('Login/login_view');
	

	}

    function loginnow()
	{
		
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
                
				$username = $this->input->post('username');
				$password = $this->input->post('password');


				$this->load->model('Login_model');
				$status = $this->Login_model->checkPassword($password,$username);

				if($status!=false)
				{
					$username = $status->username;
					$password = $status->password;

					$session_data = array(
						'username'=>$username,
						'password' => $password,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('dashboard'));
				}
				else
				{
					
					$this->session->set_flashdata('error','Usename or Password not matched');
					redirect(base_url('Loginpage'));
				}
				

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('Loginpage'));
			}
		}
	}

	function logout()
	{
		session_destroy();
		redirect(base_url('Loginpage'));
	}

   
	
	
}