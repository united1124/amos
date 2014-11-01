<?php 
class People extends CI_Model {

    function __construct(){
	   parent::__construct();
    }

######  Attribute  ###### 
    var $id ; ######  id  ######
    var $username ; ######  username  ######
    var $password ; ######  password  ######
    var $code ; ######  code  ######
    var $name ; ######  name  ######
    var $lastname ; ######  lastname  ######
    var $address ; ######  address  ######
    var $tel ; ######  tel  ######
    var $status ; ######  status  ######
###### End Attribute  ###### 

 ###### SET : $id ######
    function setId($id){
        $this->id = $id; 
     }
###### End SET : $id ###### 


###### GET : $id ######
    function getId(){
        return $this->id; 
     }
###### End GET : $id ###### 


 ###### SET : $username ######
    function setUsername($username){
        $this->username = $username; 
     }
###### End SET : $username ###### 


###### GET : $username ######
    function getUsername(){
        return $this->username; 
     }
###### End GET : $username ###### 


 ###### SET : $password ######
    function setPassword($password){
        $this->password = $password; 
     }
###### End SET : $password ###### 


###### GET : $password ######
    function getPassword(){
        return $this->password; 
     }
###### End GET : $password ###### 


 ###### SET : $code ######
    function setCode($code){
        $this->code = $code; 
     }
###### End SET : $code ###### 


###### GET : $code ######
    function getCode(){
        return $this->code; 
     }
###### End GET : $code ###### 


 ###### SET : $name ######
    function setName($name){
        $this->name = $name; 
     }
###### End SET : $name ###### 


###### GET : $name ######
    function getName(){
        return $this->name; 
     }
###### End GET : $name ###### 


 ###### SET : $lastname ######
    function setLastname($lastname){
        $this->lastname = $lastname; 
     }
###### End SET : $lastname ###### 


###### GET : $lastname ######
    function getLastname(){
        return $this->lastname; 
     }
###### End GET : $lastname ###### 


 ###### SET : $address ######
    function setAddress($address){
        $this->address = $address; 
     }
###### End SET : $address ###### 


###### GET : $address ######
    function getAddress(){
        return $this->address; 
     }
###### End GET : $address ###### 


 ###### SET : $tel ######
    function setTel($tel){
        $this->tel = $tel; 
     }
###### End SET : $tel ###### 


###### GET : $tel ######
    function getTel(){
        return $this->tel; 
     }
###### End GET : $tel ###### 


 ###### SET : $status ######
    function setStatus($status){
        $this->status = $status; 
     }
###### End SET : $status ###### 


###### GET : $status ######
    function getStatus(){
        return $this->status; 
     }
###### End GET : $status ###### 

function login()
 {
   $this -> db -> select('*');  						###########
   $this -> db -> from('people'); 						 ########### เช็คข้อมูลใน DB 
   $this -> db -> where('username', $this->getUsername()); ###########
   $this -> db -> where('password', md5($this->getPassword())); ###########
   $this -> db -> limit(1); ############## ตำกัดให้คืนค่าแค่ record เดียว

   $query = $this -> db -> get(); ##############  สั่งดึงข้อมูลตามเงื่อนไข

   if($query -> num_rows() == 1)  ############  เมื่อมีข้อมูล 1 record 
   {
     return $query->result(); ############# ส่งค้าที่ดึงได้กลับ
   }
   else ########### เมื่อไม่ตรงตามเงื่อนไข
   {
		  return FALSE;  ############# ส่งค้า FALSE กลับ

   }
 }
 
 function addPeople(){
	 $data = array(
	 	'username' => $this->getUsername(),
		'password' => MD5($this->getPassword()),
		'code' => $this->getCode(),
		'name' => $this->getName(),
		'lastname' => $this->getLastname(),
		'address' => $this->getAddress(),
		'tel' => $this->getTel(),
		'status' => $this->getStatus()
	 );
	 
     $this->db->where('code',$this->getCode());
	 $this->db->or_where('username',$this->getUsername());
     $q = $this->db->get('people');
     if($q->num_rows == 0)
     {
        $insert =  $this->db->insert('people',$data);
     }
     else
     {
        return false;
     }
	return $insert;
 }
 


}
?>