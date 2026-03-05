<?php
	require_once('lib/function.php');
	$db = new class_functions();	

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
			<th>first Name</th>
			<th>last name</th>
			<th>email id</th>
			<th>phone no</th>
			<th>reply</th>
		</thead>
		<tbody>
		<?php
			$users_reply = array();
			$users_reply = $db->get_users_reply();

            //print_r($users_data);
		
             

         if(!empty($users_reply))
			{
				$counter = 0;
				foreach($users_reply as $record)
				{
					$res_first_name	    =	$users_reply[$counter]['first_name'];
					$res_last_name 	    = 	$users_reply[$counter]['last_name'];
					$res_email_id	    =	$users_reply[$counter]['email_id'];
					$res_phone_no		=	$users_reply[$counter]['phone_no'];
					$res_reply	        =	$users_reply[$counter]['reply'];
					/*$res_time   	    =	$users_reply[$counter]['time'];
                    $res_date			=	$users_reply[$counter]['date'];*/
					
				?>
				<tr>
					<td><?php echo $res_first_name; ?></td>
					<td><?php echo $res_last_name; ?></td>
					<td><?php echo $res_email_id; ?></td>
					<td><?php echo $res_phone_no; ?></td>
					<td><?php echo $res_reply; ?></td>
					
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


</body>
</html>