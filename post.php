<?php

?>
<div  id="post_bar">
  <!-- Post 1-->
  <div id="post">
    <div>
     <?php
$image="images/user_male.jpg";
if($ROW_USER['gender']=="Female"){
$image ="images/user_female.jpg";
}else
?>
      <img src="<?php echo $image ?>" style="width:75px; margin-right: 4px; flex:1;" />
  </div>
<div style="flex:5;">

<div style="font-weight: bold; color:#405d9b;">
  <?php
echo $ROW_USER['surname'] . " " . $ROW_USER['first_name'];
?>
</div>
<?php
echo $ROW['post']
?>
   <br/><br/>
   <?php
   if(file_exists($ROW['image']))
   {
    $post_image=$image_class->get_thumb_post($ROW['image']);
echo "<img src= '$ROW[post]' style='width:100%;'/>";
   }

?>
   <br/><br/>
<a href="">Like  </a> . <a href="">Comment  </a> . <span style="color:#999;"> 
<?php
echo $ROW['date']
?>
</span>
</div>
</div>

<!-- Post 2-->
  <div id="post">
    <div>
      <img src="user2.jpg" style="width:75px; margin-right: 4px; flex:1; "; />
  </div>
<div style="flex:5;">

<div style="font-weight: bold; color:#405d9b;">
  Bush George
</div>
🔑📖 KEY VERSE: "So we, being many, are one body in Christ, and every one members one of another” (ROMANS 12:5).

     We attach much importance to love, and read lots of meaning to it, most of which are unnecessary. The real object of our love should be towards God first and then to the people around us. It is assumed that we already love ourselves. God, therefore, wants us to direct the remaining love in our hearts to our brethren and other people around us.<br/><br/>
<a href="">Like  </a> . <a href="">Comment  </a> . <span style="color:#999;">November 1 2023</span>
</div>
</div> 