<?php
class Religion_model extends CI_Model {
    function get_religion_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM religion_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  
    function get_cast_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM casts_types");
        
        // Return the result as an array of objects
        return $query->result();
    }   
    function get_subcast_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM subcasts_types");
        
        // Return the result as an array of objects
        return $query->result();
    }     

    function get_appliedfor_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM appliedfor_types");
        
        // Return the result as an array of objects
        return $query->result();
    }    
    
    function get_qualification_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM qualification_types");
        
        // Return the result as an array of objects
        return $query->result();
    }   
    
    function get_department_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM department_types");
        
        // Return the result as an array of objects
        return $query->result();
    }    
    
    function get_branch_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM branch_types");
        
        // Return the result as an array of objects
        return $query->result();
    }    
    
    function get_degree_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM degree_types");
        
        // Return the result as an array of objects
        return $query->result();
    }    
    
    function get_master_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM master_types");
        
        // Return the result as an array of objects
        return $query->result();
    }     
    
    function get_country_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM country_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  
    function get_state_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM state_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  

    function get_city_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM city_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  

    function get_hobbie_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM hobbie_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  

    function get_skill_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM skill_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  

    function get_cerification_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM cerification_types");
        
        // Return the result as an array of objects
        return $query->result();
    }  
    function get_bloodgroup_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM bloodgroup_types");
        
        // Return the result as an array of objects
        return $query->result();
    } 
    function get_emptype_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM emptype_types");
        
        // Return the result as an array of objects
        return $query->result();
    } 

    function get_cmptype_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM company_types");
        
        // Return the result as an array of objects
        return $query->result();
    } 
    function get_branchlocation_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM branchlocation_types");
        
        // Return the result as an array of objects
        return $query->result();
    } 

    function get_companynames_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM company_master");
        
        // Return the result as an array of objects
        return $query->result();
    } 

    function get_keyword_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM keyword_types");
        
        // Return the result as an array of objects
        return $query->result();
    } 
}
?>
