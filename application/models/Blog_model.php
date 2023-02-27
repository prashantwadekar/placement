<?php
class Blog_model extends CI_Model {
    function get_blog_types() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM blog_types");
        
        // Return the result as an array of objects
        return $query->result();
    }

    function get_blog_departments() {
        // Connect to the database
        $this->load->database();
        
        // Run a SQL query to retrieve the data
        $query = $this->db->query("SELECT * FROM blog_department");
        
        // Return the result as an array of objects
        return $query->result();
    }
        
}
?>
