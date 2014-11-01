<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->checkStatus();
   $this->load->library('Excel/PHPExcel');
 }


	function index()
	{	
		$session_data = $this->session->userdata('loginData');
		$data['login'] = $session_data;
		$this->load->view('homeadmin',$data);
	}
	
	function checkStatus(){
		$session_data = $this->session->userdata('loginData');  /// แรกดู ข้อมูลที่เก็บใน session ชื่อ loginData
	     $status = $session_data['status'];  /// ให้ข้อมูลใน array session_data ชื่อ status เท่ากับ $satus
		 if($status!='admin'){
			 $this->session->unset_userdata('loginData');
			  header( 'Location: '.base_url().'index.php/home/index/NotPromission' );
			 
		 }
	}
	
	function homePage()
	{	
		$this->load->view('homePageAdmin');
	}
	
	function fromImport(){
		$this->load->view('importFile');
	}
	function importTeacher(){
			
				$inputFileName = $_FILES['exc']['tmp_name'];
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);  
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);  
				$objReader->setReadDataOnly(true);  
				$objPHPExcel = $objReader->load($inputFileName);  
				
				
				$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
				$highestRow = $objWorksheet->getHighestRow();
				$highestColumn = $objWorksheet->getHighestColumn();
				
				$headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
				$headingsArray = $headingsArray[1];
				
				$r = -1;
				$namedDataArray = array();
				for ($row = 2; $row <= $highestRow; ++$row) {
					$dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
					if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
						++$r;
						foreach($headingsArray as $columnKey => $columnHeading) {
							$namedDataArray[$r][$columnHeading] = $dataRow[$row][$columnKey];
						}
					}
				}


				for($i=0;$i<count($namedDataArray);$i++){

							if($namedDataArray[$i]['Status']=='tea'||$namedDataArray[$i]['Status']=='stu'){
							$this->People->setUsername($namedDataArray[$i]['Username']);
							$this->People->setPassword($namedDataArray[$i]['Password']);
							$this->People->setCode($namedDataArray[$i]['Code']);
							$this->People->setName($namedDataArray[$i]['Name']);
							$this->People->setLastname($namedDataArray[$i]['Lastname']);
							$this->People->setAddress($namedDataArray[$i]['Address']);
							$this->People->setTel($namedDataArray[$i]['Tel']);
							$this->People->setStatus($namedDataArray[$i]['Status']);
							
							$this->People->addPeople();
							}
				}



	}

	
}

?>