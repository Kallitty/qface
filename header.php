<!-- Top bar-->
<?php
$corner_image="images/user_male.jpg";
if (isset($user_data))
{
  $corner_image=$user_data['profile_image'];
}
?>
<div id="blue_bar">
 <div style="width:800px; margin:auto; font: size 40px;">
  <a href="index.php" style="text-decoration: none; color:#d0d8e4;"> Qface &nbsp; </a> 
  <input type="text" id="search_box" placeholder="Search for people">
  <a href="profile.php">
  <img src="<?php echo $corner_image ?>" style="width: 60px; float:right;">  <br/>
  </a>
  <a href="logout.php">
    <span style="font: size 11px; float:right; margin: 5px; color:azure; ">Logout</span>
  </a>
  
 </div>
</div>