<?php
session_start();

include_once("classes/connect.php");
include_once("classes/login.php");

  $email_address_or_phone_number="";
  $password="";
    
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $login = new Login();
  $result=$login->evaluate($_POST);
  if($result !=""){
    echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo $result;
   echo"</div>";
  }else{
    header("Location:profile.php");
    die;
  }
      $password=$_POST['password'];
      $email_address_or_phone_number=$_POST['email_address_or_phone_number'];

}
      
?>
<html>
  <head>
    <title>Qface | Log in</title>
  </head>
  <style>
    #blue_background {
      height: 100px;
      background-color: rgb(59, 89, 152);
      color: #d9dfeb;
      padding: 4px;
    }
    #signup_button {
      max-width: 70px;
      background-color: #42b72a;
      border-radius: 4px;
      padding: 4px;
      float: right;
    }
    #login_bar {
      background-color: white;
      width: 800px;
      height: auto;
      margin: auto;
      margin-top: 50px;
      padding: 10px;
      padding-top: 70px;
      text-align: center;
      font-weight: bold;
    }
    #text {
      width: 300px;
      height: 40px;
      border-radius: 4px;
      border: solid 1px #aaa;
      padding: 9px;
      font-size: 15px;
    }
    #submit {
      width: 120px;
      height: 30px;
      border-radius: 4px;
      border: none;
      font-weight: bold;
      background-color: rgb(59, 89, 152);
      color: #ccc;
    }
  </style>
  <body style="font-family: tahoma; background-color: #e9ebee">
    <div id="blue_background">
      <div style="font-size: 40px">Qface</div>
      <div id="signup_button">Sign Up</div>
    </div>
    <div id="login_bar">
      <form method="post">
      Log in to Qface <br /><br />
      <input
          value='<?php echo $email_address_or_phone_number?>'
        type="text"
        id="text"
        name="email_address_or_phone_number"
        placeholder="Email address or phone number"
      /><br />
      <br />
      <input type="password" id="text" name="password" placeholder="Password" />
      <br /><br />
      <input type="submit" id="submit" value="Log in" /><br /><br />
      <br /><br />
      </form>
    </div>
  </body>
</html>
