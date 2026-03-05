<?php

    //Include the function file
      require_once('lib/function.php');
      $db = new class_functions();

if(isset($_POST['register_btn']))
	{
		 echo $var_ofull_name 	  = 	$_POST['full_name'];	
     echo $var_ousername     =   $_POST['username'];
     echo $var_oemail_id     =   $_POST['email_id'];
		 echo $var_ophone_number = 	$_POST['phone_number'];
	   echo $var_opassword      =  $_POST['password'];
     echo $var_ogender        =  $_POST['gender'];


     $db->create_oruser_account($var_ofull_name,$var_ousername,$var_oemail_id, $var_ophone_number,$var_opassword,$var_ogender );
     
   }
 ?>



<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> orgregistration </title>
    <link rel="stylesheet" href="css/sstyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="registration1.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" name="full_name" required>
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" name="username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name="email_id" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" name="phone_number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" name="password" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="register_btn" value="create my account">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
