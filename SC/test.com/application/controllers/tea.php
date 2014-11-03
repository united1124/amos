<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tea extends CI_Controller {
	
	 function __construct()
 {
   parent::__construct();
   $this->checkStatus();
 }


	function index()
	{	
		$session_data = $this->session->userdata('loginData');
		$data['login'] = $session_data;
		$this->load->view('hometea',$data);
	}
	
	function checkStatus(){
		$session_data = $this->session->userdata('loginData');  /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData
	     $status = $session_data['status'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
		 if($status!='tea'){
			 $this->session->unset_userdata('loginData');
			  header( 'Location: '.base_url().'index.php/home/index/NotPromission' );
			 
		 }
	}
	function homePageTea()
	{	
		$this->load->view('homePageTea');
	}
	function show()
	{
		$data['people']= $this->People->getallData();
		$this->load->view('showstu',$data);
	}
	
	function upDate(){
		$data = $this->session->userdata('loginData');
		$data['update']= $this->People->updateTea($data['id']);
		$this->load->view('updateTea',$data);
		}
	function doUpdate()
	{
		$this->People->setId($this->input->post('id'));
		$this->People->setAddress($this->input->post('address'));
		$this->People->setTel($this->input->post('tel'));						
		$this->People->upDateTeas();
		$this->index();
	}
}
?>