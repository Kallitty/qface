<?php

include_once("classes/connect.php");
include_once("classes/signup.php");

      $first_name="";
      $middle_name="";
      $surname="";
      $gender="";
      $email_address_or_phone_number="";

if ($_SERVER['REQUEST_METHOD']=='POST'){
  $signup = new Signup();
  $result=$signup->evaluate($_POST);
  if($result !=""){
    echo"<div style='text-align:center; font-size: 12px; color:white; background-color:grey;'>";
   echo "The following errors occured: <br><br>";
   echo $result;
   echo"</div>";
  }else{
    header("Location:login.php");
    die;
  }
      $first_name=$_POST['first_name'];
      $middle_name=$_POST['middle_name'];
      $surname=$_POST['surname'];
      $gender=$_POST['gender'];
      $email_address_or_phone_number=$_POST['email_address_or_phone_number'];

}
      
?>

<html>
  <head>
    <title>Qface | Signup</title>
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
      float: inline-start;
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
      <div style="font-size: 40px">Qface</div><br />
      <div id="signup_button">Log in</div>
    </div>
    <div id="login_bar">
      Sign up to Qface <br /><br />

      <form method="post" action="">
          <input
            value='<?php echo $surname?>'
            type="text"
            id="text"
            name="surname"
            placeholder="Surname"
          /><br />
          <input
          value='<?php echo $middle_name?>'
            type="text"
            id="text"
            name="middle_name"
            placeholder="Middle name"
          /><br />
          <input
          value='<?php echo $first_name?>'
            type="text"
            id="text"
            name="first_name"
            placeholder="First name"
          /><br />
          <br />
        <span style="font-weight: normal;"> Gender:</span><br />
       <select  id="text" name="gender">
       
        <option> <?php echo $gender?></option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
       </select><br />
          <br />
          <input
          value='<?php echo $email_address_or_phone_number?>'
            type="text"
            id="text"
            name="email_address_or_phone_number"
            placeholder="Email address or phone number"
          />  <br />
          <input type="password" id="text" name="password" placeholder="Password" />
          <br />
          <input type="password" id="text" name="password2" placeholder="Re-type password" />
          <br /><br />
          <input type="submit" id="submit" value="Sign up" /><br /><br />
          <br /><br />

      </form>
    </div>
  </body>
</html>
