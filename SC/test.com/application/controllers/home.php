<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller {

	function index($error="")
	{
		$data['error']=$error;
		$this->load->view('homev',$data);
	}
	function logout()
	{
		$this->session->unset_userdata('loginData');
		header( 'Location: '.base_url().'index.php/home/index/--LogoutComplese--' );
	}
	
}
?>