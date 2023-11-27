<?php 
session_start();

$_SESSION['qface_userid']=="";

include_once("classes/connect.php");
include_once("classes/login.php");
include("classes/user.php");
include("classes/post.php");
$login = new Login();
$user_data=$login->check_login($_SESSION['qface_userid']);

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
   
    #menu_button{
     width: 100px;
     display: inline-block;
     margin: 2px;
    }
   
     #post_button{
      float: right;
      background-color: #405d9b;
      border: none;
      color: white;
      border-radius: 4px;
      padding: 2px;
      font-size: 14px;
      width:40px ;
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
<br/><br/>
</div>
<!-- The 2 columns -->
<div style="display:flex;">
<!-- Friends area -->
<div style=" min-height: 500px; flex:1;">
<div id="friends_bar">
<img src="selfie.jpg" id="profile_pic"><br/>
 <a href="profile.php" style="text-decoration: none; color:#405d9b;"> <?php echo $user_data['first_name'] . " " . $user_data['surname'] ?> &nbsp; </a> 
</div>
</div>




</div>


  </div>
</div> <br/><br/>


</div>
</div>
</div>
</body>
</html>