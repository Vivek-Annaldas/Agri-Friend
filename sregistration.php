<?php

    //Include the function file
      require_once('lib/function.php');
      $db = new class_functions();

      if(isset($_POST['submit_btn']))
	{
		 $var_sfull_name 	  = 	$_POST['full_name'];	
     $var_saddress      =   $_POST['address'];
     $var_semail_id     =   $_POST['email_id'];
		 $var_ophone_number = 	$_POST['phone_number'];
     $var_address		    =	  $_POST['address'];
		 $var_city  		    = 	$_POST['city'];
		 $var_gender 		    = 	$_POST['gender'];
  }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>sregistration </title>
    <link rel="stylesheet"  href="css/schemestyle.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">scheme Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">address</span>
            <input type="text" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required>
          </div>
          <label>bank passbook</label>
	         <input type="file" class="input_box" name="picture" required/>
           <label>aadhar card</label>
	         <input type="file" class="input_box" name="picture" required/>
           <label>farm document</label>
	         <input type="file" class="input_box" name="picture" required/>
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
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>