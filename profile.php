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
</style>
 <body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  background-color: #d0d8e4;">

 <!-- Top bar-->
<div id="blue_bar">
 <div style="width:800px; margin:auto; font: size 40px;">
  Qface &nbsp;
  <input type="text" id="search_box" placeholder="Search for people">
  <img src="selfie.jpg" style="width: 60px; float:right;">
 </div>
</div>
 <!-- Cover area-->
 <div  style="width:800px; margin:auto;  min-height:  400px;">
<div style="background-color: white; text-align: center; color:#405d9b;">
<img src="mountain.jpg" style="width: 100%;">
<img src="selfie.jpg" id="profile_pic">
<br/>
Catherine Lawson
<br/>
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
 <div id="friends">
  <img id="friends_img" src="user1.jpg">
  <br/>
  Josh Kamrudeen<br/>
</div>
<div id="friends">
  <img id="friends_img" src="user4.jpg">
  <br/>
  Kallie Estate<br/>
</div>
<div id="friends">
  <img id="friends_img" src="user3.jpg">
  <br/>
  Peters Kangaroo<br/>
</div><div id="friends">
  <img id="friends_img" src="user2.jpg">
  <br/>
  Bush George<br/>
</div>

</div>
</div>
<!-- Posts area-->
<div style=" min-height: 500px; flex:2.6"; padding: 20px;>
<div style="border: 1px solid #aaa; padding: 10px; background-color:white;">
<textarea placeholder="What is on your mind?"></textarea>
<input id="post_button" type="submit" name="" value="Post">
<br>
</div>
</div>

</div>
</div>

 </div>
</body>
</html>