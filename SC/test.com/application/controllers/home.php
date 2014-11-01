<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	function index($error='')
	{	$data['error']=$error;
		$this->load->view('home',$data);
	}
	
	function logout(){
		$this->session->unset_userdata('loginData');
		$this->index('ออกจากระบบสำเร็จ');
	}

	
}

?>