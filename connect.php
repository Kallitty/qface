<?php

$host="localhost";
$username="root";
$password="";
$db="qface_db";

$connection=mysqli_connect($host, $username,$password, $db);
$first_name="Kangaroo";
$last_name="Peters";
$query= "insert into users(first_name,last_name) values('$first_name', '$last_name')";
mysqli_query($connection, $query);

?> 