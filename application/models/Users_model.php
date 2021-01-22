<?php
class Users_model extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function login($username, $password){
        
        $this->db->select('*');
        $this->db->from('admins');
        $this->db->where('username',$username);                       
        //  $this->db->where('password',$password);

        $query = $this->db->get();
        $result = $query->row();
        $result1 = $query->row_array();
        if (!empty($result1) && password_verify($password, $result1['password'])) {
        // if this username exists, and the input password is verified using password_verify         
            if($query->row()){    
                return $query->result();     
            } 
        }
        else 
        {
            return false;
        }
     
    }

}
