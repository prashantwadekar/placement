<?php
  class Student_model extends CI_Model {
    public function __construct()
      {
          $this->load->database();
      }
  
     public function getallstudent()
     {      
      
             $this->db->select('student_master.id,student_master.studentname,student_master.phone');
             $this->db->from('student_master');
             $this->db->where('student_master.is_active','1');
            //  $this->db->order_by("student_master.id", "desc"); 
              $query = $this->db->get();
              return $query->result();
             
     }
}
?>