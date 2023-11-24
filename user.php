<div id="friends">
 <?php
$image="images/user_male.jpg";
if($FRIEND_ROW['gender']=="Female"){
$image ="images/user_female.jpg";
}else
?>
  <img id="friends_img" src="<?php echo $image ?>">
  <br/>
  <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['surname'] ?>
  <br/>
</div>