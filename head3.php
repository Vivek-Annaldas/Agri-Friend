<?php
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
                 echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";      
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>vegetable Products</title>

	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
	  <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
	  <link rel="stylesheet" type="text/css" href="css/style.css"/>
	  <link rel="stylesheet" type="text/css" href="css/astyle.css"/>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
	  <script type="text/javascript" src="js/bootstrap.js"></script>
	  <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
	  
	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body class="background-content">
<header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
            <div class="row">
                    
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="product1vegetable.php"><img src="images/Agrifriend-1 (2)1 (2).png" alt="index.html"></a>
                            </div>
                        </div>
                        
                        <div class="location_icon_bottum_tt">
                        <ul>
                            <li Style="margin-left: 10%; height:0%; "><img src="icon/loc1.png" />India</li>
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
	
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
     <div class="dropdown cstm-dropdown" style="margin-top:12px; margin-left:70px;">
     <?php

        if($_SESSION["btn_hide"]!=1)
        {
            
     ?>
    <a href="index1.php">
     <button type="button" class="btn btn-primary" name="submit_btn" id="log_btn">Login</button>
    </a>
     <a href="newuser_form1.php">
     <button type="button" class="btn btn-primary" name="submit_btn" id="sign_btn">Sign Up</button>
            </a>
<?php

        }
        else{
            ?>
            <ul >
      <li class="">
        <?php
        $aid=$_SESSION['odmsaid'];
        $sql="SELECT * from  tbladmin where ID=:aid";
        $query = $dbh -> prepare($sql);
        $query->bindParam(':aid',$aid,PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
          foreach($results as $row)
          { 
            ?>
            <a class="" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false" >
              <div class="nav-profile-img" style="border-radius: 50%;;" >
                <?php 
                if($row->Photo=="avatar15.jpg")
                { 
                  ?>
                  <img style="height:10px;  margin-top:0px;border-radius: 50%; " class="img-avatar" src="assets/img/avatars/avatar15.jpg" alt="">
                  <?php 
                } else { 
                  ?>
                  <img style="height:40px; width:50px; margin-bottom:0px;" class="img-avatar" src="profileimages/<?php  echo $row->Photo;?>" alt=""> 
                  <?php 
                } ?>
              
           
                <p class="mb-0 text-white" style="float:right; margin-top:10px; margin-bottom:0px;"><?php  echo $row->FirstName;?> <?php  echo $row->LastName;?></p>
                </div>
            </a>
            <?php
          }
        } ?>
<div style="float:right;">
        <div class="dropdown-menu " aria-labelledby=""  style="float:right;">
          <a class="dropdown-item" href="Admin.php" >
            <i class="mdi mdi-account mr-2 text-success"></i> Profile </a>
            <div class="dropdown-divider"></div>
            
            <a class="dropdown-item" href="logout.php">
              <i class="mdi mdi-logout mr-2 text-primary"></i> Signout </a>
            </div>
          </li>
        </ul>
        
      

            <?php
        }

?>

                       
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>