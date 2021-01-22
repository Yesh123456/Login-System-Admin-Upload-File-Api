<?php
class Sending_model extends CI_Model 
{
 	function send()
 	{
 		$target_url = "https://api.elasticemail.com/v2/email/send";
 		$apikey = "68C9DD4009A7760C2FAEE3F686CD2703E46ED4BB8D5F587015CC35DECFDBDD30F99C5095B51A3D40FAE98015F8B1B6C8";
 		
 		$query = $this->db->get('upload');
 	
 		foreach($query->result() as $row)
 		{
 			$user = $row->user_id;
 			$password = $row->password;
 			$body = "<h2>This is authenticated email </h2>
 					<b>User-id =$user and Password=$password<b>";
 			try{

	 			$post = array('from' => 'isco30427@gmail.com',
						'fromName' => 'Isco Jack',
						'apikey' => $apikey,
						'subject' => 'Enable Account verification',
						'to' => $row->email, 
						'bodyHtml' =>$body,
						'bodyText' => 'Helllo',
						'isTransactional' => false);
				
				$ch = curl_init();
				curl_setopt_array($ch, array(
	            	CURLOPT_URL => $target_url,
					CURLOPT_POST => true,
					CURLOPT_POSTFIELDS => $post,
	            	CURLOPT_RETURNTRANSFER => true,
	            	CURLOPT_HEADER => false,
					CURLOPT_SSL_VERIFYPEER => false
	        	));
			
	        	$result=curl_exec ($ch);
	        	curl_close ($ch);
			
	        	echo $result;
	        	$count = 1;
	        	$count++;
	        	// return TRUE;	

	 		}
	 		catch(Exception $ex)
	 		{
	 			echo $ex->getMessage();
	 			// return FALSE;
	 		}
 		}
 		return $count;

 	} 
}  