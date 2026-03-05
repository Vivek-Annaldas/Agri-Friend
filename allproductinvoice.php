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
<!DOCTYPE html>
<html>
<head>
<?php @include("includes/head.php");?>
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
<!-- header -->
    
<?php @include("head1.php");?>

   
	<div style="background-color:	#f2f2f2;">
    <br><br>
	
	<?php @include("invoice1.php");?>
	

</div>

  
  
</div>
</div>
<footer class="footer-section footerwidth">
    <div class="container">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Find us</h4>
                            <span>Government polytechnic,solapur</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>7385610493</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>Agrifriend69@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.php"><img src="images/Agrifriend-1 (2)1 (2).png" class="img-fluid" alt="logo"></a>
                        </div>
                        
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/agriGoI?mibextid=ZbWKwL"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="https://twitter.com/AgriGoI?t=Al8fS81OFpyRyfdvFKhtJQ&s=08"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="https://agricoop.nic.in/en/Acc"><i class="fab fa-google-plus-g google-bg"></i></a>	
							
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="index.php">Home</a></li>
							<li><a href="orgo.php">Organic framing</a></li>
                            <li><a href="about-us1.php">about</a></li>
							<li><a href="wheat.php">Major crops</a></li>
                            <li><a href="contact-us.php">Contact us</a></li>
							<li><a href="fruitsvegetables.php">fruit & vegetables</a></li>
                            <li><a href="registration.php">Registration</a></li>
							<li><a href="scheme.php">Government Schemes</a></li>
                            <li><a href="#">Our services</a></li>                            
                            <li><a href="Agriculturemarket.php">Agriculture Market</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new youtube channel, please subscribe...</p>
                        </div>
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-youtube" style="color:red" viewBox="0 0 16 16">
  <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
</svg>
                        <a href="https://youtube.com/@TheAdvanceAgriculture" class="youtubelink"> The Advance Agriculture</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</footer>
</body>
</html>