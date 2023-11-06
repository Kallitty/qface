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
  $firstname=$data['first_name'];
  $lastname=$data['last_name'];
  $gender=$data['gender'];
  $email=$data['email'];
  $password=$data['password'];
  //created these, take note
  $url_address=strtolower($firstname) ."." . strtolower($lastname);
  $userid=$data['create_userid'];



  $query="insert into users(userid, first_name, last_name, gender, email, password, url_address) values('$userid', '$firstname', '$lastname', '$gender', '$email', '$password', '$url_address')";
  return $query;
  //$DB=new Database();
  //$DB->save($query);
 }
 private  function create_url(){

 }
 private  function create_userid(){
  $length=rand(4, 19);
  $number ="";
  for ($i=1; $i< $length; $i++){
$new_rand= rand(0,9);
$number = $number . $new_rand;
return $number;
  }
 }
}