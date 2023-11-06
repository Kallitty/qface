<?php

class Signup{
 private $error="";
 public function evaluate($data){
 foreach ($data as $key=>$value){
  if (empty($value)){
   $this->error= $this->error . $key . "Kindly input field</br>";
  }
 }
 if ($this->error ==""){
// no error
$this->create_user($data);
 }else
 {
  return $this->error;
 }
 }
 public function create_user($data){
  $first_name=$data['first_name'];
  $surname=$data['surname'];
  $middle_name=$data['middle_name'];
  $gender=$data['gender'];
  $email_address_or_phone_number=$data['email_address_or_phone_number'];
  $password=$data['password'];
  //created these, take note
  $url_address=strtolower($first_name) ."." . strtolower($surname);
  $userid=$this->create_userid();

  $query="insert into users(userid, first_name, sur_name, gender, email_address_or_phone_number, password, url_address, middle_name) values('$userid', '$first_name', '$surname', '$gender', '$email_address_or_phone_number', '$password', '$url_address', '$middle_name')";
  echo $query;
  // $DB=new Database();
  // $DB->save($query);
 }
 //userid wahala
 private  function create_userid(){
  $length=rand(4, 19);
  $number ="";
  for ($i=0; $i< $length; $i++){
$new_rand= rand(0,9);
$number = $number . $new_rand;
return $number;
  }
 }
}