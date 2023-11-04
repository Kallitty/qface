<?php

$host="localhost";
$username="root";
$password="";
$db="qface_db";

$connection=mysqli_connect($host, $username,$password, $db);

$query= "select * from users";
$result=mysqli_query($connection, $query);

while($row=mysqli_fetch_assoc($result))
{
echo "<pre>";
print_r($row);
echo "</pre>";
}



?> 