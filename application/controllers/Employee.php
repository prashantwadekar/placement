<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        
         $this->load->model('Studentedit_model');

        
    }
	
	
	public function index()
	{
 
		$this->load->view('common/header_view');
		$this->load->view('Employee/Employee_view');
		$this->load->view('common/footer_view');
	

	}
    public function editrecord($id = '')
	{
		$data['result'] = $this->Studentedit_model->empfetchDataById($id);
		$this->load->view('common/header_view');
		$this->load->view('Employee/Employee_view1',$data);
		$this->load->view('common/footer_view');
	}
	
    public function create()
	{
        $this->load->model('Religion_model');

        $data['cast_types'] = $this->Religion_model->get_cast_types();
        $data['subcast_types'] = $this->Religion_model->get_subcast_types();
        $data['qualification_types'] = $this->Religion_model->get_qualification_types();
        $data['department_types'] = $this->Religion_model->get_department_types();
        $data['branch_types'] = $this->Religion_model->get_branch_types();
        $data['country_types'] = $this->Religion_model->get_country_types();
        $data['state_types'] = $this->Religion_model->get_state_types();
        $data['city_types'] = $this->Religion_model->get_city_types();
        $data['bld_types'] = $this->Religion_model->get_bloodgroup_types();
        $data['emp_types'] = $this->Religion_model->get_emptype_types();


		$this->load->view('common/header_view');
		$this->load->view('Employee/Employee_view',$data);
		$this->load->view('common/footer_view');
	}
    public function edit()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeEditview');
		$this->load->view('common/footer_view');
	}
    public function delete()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeDelete');
		$this->load->view('common/footer_view');
	}
    public function report()
	{
		$this->load->view('common/header_view');
		$this->load->view('Employee/EmployeeReport');
		$this->load->view('common/footer_view');
	}



    function insertEmployee(){
     $fullname= $this->input->post('fullname'); 
      $bld= $this->input->post('bld');
      $email= $this->input->post('email'); 
      $dob= $this->input->post('dob'); 
       $radio= $this->input->post('radio');
       $age= $this->input->post('age'); 
       $emptype= $this->input->post('emptype'); 
       $Cast= $this->input->post('Cast'); 
       $sCast= $this->input->post('sCast'); 
       $qualification= $this->input->post('qualification'); 
       $department= $this->input->post('department'); 
       $branch= $this->input->post('branch'); 
       $pincode= $this->input->post('pincode'); 
       $adharnumber= $this->input->post('adharnumber'); 
       $phone= $this->input->post('phone'); 
       $country= $this->input->post('country'); 
       $state= $this->input->post('state'); 
       $city= $this->input->post('city'); 
       $address= $this->input->post('address'); 

      
     
       $fields=array('fullname'=>$fullname,
                      'bld'=>$bld,
                      'email'=>$email,
                      'dob'=>$dob,
                      'radio'=>$radio,
                      'age'=>$age,
                      'emptype'=>$emptype,
                      'Cast'=>$Cast,
                      'sCast'=>$sCast,
                      'qualification'=>$qualification,
                      'department'=>$department,
                      'branch'=>$branch,
                      'pincode'=>$pincode,
                      'adharnumber'=>$adharnumber,
                      'phone'=>$phone,
                      'country'=>$country,
                      'state'=>$state,
                      'city'=>$city,
                      'address'=>$address,

                     
                      
             'created_date'=>date('Y-m-d H:i:s'),
             'created_by'=>1);
         echo json_encode($fields);
     $this->Commonmodel->insertRecord("employee_master",$fields);
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
                'fullname' => $this->input->post('fullname'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'pincode' => $this->input->post('pincode'),
            );
    
    
            $id = $this->input->post('id');
    
            $this->load->model('Studentedit_model');
            $result = $this->Studentedit_model->empupdate_student($data, $id);
    
            if ($result) {
                echo 1;
            } else {
                echo 0;
            }
        }
    
    
       //edit data
       public function fetchDatafromDatabase()
        {
            $resultList = $this->Studentedit_model->fetchAllData('*','employee_master',array());
            
            $result = array();
            $i = 1;
            foreach ($resultList as $key => $value) {
    
                $button = '<a  href="' . base_url() . 'Employee/editrecord/' . $value['id'] . '" "title="Edit">&emsp;&emsp;<i class="fas fa-edit animtxt fa-lg"style="color:green;"></i>&nbsp;<h6></h6></a>';
    
                $result['data'][] = array(
                    $i++,
                    $button,
                    $value['id'],
                    $value['fullname'],
                    $value['email'],
                    $value['phone'],
                    $value['pincode'],
           
                   
                );
            }
            echo json_encode($result);
        }
        
    //delete page
        public function DeletefetchDatafromDatabase()
        {
            $resultList = $this->Studentedit_model->fetchAllData('*','employee_master',array());
            
            $result = array();
            $i = 1;
            foreach ($resultList as $key => $value) {
    
                $button1 = '<a  href="#"  onclick="deleteFun('.$value['id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-trash animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';
    
    
                $result['data'][] = array(
                    $i++,
                    $button1,
                    $value['id'],
                    $value['fullname'],
                    $value['email'],           
                    $value['phone'],           
                    $value['pincode'],           
                );
            }
            echo json_encode($result);
        }
    //unverify page
        
        public function UnverifyfetchDatafromDatabase()
        {
            $resultList = $this->Studentedit_model->fetchAllData('*','studentcreate_master',array());
            
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
    
        //verify page
    
        public function VerifyfetchDatafromDatabase()
        {
            $resultList = $this->Studentedit_model->fetchAllData('*','studentverify_master',array());
    
                $result = array();
            $i = 1;
            foreach ($resultList as $key => $value) {
    
                $button1 = '<a  href="#"  onclick="deleteverify('.$value['std_id'].')" "title="delete">&emsp;&emsp;<i class="fas fa-times-circle animtxt fa-lg"style="color:red;"></i>&nbsp;<h6></h6></a>';
    
    
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
    //fetch reports
        public function ReportfetchDatafromDatabase()
        {
            $resultList = $this->Studentedit_model->fetchAllData('*','employee_master',array());
            
            $result = array();
            $i = 1;
            foreach ($resultList as $key => $value) {
    
                $button1 = '<a  href="#"  onclick="PrintDiv()" "title="Report">&emsp;&emsp;<i class="fas fa-file-alt animtxt fa-lg"style="color:blue;"></i>&nbsp;<h6></h6></a>';
    
    
                $result['data'][] = array(
                    $i++,
                    $button1,
                    $value['id'],
                    $value['fullname'],
                    $value['email'],
                    $value['phone'],
                    $value['pincode'],
           
                   
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
            $dataDelete = $this->Studentedit_model->deleteData('employee_master',array('id'=>$id));
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
            $std_id = $this->input->post('std_id');
            $dataDelete = $this->Studentedit_model->deleteData('studentverify_master',array('std_id'=>$std_id));
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