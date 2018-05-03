<?php
/**
* 
*/
class User extends CI_Controller
{
 	public function __construct()
	{
		parent::__construct();
		$this->load->model("Classdata");
		
	}
	public function mlebu(){
		$this->Classdata->submit($data);
		$this->load->view("welcome_message");
	}
	
	public function form()
	{
		$this->load->view("formaceng");
	}
}
