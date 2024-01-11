<?php 
session_start();

$_SESSION['qface_userid']== "";

include_once("classes/connect.php");
include_once("classes/login.php");
include("classes/user.php");
include("classes/post.php");
include("classes/image.php");

$login = new Login();
$user_data=$login->check_login($_SESSION['qface_userid']);


if($_SERVER['REQUEST_METHOD']=="POST"){

// $error ="";
if (isset($_FILES['file'] ['name'])  && $_FILES['file'] ['name']!=""){
  if($_FILES['file'] ['type'] =="image/jpeg"){
      $allowed_size= (1024* 1024*3) ;
    if($_FILES['file'] ['size'] < $allowed_size){
        //everything is fine
        $folder="uploads/" . $user_data['userid'] ."/";

        //create folder
        if(!file_exists($folder))
        {
          mkdir($folder, 0777, true);
        }
          $image = new Image;
        $filename= $folder . $image->generate_filename(15) . ".jpg";
        move_uploaded_file($_FILES['file'] ['tmp_name'], $filename);

        $change="profile";
          
          //check for mode of accepting images
          if(isset($_GET['change'])){
            $change=$_GET['change'];
          }
      

          if ($change=="cover"){
            if(file_exists($user_data['cover_image'])){
             unlink ($user_data['cover_image']); 
            }

            $image->crop_image($filename, $filename, 1366, 488);
          }else{
            if(file_exists($user_data['profile_image'])){
             unlink ($user_data['profile_image']); 
            }
              $image->crop_image($filename, $filename, 850, 850);
          }
        
        if(file_exists($filename)){
          $userid= $user_data['userid'];
          
          if ($change=='cover'){
            $query="update users set cover_image='$filename' where userid = '$userid' limit 1";
          }else{
            if ($change=='profile'){
            $query="update users set profile_image='$filename' where userid = '$userid' limit 1";
          }else{

          }
        }
          
          $DB =new Database();
          $DB->save($query);

          header("Location:profile.php");
          die;
         
    }else{
  echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo "Only images of 3mb or lower is allowed!";
   echo"</div>";
}

  }else
  echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo "please add a jpeg image type";
   echo"</div>";
}
//added to check for error
if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {

    $filename = "uploads/" . $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $filename);
    if (file_exists($filename)) {
  $userid= $user_data['userid'];
  $query="update users set profile_image='$filename' where userid = '$userid' limit 1";
  $DB =new Database();
  $DB->save($query);

   header("Location:profile.php");
  die;
}  
}else{
  echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo "please add a valid image";
   echo"</div>";
}
}
}
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Qface | Change Profile Image</title>
 </head>
 <style type="text/css"> 
#blue_bar{
height: 60px;
background-color: #405d9b;
color:#d9dfeb;
}
#search_box {
      width: 400px;
      height: 4px;
      border-radius: 4px;
      border: solid 1px #aaa;
      padding: 9px;
      font-size: 10px;
      margin-top: 6px;
      background-image: url(search.png);
      background-repeat: no-repeat;
      background-position: right;
    }
    
     textarea{
      width:100%;
      border:none;
      font-family: Verdana, Geneva, Tahoma, sans-serif;
      font-size: 14px;
      height: 60px;
     }
     #post_button{
      float: right;
      background-color: #405d9b;
      border: none;
      color: white;
      border-radius: 4px;
      padding: 2px;
      font-size: 14px;
      width:50px ;
     }
     #post_bar{
     margin-top: 20px;
      background-color: white;
      padding: 10px;
     }
     #post{
      padding: 4px;
      font-size: 13px;
      display: flex;
      margin-bottom: 20px;
     }
</style>
 <body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  background-color: #d0d8e4;">

 <!-- Top bar-->
<?php 
 include("header.php");
 ?>
 <!-- Cover area-->
 <div  style="width:800px; margin:auto;  min-height:  400px;">
<div style="background-color: white; text-align: center; color:#405d9b;">
<br/>
</div>
<!-- Posts area-->       
<form method="post" enctype="multipart/form-data">
<div style=" min-height: 500px; flex:2.6"; padding: 10px;>
<div style="border: 1px solid #aaa; padding: 10px; background-color:white;">

<input id="" type="file" name="file" value="Change">
<input id="post_button" type="submit" name="submit" value="Change">
<br>
<?php

$change="profile";
          
          //check for mode of accepting images
          if(isset($_GET['change']) && $_GET['change']=="cover"){
            $change="cover";
          }
echo "<img src='i'>"

?>

</div>
</div> <br/><br/>
</form>

</div>
</div>
</div>
</body>
</html>