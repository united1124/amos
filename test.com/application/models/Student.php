<?php 
class Student extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $stuId ; ######  ไอดีนักศึกษา  ######
    var $stuUsername ; ######  ยูสเนมนักศึกษา  ######
    var $stuPassword ; ######  พาสนักศึกษา  ######
    var $stuCode ; ######  รหัสนักศึกษา  ######
    var $stuName ; ######  ชื่อนักศึกษา  ######
    var $stuLastname ; ######  นามสกุลนักศึกษา  ######
    var $stuAddress ; ######  ที่อยู่นักศึกษา  ######
    var $stuTel ; ######  เบอร์โทรนักศึกษา  ######
    var $stuStatus ; ######  สถานะนักศึกษา  ######
###### End Attribute  ###### 

 ###### SET : $stuId ######
    function setStuId($stuId){
        $this->stuId = $stuId; 
     }
###### End SET : $stuId ###### 


###### GET : $stuId ######
    function getStuId(){
        return $this->stuId; 
     }
###### End GET : $stuId ###### 


 ###### SET : $stuUsername ######
    function setStuUsername($stuUsername){
        $this->stuUsername = $stuUsername; 
     }
###### End SET : $stuUsername ###### 


###### GET : $stuUsername ######
    function getStuUsername(){
        return $this->stuUsername; 
     }
###### End GET : $stuUsername ###### 


 ###### SET : $stuPassword ######
    function setStuPassword($stuPassword){
        $this->stuPassword = $stuPassword; 
     }
###### End SET : $stuPassword ###### 


###### GET : $stuPassword ######
    function getStuPassword(){
        return $this->stuPassword; 
     }
###### End GET : $stuPassword ###### 


 ###### SET : $stuCode ######
    function setStuCode($stuCode){
        $this->stuCode = $stuCode; 
     }
###### End SET : $stuCode ###### 


###### GET : $stuCode ######
    function getStuCode(){
        return $this->stuCode; 
     }
###### End GET : $stuCode ###### 


 ###### SET : $stuName ######
    function setStuName($stuName){
        $this->stuName = $stuName; 
     }
###### End SET : $stuName ###### 


###### GET : $stuName ######
    function getStuName(){
        return $this->stuName; 
     }
###### End GET : $stuName ###### 


 ###### SET : $stuLastname ######
    function setStuLastname($stuLastname){
        $this->stuLastname = $stuLastname; 
     }
###### End SET : $stuLastname ###### 


###### GET : $stuLastname ######
    function getStuLastname(){
        return $this->stuLastname; 
     }
###### End GET : $stuLastname ###### 


 ###### SET : $stuAddress ######
    function setStuAddress($stuAddress){
        $this->stuAddress = $stuAddress; 
     }
###### End SET : $stuAddress ###### 


###### GET : $stuAddress ######
    function getStuAddress(){
        return $this->stuAddress; 
     }
###### End GET : $stuAddress ###### 


 ###### SET : $stuTel ######
    function setStuTel($stuTel){
        $this->stuTel = $stuTel; 
     }
###### End SET : $stuTel ###### 


###### GET : $stuTel ######
    function getStuTel(){
        return $this->stuTel; 
     }
###### End GET : $stuTel ###### 


 ###### SET : $stuStatus ######
    function setStuStatus($stuStatus){
        $this->stuStatus = $stuStatus; 
     }
###### End SET : $stuStatus ###### 


###### GET : $stuStatus ######
    function getStuStatus(){
        return $this->stuStatus; 
     }
###### End GET : $stuStatus ###### 

function login()
	{
		
	$this -> db -> select('*');		
	$this -> db -> from('student');
	$this -> db -> where('stuUsername', $this->getStuUsername());
	$this -> db -> where('stuPassword', md5($this->getStuPassword()));
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