<?php
	require_once('lib/function.php');
	$db = new class_functions();	


  if(isset($_GET['delete_id']))
	{
		$del_id	=	$_GET['delete_id'];
		
		$db->delete_user_data($del_id);
		
	}

?>



<html>
<head>
	<!--Import/Include CSS files-->
	<title>user report </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />

	<script type="text/javastcript" src="js/bootstrap.js"></script>
	<script type="text/javastcript" src="js/bootstrap.bundle.js"></script>
</head>
<body>

	<h1>Users Report</h1>
	
	
	<table border="1" cellspacing="0" cellpadding="5">
		<thead>
			<th>Sr No</th>
			<th>Full Name</th>
			<th>Mobile No</th>
			<th>DOB</th>
			<th>DOB Time</th>
			<th>address</th>
            <th>City</th>
			<th>Profile</th>
			<th>bank</th>
			<th>farm</th>
            <th>Gender</th>
            <th>Time</th>
			<th>Date</th>
            <th>edit</th>
            <th>delete</th>
		</thead>
		<tbody>
		<?php
			$users_data = array();
			$users_data = $db->get_users_data();

            //print_r($users_data);
		
             

         if(!empty($users_data))
			{
				$counter = 0;
				foreach($users_data as $record)
				{
					$res_id			    =	$users_data[$counter]['id'];
					$res_full_name 	    = 	$users_data[$counter]['full_name'];
					$res_mob_no		    =	$users_data[$counter]['res_mobile_no'];
					$res_dob		    =	$users_data[$counter]['res_dob'];
					$res_dob_time	    =	$users_data[$counter]['res_dob_time'];
					$res_address   	    =	$users_data[$counter]['res_address'];
                    $res_city			=	$users_data[$counter]['res_city'];
					$res_profile_photo	=	$users_data[$counter]['res_profile_photo'];
					$res_bank_passbook	=	$users_data[$counter]['res_bank_passbook'];
					$res_farm_document	=	$users_data[$counter]['res_farm_document'];
                    $res_gender     	=	$users_data[$counter]['res_gender'];
                    $res_time			=	$users_data[$counter]['res_time'];
					$res_date			=	$users_data[$counter]['res_date'];
					
				?>
				<tr>
					<td><?php echo $counter+1; ?></td>
					<td><?php echo $res_full_name; ?></td>
					<td><?php echo $res_mob_no; ?></td>
					<td><?php echo $res_dob; ?></td>
					<td><?php echo $res_dob_time; ?></td>
					<td><?php echo $res_address; ?></td>
                    <td><?php echo $res_city; ?></td>
					<td><?php echo $res_profile_photo; ?></td>
					<td><?php echo $res_bank_passbook; ?></td>
					<td><?php echo $res_farm_document; ?></td>
                    <td><?php echo $res_gender; ?></td>
                    <td><?php echo $res_time; ?></td>
					<td><?php echo $res_date; ?></td>

                    
                    <td>
					     <a href="editreport.php?edit_id=<?php echo $res_id; ?>">Edit</a>
				    </td>
				
				    <td>
					     <a href="report.php?delete_id=<?php echo $res_id; ?>">Delete</a>
				    </td>
					
				</tr>
				
				<?php				
					
					$counter++;
					
				}
			}
			else
			{
				echo "No data found";
			}
            ?>

			
		 </tbody>
	</table>
	<br/>
	<a href="contact-usreport.php"><h2 style="color:black;">Contact us report<h2></a>


</body>
</html>