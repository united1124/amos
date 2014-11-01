<?php 
class Teacher extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $teaId ; ######  ไอดีอาจารย์ที่ปรึกษา  ######
    var $teaUsername ; ######  ยูสเนมอาจารย์ที่ปรึกษา  ######
    var $teaPassword ; ######  พาสอาจารย์ที่ปรึกษา  ######
    var $teaCode ; ######  รหัสอาจารย์ที่ปรึกษา  ######
    var $teaName ; ######  ชื่ออาจารย์ที่ปรึกษา  ######
    var $teaLastname ; ######  นามสกุลอาจารย์ที่ปรึกษา  ######
    var $teaAddress ; ######  ที่อยู่อาจารย์ที่ปรึกษา  ######
    var $teaTel ; ######  เบอร์โทรอาจารย์ที่ปรึกษา  ######
    var $teaStatus ; ######  สถานะอาจารย์ที่ปรึกษา  ######
###### End Attribute  ###### 

 ###### SET : $teaId ######
    function setTeaId($teaId){
        $this->teaId = $teaId; 
     }
###### End SET : $teaId ###### 


###### GET : $teaId ######
    function getTeaId(){
        return $this->teaId; 
     }
###### End GET : $teaId ###### 


 ###### SET : $teaUsername ######
    function setTeaUsername($teaUsername){
        $this->teaUsername = $teaUsername; 
     }
###### End SET : $teaUsername ###### 


###### GET : $teaUsername ######
    function getTeaUsername(){
        return $this->teaUsername; 
     }
###### End GET : $teaUsername ###### 


 ###### SET : $teaPassword ######
    function setTeaPassword($teaPassword){
        $this->teaPassword = $teaPassword; 
     }
###### End SET : $teaPassword ###### 


###### GET : $teaPassword ######
    function getTeaPassword(){
        return $this->teaPassword; 
     }
###### End GET : $teaPassword ###### 


 ###### SET : $teaCode ######
    function setTeaCode($teaCode){
        $this->teaCode = $teaCode; 
     }
###### End SET : $teaCode ###### 


###### GET : $teaCode ######
    function getTeaCode(){
        return $this->teaCode; 
     }
###### End GET : $teaCode ###### 


 ###### SET : $teaName ######
    function setTeaName($teaName){
        $this->teaName = $teaName; 
     }
###### End SET : $teaName ###### 


###### GET : $teaName ######
    function getTeaName(){
        return $this->teaName; 
     }
###### End GET : $teaName ###### 


 ###### SET : $teaLastname ######
    function setTeaLastname($teaLastname){
        $this->teaLastname = $teaLastname; 
     }
###### End SET : $teaLastname ###### 


###### GET : $teaLastname ######
    function getTeaLastname(){
        return $this->teaLastname; 
     }
###### End GET : $teaLastname ###### 


 ###### SET : $teaAddress ######
    function setTeaAddress($teaAddress){
        $this->teaAddress = $teaAddress; 
     }
###### End SET : $teaAddress ###### 


###### GET : $teaAddress ######
    function getTeaAddress(){
        return $this->teaAddress; 
     }
###### End GET : $teaAddress ###### 


 ###### SET : $teaTel ######
    function setTeaTel($teaTel){
        $this->teaTel = $teaTel; 
     }
###### End SET : $teaTel ###### 


###### GET : $teaTel ######
    function getTeaTel(){
        return $this->teaTel; 
     }
###### End GET : $teaTel ###### 


 ###### SET : $teaStatus ######
    function setTeaStatus($teaStatus){
        $this->teaStatus = $teaStatus; 
     }
###### End SET : $teaStatus ###### 


###### GET : $teaStatus ######
    function getTeaStatus(){
        return $this->teaStatus; 
     }
###### End GET : $teaStatus ###### 

function login()
	{
		
	$this -> db -> select('*');		
	$this -> db -> from('teacher');
	$this -> db -> where('teaUsername', $this->getTeaUsername());
	$this -> db -> where('teaPassword', md5($this->getTeaPassword()));
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