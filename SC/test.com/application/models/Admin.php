<?php 
class Admin extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $adminId ; ######  ไอดีแอดมิน  ######
    var $adminUsername ; ######  ยูสเซอร์แอดมิน  ######
    var $adminPassword ; ######  พาสแอดมิน  ######
    var $adminCode ; ######  รหัสแอดมิน  ######
    var $adminName ; ######  ชื่อแอดมิน  ######
    var $adminLastname ; ######  นามสกุลแอดมิน  ######
    var $adminAddress ; ######  ที่อยู่แอดมิน  ######
    var $adminTel ; ######  เบอร์โทรศัพท์แอดมิน  ######
    var $adminStatus ; ######  สถานะแอดมิน  ######
###### End Attribute  ###### 

 ###### SET : $adminId ######
    function setAdminId($adminId){
        $this->adminId = $adminId; 
     }
###### End SET : $adminId ###### 


###### GET : $adminId ######
    function getAdminId(){
        return $this->adminId; 
     }
###### End GET : $adminId ###### 


 ###### SET : $adminUsername ######
    function setAdminUsername($adminUsername){
        $this->adminUsername = $adminUsername; 
     }
###### End SET : $adminUsername ###### 


###### GET : $adminUsername ######
    function getAdminUsername(){
        return $this->adminUsername; 
     }
###### End GET : $adminUsername ###### 


 ###### SET : $adminPassword ######
    function setAdminPassword($adminPassword){
        $this->adminPassword = $adminPassword; 
     }
###### End SET : $adminPassword ###### 


###### GET : $adminPassword ######
    function getAdminPassword(){
        return $this->adminPassword; 
     }
###### End GET : $adminPassword ###### 


 ###### SET : $adminCode ######
    function setAdminCode($adminCode){
        $this->adminCode = $adminCode; 
     }
###### End SET : $adminCode ###### 


###### GET : $adminCode ######
    function getAdminCode(){
        return $this->adminCode; 
     }
###### End GET : $adminCode ###### 


 ###### SET : $adminName ######
    function setAdminName($adminName){
        $this->adminName = $adminName; 
     }
###### End SET : $adminName ###### 


###### GET : $adminName ######
    function getAdminName(){
        return $this->adminName; 
     }
###### End GET : $adminName ###### 


 ###### SET : $adminLastname ######
    function setAdminLastname($adminLastname){
        $this->adminLastname = $adminLastname; 
     }
###### End SET : $adminLastname ###### 


###### GET : $adminLastname ######
    function getAdminLastname(){
        return $this->adminLastname; 
     }
###### End GET : $adminLastname ###### 


 ###### SET : $adminAddress ######
    function setAdminAddress($adminAddress){
        $this->adminAddress = $adminAddress; 
     }
###### End SET : $adminAddress ###### 


###### GET : $adminAddress ######
    function getAdminAddress(){
        return $this->adminAddress; 
     }
###### End GET : $adminAddress ###### 


 ###### SET : $adminTel ######
    function setAdminTel($adminTel){
        $this->adminTel = $adminTel; 
     }
###### End SET : $adminTel ###### 


###### GET : $adminTel ######
    function getAdminTel(){
        return $this->adminTel; 
     }
###### End GET : $adminTel ###### 


 ###### SET : $adminStatus ######
    function setAdminStatus($adminStatus){
        $this->adminStatus = $adminStatus; 
     }
###### End SET : $adminStatus ###### 


###### GET : $adminStatus ######
    function getAdminStatus(){
        return $this->adminStatus; 
     }
###### End GET : $adminStatus ###### 

	function add()
	{	
		$data=array(
		'username'=> $this->getAdminUsername(),
		'password'=> MD5($this->getAdminPassword()),
		'adminCode'=> $this->getAdminCode(),
		'adminName'=> $this->getAdminName(),
		'adminLastname'=> $this->getAdminLastname(),
		'adminAddress'=> $this->getAdminAddress(),
		'adminTel'=> $this->getAdminTel(),
		'status'=> $this->getAdminStatus(),
		);
	$this->db->insert('admin',$data);
	echo $this->db->insert_id();
	}
	function getalldata()
	{
	return $this->db->get('admin')->result_array();
	}
	
	function login()
	{
		
	$this -> db -> select('*');		
	$this -> db -> from('admin');
	$this -> db -> where('username', $this->getAdminUsername());
	$this -> db -> where('password', md5($this->getAdminPassword()));
	$this -> db -> limit(1);

	$query = $this -> db -> get();

	if($query -> num_rows() == 1)
	{
		return $query->result();
	}
	else
	{
		return FALSE;
	}
  }
}
?>