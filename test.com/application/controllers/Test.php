<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {

	function index()
	{	
		$this->load->view('Test');
	}
	function addView()
	{	
		$this->load->view('TestAdd');
	}
	function add()
	{	
		$adminUsername = $this->input->post('adminUsername');
		$adminPassword = $this->input->post('adminPassword');
		$adminCode = $this->input->post('adminCode');
		$adminName = $this->input->post('adminName');
		$adminLastname = $this->input->post('adminLastname');
		$adminAddress = $this->input->post('adminAddress');
		$adminTel = $this->input->post('adminTel');
		$adminStatus = $this->input->post('adminStatus');
		
		var_dump($_POST);
		
		$this->Admin->setAdminUsername($adminUsername);
		$this->Admin->setAdminPassword($adminPassword);
		$this->Admin->setAdminCode($adminCode);
		$this->Admin->setAdminName($adminName);
		$this->Admin->setAdminLastname($adminLastname);
		$this->Admin->setAdminAddress($adminAddress);
		$this->Admin->setAdminTel($adminTel);
		$this->Admin->setAdminStatus($adminStatus);
		
		$id = $this->Admin->add();
		echo $id;
	}
	function show()
	{
	$data['showall'] = $this->Admin->getalldata();
	$this->load->view('ShowTest',$data);
	}
}

?>