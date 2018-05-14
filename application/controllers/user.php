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
		redirect('User/get');
	}
	
	public function form()
	{	
		$this->load->view("formaceng");

		
	}
	public function add(){}
	public function del($id){
		// $this->load->model('Classdata');
		$this->Classdata->del($id);
		redirect('User/get');
	}
	public function get(){
		$dt['tbuser']=$this->Classdata->gets();

		$this->load->view('table', $dt);
	}
	public function edit($id){}
	public function detail($id){} 
}
