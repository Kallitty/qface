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
      <input
        type="text"
        id="text"
        name="Surname"
        placeholder="Surname"
      /><br />
      <input
        type="text"
        id="text"
        name="Middle name"
        placeholder="Middle name"
      /><br />
      <input
        type="text"
        id="text"
        name="First name"
        placeholder="First name"
      /><br />
      <br />
     <span style="font-weight: normal;"> Gender:</span><br />
   <select id="text">
    <option value="Male">Male</option>
    <option value="Female">Female</option>
   </select><br />
      <br />
      <input
        type="text"
        id="text"
        name="Email address or phone number"
        placeholder="Email adress or phone number"
      /><br />
      <input type="password" id="text" name="Password" placeholder="Password" />
      <br />
      <input type="password" id="text" name="Password" placeholder="Re-type password" />
      <br /><br />
      <input type="submit" id="submit" value="Sign up" /><br /><br />
      <br /><br />
    </div>
  </body>
</html>
