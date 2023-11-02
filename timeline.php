<!DOCTYPE html>
<html>
 <head>
  <title>Qface | Timeline</title>
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
     margin-top: 20px;
     min-height: 400px;
     padding: 8px;
     color:#405d9b;
     text-align:center;
     font-size:20px;
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
<br/><br/>
</div>
<!-- The 2 columns -->
<div style="display:flex;">
<!-- Friends area -->
<div style=" min-height: 500px; flex:1;">
<div id="friends_bar">
<img src="selfie.jpg" id="profile_pic"><br/>
Catherine Lawson
</div>
</div>
<!-- Posts area-->

<div style=" min-height: 500px; flex:2.6"; padding: 20px;>
<div style="border: 1px solid #aaa; padding: 10px; background-color:white;">

<textarea placeholder="What is on your mind?"></textarea>
<input id="post_button" type="submit" name="" value="Post">
<br>
</div>


<!-- Posts-->
<div  id="post_bar">
  <!-- Post 1-->
  <div id="post">
    <div>
      <img src="user1.jpg" style="width:75px; margin-right: 4px; flex:1; "; />
  </div>
<div style="flex:5;">

<div style="font-weight: bold; color:#405d9b;">
  Josh Kamrudeen
</div>
   A customer is trying to make a transfer of 5m using the app,
It was set up today (app and soft token), it keeps saying token authentication failed and it’s really urgent he makes the transfer.<br/><br/>
<a href="">Like  </a> . <a href="">Comment  </a> . <span style="color:#999;">November 1 2023</span>
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


  </div>
</div> <br/><br/>


</div>
</div>
</div>
</body>
</html>