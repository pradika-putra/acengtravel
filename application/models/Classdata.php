<?php
/**
* 
*/
class Classdata extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function submit($data){
		$username = $this->input->post("username");
		$fullname = $this->input->post("fullname");
		$password = $this->input->post("password");

		$data = array(
			'username' => $username ,
			'password' => $password ,
			'fullname' => $fullname ,
			'level' => 1); 
		$this ->db->insert("user", $data);
	}
}