<?php
class Crud extends CI_Model 
{
 
	function generate()
	{

		$query=$this->db->query("select * from user");
		$result=$query->result();
		$num_rows=$query->num_rows();
		for($i = 0, $j = $num_rows; $i < $j; $i++)
        {
            foreach ($result as $row)
            {
                $email = $row->email;
                $user = $row->username;

                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $numbers = '0123456789';

                $password = array();
                $user_id = array(); 
                $alpha_length = strlen($alphabet) - 1; 
                $num_length = strlen($numbers) -1; 
            
                array_push($user_id,$user);
                
                for ($i = 0; $i < 5; $i++) 
                {
                    $n = rand(0, $num_length);
                    $user_id[] = $numbers[$n];
                }
                for ($i = 0; $i < 10; $i++) 
                {
                    $n = rand(0, $alpha_length);
                    $password[] = $alphabet[$n];
                }
                $user_id = implode($user_id);
                $password = implode($password);

                $generate = array(
                'email' => $email,
                'username'=> $user,
                'user_id' => $user_id,
                'password' => $password
                );
   				
         				// $query=$this->db->query('select email from upload where email=$generate['email']');
         				// $result=$query->result();
          			// $num_rows=$query->num_rows();
          			// $data = array('result'=>$result,'num_rows'=>$num_result);
        		
            		$this->db->select('*');
            		$this->db->from('upload');
            		$this->db->where('email', $generate['email']); // will check row by column name in database
            		$result = $this->db->get();
       				   if($result->num_rows() > 0)
        		    {
           			// your data exist
              
             			$duplicate = 1;
                  $duplicate++;
        		    } 
        		    else 
        		    {
           			// data not exist insert you information
           			  $this->db->insert('upload', $generate);
              	}
			   }
		  }
	}

}