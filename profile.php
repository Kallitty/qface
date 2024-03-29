<?php 
session_start();

$_SESSION['qface_userid']=="";

include_once("classes/connect.php");
include_once("classes/login.php");
include("classes/user.php");
include("classes/post.php");
include("classes/image.php");

$login = new Login();
$user_data = $login->check_login($_SESSION['qface_userid']);

//posting starts here
  if($_SERVER['REQUEST_METHOD']=="POST"){
$post = new Post();
$id =$_SESSION['qface_userid'];
$result= $post->create_post($id, $_POST, $_FILES );

if($result==""){
  header("Location:profile.php");
  die;

}else{
   echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo $result;
   echo"</div>";
}

  }

  //collecting posts
  $post = new Post();
$id =$_SESSION['qface_userid'];
$posts= $post->get_posts($id);

//collecting friends
  $user = new User();
$id =$_SESSION['qface_userid'];
$friends= $user->get_friends($id);

$image_class = new Image();
?>

<!DOCTYPE html>
<html>
 <head>
  <title>Qface | Profile</title>
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
    #profile_pic{
     width: 150px;
     margin-top: -200px;
     border-radius:50%;
     border: solid 2px white;
    }
    #menu_button{
     width: 100px;
     display: inline-block;
     margin: 2px;
    }
    #friends_img{
     width: 75px;
     float: left;
     margin: 4px;
    }
    #friends_bar{
     background-color:white;
     margin-top: 20px;
     min-height: 400px;
     padding: 8px;
     color:#aaa
     }
      #friends{
      clear:both;
      padding: 2px;
      font-size: 12px;
      font-weight:bold;
      color:#405d9b;
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

 <?php 
 include("header.php");
 ?>
 <!-- Cover area-->
 <div  style="width:800px; margin:auto;  min-height:  400px;">
<div style="background-color: white; text-align: center; color:#405d9b;">

<?php
$image ="images/cover_image.jpg";
if (file_exists($user_data['cover_image']))
{
  $image=$image_class->get_thumb_cover($user_data['cover_image']);
} 
?>

<img src="<?php echo $image ?>" style="width: 100%;">
<span style="font-size: 11px;">
<?php
$image ="images/user_male.jpg";
if($user_data['gender']== "Female")
{
  $image = "images/user_female.jpg";
}
if (file_exists($user_data['profile_image'])){
  $image=$image_class->get_thumb_profile($user_data['profile_image']);
} 
?>

<img src="<?php echo $image ?>" id="profile_pic">
<br/>

<a href="change_profile_image.php?change=profile" style="text-decoration: none;"> Change Profile Image </a>|
<a href="change_profile_image.php?change=cover" style="text-decoration: none;"> Change Cover Image <br/> </a>
</span>`
<?php
echo $user_data['first_name'] .' '. $user_data['surname'];
?>
<br/>
<a href="index.php" style="text-decoration: none;">  <div id="menu_button" >Timeline</div>  </a>
<div id="menu_button">About</div>  
<div  id="menu_button">Friends </div>
<div  id="menu_button">Photos </div>
<div  id="menu_button">Settings</div>
</div>
<!-- The 2 columns -->
<div style="display:flex;">

<!-- Friends area -->
<div style=" min-height: 500px; flex:1;">
<div id="friends_bar">
 Friends<br/>
 <?php
if ($friends){
foreach($friends as $FRIEND_ROW){
  include('user.php');
  }
}

?>
<div id="friends">
  <img id="friends_img" src="user4.jpg">
  <br/>
  Kallie Estate<br/>
</div>
</div>
</div>
<!-- Posts area-->
<div style=" min-height: 500px; flex:2.6"; padding: 20px;>
<div style="border: 1px solid #aaa; padding: 10px; background-color:white;">
<form method="post" enctype="multipart/form-data">
<textarea name="post" placeholder="What is on your mind?"></textarea>
<input type="file" name="file">
<input id="post_button" type="submit" name="" value="Post">
<br>
</div>
</form>

<!-- Posts-->
<?php
if ($posts){
foreach($posts as $ROW){
    $user= new User();
    $ROW_USER= $user->get_user($ROW['userid']);
    // var_dump($ROW_USER); // Check the value of $ROW_USER
 include('post.php');
  }
}

?>

  </div>
</div> <br/><br/>

</div>
</div>
</div>
</body>
</html>