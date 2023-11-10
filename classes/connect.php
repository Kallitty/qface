<?php

class Database {

   private $host="localhost";
   private $username="root";
   private $password="";
   private $db="qface_db";

 function connect(){
$connection=mysqli_connect($this->host, $this->username, $this->password, $this->db);
return $connection;
 }
 function read($query){
  $conn= $this->connect(); 
  $result=mysqli_query($conn, $query);
  if (!$result){
     return false;
    }else{
     $data=false;
     while($row=mysqli_fetch_assoc($result))
{
$data[]= $row;
return $data;
}
    }
 }
 function save($query){
   $conn= $this->connect();
    $result= mysqli_query($conn, $query);
    if (!$result){
     return false;
    }else{
     return true;
    }
 }
}

//online resource
// $DB= new Database();
// $query="select * from users";
// $data= $DB->read($query);


// $success = $DB->save($query);

// if ($success) {
//     echo "Data saved successfully!";
// } else {
//     echo "Error saving data.";
// }

?> 