<?php
class Commonmodel extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function getAll($tableName)
    {
        
        $query = $this->db->get($tableName);
        return $query->result();
    }
     function getMaxId($tableName,$fieldName)
    {
        return $this->db->select_max($fieldName)->get($tableName)->result();

    } 

    function getByLikeQuery($tableName,$fieldName,$fieldValue)
    {
        $this->db->like($fieldName,$fieldValue);
        $query = $this->db->get($tableName);
        return $query->result();
    }

    function getByWhereArray($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->get($tableName);
        return $query->result();
    }

     function getByWhereInArray($tableName,$fieldName,$whereArray)
    {
        $this->db->where_in($fieldName,$whereArray);
        $query = $this->db->get($tableName);
        return $query->result();
    }

    function getByJoinTwoTables($tableName1,$tableName2,
        $condition,$joinType)
    {
        $this->db->join($tableName2, $condition, $joinType);
        $query = $this->db->get($tableName1);
        return $query->result();
    }

    function getByJoinThreeTables($tableName1,$tableName2,$tableName3,
        $condition1,$condition2,$joinType1,$joinType2)
    {
        $this->db->join($tableName2, $condition1, $joinType1);
        $this->db->join($tableName3, $condition2, $joinType2);
        $query = $this->db->get($tableName1);
        return $query->result();
    }

    function insertRecord($tableName,$fieldArray)
    {
         $this->db->insert($tableName, $fieldArray);
         
         return $this->db->insert_id();
    }


    function insertMultipleRecords($tableName,$fieldArray)
    {
         $this->db->insert_batch($tableName, $fieldArray);
         return $this->db->insert_id();
    }

    function checkAndInsert($tableName,$fieldArray,$whereArray,$primaryKey)
    {
        $this->db->where($whereArray);
        $query = $this->db->get($tableName);
        if($query->num_rows() > 0){
            $row = $query->row_array(); 
            return $row[$primaryKey];
        }else{
            $this->db->insert($tableName, $fieldArray);
            return $this->db->insert_id();
        }
        
    }

    function checkAndInsertOrUpdate($tableName,$fieldArray,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->get($tableName);
        if($query->num_rows() > 0){
            $this->db->update($tableName, $fieldArray,$whereArray);
            return 0;
        }else{
            $this->db->insert($tableName, $fieldArray);
            return 1;
        }
        
    }

    function updateRecord($tableName,$fieldArray,$recordIdArray)
    {
        //$this->db->where('id', $recordId);
        $this->db->update($tableName, $fieldArray, $recordIdArray);
        return true;//$this->db->affected_rows();
    }

    function deleteRecord($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $query = $this->db->delete($tableName);
        return $this->db->affected_rows();
    }

// vinayak added on 1 oct 2013
    function getCount($tableName,$whereArray)
    {
        $this->db->where($whereArray);
        $this->db->from($tableName);
        return $this->db->count_all_results();
    }
    private $lastQuery='';
    
    public function getpaginationrecord($table,$columnName,$columnValue,$limit,$start)
    {   
        $query = $this->db->limit($limit,$start)
                          ->get_where($table,[$columnName=>$columnValue]);
        return $query->result();
    }

    public function getTotalRow()
        {
            $sql= explode('LIMIT',$this->lastQuery);
            $query=$this->db->query($sql[0]);
            $result=$query->result();
            return count($result);
        }

}
?>