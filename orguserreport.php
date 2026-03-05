<?php
	require_once('lib/function.php');
	$db = new class_functions();	
	
?>




<html>
<head>
	<!--Import/Include CSS files-->
	<title>orguser report </title>
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
			<th>sr No</th>
			<th>Full Name</th>
			<th>Username</th>
			<th>email id</th>
			<th>phone number</th>
			<th>password</th>
			<th>gender</th>
		</thead>
		<tbody>
		<?php
			$orgusers_data = array();
			$orgusers_data = $db->get_orusers_data();

            //print_r($orgusers_data);
            if(!empty($orusers_data))
			{
				$counter = 0;
				foreach($orusers_data as $record)
				{
					$res_id			    =	$orusers_data[$counter]['farmer_id'];
					$res_full_name 	    = 	$orusers_data[$counter]['full_name'];
                    $res_username       =   $orusers_data[$counter]['username'];
                    $res_email_id       =   $orusers_data[$counter]['email_id'];
					$res_mob_no		    =	$orusers_data[$counter]['mobile_no'];
                    $res_password       =   $orusers_data[$counter]['password'];
                    $res_gender     	=	$orusers_data[$counter]['res_gender'];
                    $res_time			=	$orusers_data[$counter]['res_time'];
					$res_date			=	$orusers_data[$counter]['res_date'];
					
                ?>
				<tr>
					<td><?php echo $counter+1; ?></td>
					<td><?php echo $res_full_name; ?></td>
                    <td><?php echo $res_username; ?></td>
                    <td><?php echo $res_email_id; ?></td>
					<td><?php echo $res_mob_no; ?></td>
                    <td><?php echo $res_password; ?></td>
		            <td><?php echo $res_gender; ?></td>
                    <td><?php echo $res_time; ?></td>
					<td><?php echo $res_date; ?></td>
					
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