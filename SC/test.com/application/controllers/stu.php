<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Stu extends CI_Controller {
	
 function __construct()
 {
   parent::__construct();
   $this->checkStatus();
 }


	function index()
	{	
		$session_data = $this->session->userdata('loginData');
		$data['login'] = $session_data;
		$this->load->view('homestu',$data);
	}
	
	function checkStatus(){
		$session_data = $this->session->userdata('loginData');  /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData
	     $status = $session_data['status'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
		 if($status!='stu'){
			 $this->session->unset_userdata('loginData');
			  header( 'Location: '.base_url().'index.php/home/index/NotPromission' );
			 
		 }
	}

	
}

?>