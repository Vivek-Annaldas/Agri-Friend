<?php @include("includes/head.php");?>
<?php
include('includes/checklogin.php');
 @include("includes/head.php");
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['login']))
{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $sql ="SELECT * FROM tbladmin WHERE UserName=:username and Password=:password";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':username', $username, PDO::PARAM_STR);
    $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
    {
        foreach ($results as $result) 
        {
            $_SESSION['odmsaid']=$result->ID;
            $_SESSION['login']=$result->username;
            $_SESSION['names']=$result->FirstName;
            $_SESSION['permission']=$result->AdminName;
            $_SESSION['companyname']=$result->CompanyName;
            $get=$result->Status;
        }
        $aa= $_SESSION['odmsaid'];
        $sql="SELECT * from tbladmin  where ID=:aa";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':aa',$aa,PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
            foreach($results as $row)
            {            
                if($row->Status=="1")
                { 
                 echo "<script type='text/javascript'> document.location ='index.php'; </script>";      
             } else
             { 
                echo "<script>
                alert('Your account was disabled Approach Admin');document.location ='index.php';
                </script>";
            }
        } 
    } 
} else{
    echo "<script>alert('Invalid Details');</script>";
}
}
?>	
<?php
            $aid=$_SESSION['odmsaid'];
            $sql="SELECT * from  tbladmin where ID=:aid";
            $query = $dbh -> prepare($sql);
            $query->bindParam(':aid',$aid,PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetchAll(PDO::FETCH_OBJ);
            if($query->rowCount() > 0)
            { 
                foreach($results as $row)
                {
                   
                }
            } ?> 
<html>
<head lang="en">
    
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>agrifriend</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/astyle.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


	  
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
	  <link rel="stylesheet" type="text/css" href="css/style.css"/>
	  
	  
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	  <script type="text/javascript" src="js/bootstrap.js"></script>
	  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	  
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	 
</head>
<body class="main-layout " >
  
 <header>
        <!-- header inner -->
        <header>
        <!-- header inner -->
        <div class="header" Style="margin-top: 0%; ">

            <div class="container" >
            <div class="row">
                    
                    <div class="full">
                        <div class="center-desk" >
                            <div class="logo" style="margin-left:10px; ">
                                <a href="product1vegetable.php"><img src="images/Agrifriend-1 (2)1 (2).png" alt="index.html"></a>
                            </div>
                        </div>
                        
                        <div class="location_icon_bottum_tt">
                        <ul Style=" margin-bottom: 0%; margin-top: 0%; height:0%; margin-left:100px; ">
                            <li style="margin-left:110px; " ><img src="icon/loc1.png" />India</li>
                            <li><img src="icon/email1.png" />agrifriend69@gmail.com</li>
                            <li><img src="icon/call1.png" />+91 7385610493</li>
                        </ul>
                        </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-md-12 location_icon_bottum">
                       <div class="row">
                            <div class="col-md-8 ">
                                <div class="menu-area">
                                    <div class="limit-box">
                                        <nav class="main-menu">
                                            <ul class="menu-area-main">
                                                <li class="active"> <a href="index.php">Home</a> </li>
                                                <li> <a href="about-us1.php">About Us</a> </li>
                                                <li><a href="contact-us.php">Contact Us</a></li>
                                                <?php if($row->AdminName=="Admin") { ?>                              
                                                <li><a href="Admin.php">Dashboard</a></li>
                                                <?php } ?>
                                                <?php if($row->AdminName=="User") { ?>                              
                                                <li><a href="Admin.php">Profile</a></li>
                                                <?php } ?>
                                                <li><a href="Agriculturemarket.php">Agrimarket</a></li>
												
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                            </div>
							 <!-- log in button pending -->
	

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
