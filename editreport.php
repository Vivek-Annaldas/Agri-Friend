<?php
     //Include the function file
      require_once('lib/function.php');
      $db = new class_functions();

	if(isset($_GET['edit_id']))
	{
		$res_edit_id	        =	$_GET['edit_id'];
		$_SESSION['edit_id']	=	$res_edit_id;
	}
	
	 $res_edit_id	=	$_SESSION['edit_id'];

if(isset($_POST['submit_btn']))
	{
	     $var_full_name 	= 	$_POST['full_name'];	
		 $var_mobile_number = 	$_POST['mobile_number'];
		 $var_dob 			= 	$_POST['dob'];
		 $var_time 			= 	$_POST['time'];
         $var_address		=	$_POST['address'];
		 $var_city  		= 	$_POST['city'];
         $var_photo  		= 	'-';
         $var_bank  		= 	'-';
         $var_farm  		= 	'-';
		 $var_gender 		= 	$_POST['gender'];

        $db->update_user_account($var_full_name,$var_mobile_number,$var_dob
		,$var_time,$var_address,$var_city,$var_photo,$var_bank,$var_farm ,$var_gender,$res_edit_id);
		
    }


	$users_data	=	array();
	$users_data = $db->get_user_data_from_id($res_edit_id);
	
	if(!empty($users_data))
	{		
		            $res_id			    =	$users_data['id'];
					$res_full_name 	    = 	$users_data['full_name'];
					$res_mob_no		    =	$users_data['res_mobile_no'];
					$res_dob		    =	$users_data['res_dob'];
					$res_dob_time	    =	$users_data['res_dob_time'];
					$res_address   	    =	$users_data['res_address'];
                    $res_city			=	$users_data['res_city'];
					$res_profile_photo	=	$users_data['res_profile_photo'];
					$res_bank_passbook	=	$users_data['res_bank_passbook'];
					$res_farm_document	=	$users_data['res_farm_document'];
                    $res_gender     	=	$users_data['res_gender'];
                    $res_time			=	$users_data['res_time'];
					$res_date			=	$users_data['res_date'];
	}
?> 



<html>
<head>
	<title>edit report</title>

	<link rel="stylesheet" type="text/css" href="css/rstyle.css" />
 	
</head>
<body>
	
	<div class="form_container">
	<center><h1 style="color:rgb(205, 48, 48); font-size:30px;" class="page_heading">Registration</h1></center>
	<br />
	<form action="editreport.php" method="POST">
	<label>Enter Your Full Name:</label>
	<input type="text" class="input_box" name="full_name" placeholder="Enter Full Name" required value=" <?php echo $res_full_name; ?>"/>

	<br />

	<label>Enter Mobile Number</label>
	<input type="number" class="input_box" name="mobile_number" placeholder="Enter mobile number" required value="<?php echo $res_mob_no; ?>"/>
	
	<br />
	
	<label>Enter DOB</label>
	<input type="date" class="input_box" name="dob" value="<?php echo $res_dob; ?>"  placeholder="Enter DOB" required/>
	
	<br />
	
	<label>Enter Time</label>
	<input type="time" class="input_box" name="time" placeholder="Enter Time" value="<?php echo $res_dob_time; ?>" required/>
	
	<br />
	<label>Enter Address</label>
	<textarea name="address" class="input_box" placeholder="Enter address" value="<?php echo $res_address; ?>" required></textarea>

	<br />
	
	<label>Select City</label>
	<select name="city" class="input_box">
		<option value="Select">Select City</option>
		<option value="Solapur" <?php if($res_city=="Solapur"){ ?> selected <?php } ?>>Solapur City</option>
		<option value="Pune" <?php if($res_city=="Pune"){ ?> selected <?php } ?>>Pune</option>
		<option value="latur" <?php if($res_city=="latur"){ ?> selected <?php } ?>>latur</option>
		<option value="sambhajinagar" <?php if($res_city=="Sambhajinagar"){ ?> selected <?php } ?>>sambhajinagar</option>
		<option value="raigad"<?php if($res_city=="raigad"){ ?> selected <?php } ?>>raigad</option>
		<option value="mumbai" <?php if($res_city=="mumbai"){ ?> selected <?php } ?>>mumbai</option>
		<option value="dharashiv" <?php if($res_city=="dharashiv"){ ?> selected <?php } ?>>dharashiv</option>

	</select>
	<br />
	<label>profile photo</label>
	<input type="file" class="input_box" name="profile_photo" />

	
	<br />
	<label>bank passbook</label>
	<input type="file" class="input_box" name="bank_passbook" />

	<br />
	<label>farm document</label>
	<input type="file" class="input_box" name="farm_document" />
	
	<br />
	
	<label>Select Gender</label>
	<input type="radio" name="gender" required value="Male"  <?php if($res_gender=="Male"){ ?> checked <?php } ?> />Male  
	<input type="radio"	name="gender" required value="Female"  <?php if($res_gender=="Female"){ ?> checked <?php } ?> />Female               

	<br />
	
	<input type="submit" name="submit_btn" value="CREATE MY ACCOUNT" />            
	</form>
	</div>
	
</body>
</html>
