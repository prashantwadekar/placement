<?php 

class Studentedit_model extends CI_Model
{
	public function createData($data)
	{
		$query = $this->db->insert('studentcreate_master',$data);
		return $query;
	}

	public function fetchAllData($data,$tablename,$where)
	{
		$query = $this->db->select($data)
						->from($tablename)
						->where($where)
						->get();
		return $query->result_array();
	}

	public function fetchSingleData($data,$tablename,$where)
	{
		$query = $this->db->select($data)
						->from($tablename)
						->where($where)
						->get();
		return $query->row_array();
	}

	public function fetchDataById($std_id) {
		$query = $this->db->get_where('studentcreate_master', array('std_id' => $std_id));
		if ($query->num_rows() > 0) {
			return $query->result();
		} else {
			return false;
		}
	}
	

	public function update_record($std_id, $data) {
		$this->db->where('std_id', $std_id);
		$this->db->update('studentcreate_master', $data);
	 }
	 
	 function update_student($data, $id)
	 {
		 $this->db->where('std_id', $id);
		 $this->db->update('studentcreate_master', $data);
		 return true;
	 }

    public function get_student_by_id($std_id) {
        $this->db->select('*');
        $this->db->from('studentcreate_master');
        $this->db->where('std_id', $std_id);
        $query = $this->db->get();
        return $query->row();
    }

	
	public function deleteData($tablename,$where)
	{
		$query = $this->db->delete($tablename,$where);
		return $query;
	}


	public function insertDynamicData($tablename, $data)
	{
		$query = $this->db->insert($tablename, $data);
		return $query;
	}


//it moves record from studentcreate_master table to studentverify_master
	public function moveToVerify($std_id) {
		// Get the record from the unverify table
		$this->db->select('std_id, std_fullname, std_email, std_appliedfor, std_qualification, std_department, std_branch, std_term');
		$query = $this->db->get_where('studentcreate_master', array('std_id' => $std_id));
		
		if ($query->num_rows() == 1) {
			$record = $query->row_array();
			
			// Remove the record from the unverify table
			$this->db->delete('studentcreate_master', array('std_id' => $std_id));
			
			// Insert the record into the verify file table
			return $this->db->insert('studentverify_master', $record);
		} else {
			return false;
		}
	}

	
	
	
}