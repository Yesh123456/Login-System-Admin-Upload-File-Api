<?php
class Csv_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function uploadData($data)
    {
        
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $data['email']); // will check row by column name in database
        $this->result = $this->db->get();

        if($this->result->num_rows() > 0){
           // you data exist
           return FALSE;
        } else {
           // data not exist insert you information
           $data['crane_features']=$this->db->insert('user', $data);
           return TRUE;
        }
            
        
    }

}