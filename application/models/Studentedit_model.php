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

	public function updateData($tablename, $data, $where)
	{
		$query = $this->db->update($tablename,$data,$where);
		return $query;
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



	public function moveToVerify($std_id) {
		// Get the record from the unverify table
		$this->db->select('std_id, std_fullname, std_email, std_appliedfor, std_qualification, std_department, std_branch, std_term');
		$query = $this->db->get_where('studentunverify_master', array('std_id' => $std_id));
		
		if ($query->num_rows() == 1) {
			$record = $query->row_array();
			
			// Remove the record from the unverify table
			$this->db->delete('studentunverify_master', array('std_id' => $std_id));
			
			// Insert the record into the verify file table
			return $this->db->insert('studentverify_master', $record);
		} else {
			return false;
		}
	}

	
	
	
}