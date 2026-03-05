<?php
session_start();
error_reporting(0);
include('includes/checklogin.php');
check_login();
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
                 echo "<script type='text/javascript'> document.location ='index1.php'; </script>";      
             } else
             { 
                echo "<script>
                alert('Your account was disabled Approach Admin');document.location ='index1.php';
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AGRICULTURE MARKET</title>

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

<div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/markets-city-food-vegetables-wallpaper-preview1.jpg"  height="60%" width="10%" class="d-block w-100" alt="..."/>
      <div class="carousel-caption d-none d-md-block">
        <h1 class="page-heading fruite fruite1">AGRI MARKET</h1>
      </div>
    </div>
	</div>
	
	<!--agri market-->
	
	<section id="about-section">
            <!-- about left  -->
            <div class="about-left cstmh1p2 ">
               
				<h1 style="color:#e74d06"><b>Welcome to Agricultural-Market</b></h1>
                <p>Buy and sell your Agric produce online (Buyers meet Farmers) – Sell your<br/> produce directly to buyers without middlemen and make more money from your farm produce.<br/>
				It’s evident that India has one of the largest agricultural markets around the <br/>world, which is why it becomes important to have a service, which can connect <br/>the farmers all over the country. This would help them in maximizing their <br/>profits by selling their farm produce at a better price by <br/>selling locally or where farmer get maximum price. The service is free for now
</p>
				
            </div>

            <!-- about right  -->
                        <div class="about-right">
			
             
                <img src="images/Screenshot 2023-07-15 181248.png" alt="About Img" class="imgcstm41">
				
</div>
        </section>
		
		<div style="background-color:#f2f2f2"><br><br><br>
		<center><h1 class="cstmh5" >Buy and Sell Categories</h1></center><br>
		<center><h5>Here you can Buy or Sell or Advertise your agriculture produce online</h5></center><br/><br/>
		
		<div class="container text-center cstmrowm" style="text-align:center; align-item:center;">
		  <div class="row ">
		  

		  <div class="col col-md-2 " style="margin-left:100px" onclick="location.href='Agriculturemarket.php#Products_scroll'">
     <img src="images/buy2.png" alt="About Img" class="cstmproductc"><br/><br/>
	  <h4 class="cstmproducth1 cstmproducth123"> BUY</h4> <br/>
	   </div>
	  <div class="col col-md-2 " style="margin-left:100px">
     <a href="product2fruite.php"><img src="images/sell4.png" alt="About Img" class="cstmproductc"></a> <br/><br/>
	  <h4 class="cstmproducth1 cstmproducth123"> SELL</h4> <br/>
	   </div>
	   <div class="col col-md-2 " style="margin-left:100px">
     <a href="Histroy.php"><img src="images/history.png" alt="About Img" class="cstmproductc"></a> <br/><br/>
	  <h4 class="cstmproducth1 cstmproducth123"> HISTORY</h4> <br/>
	   </div>
	</div>
	</div><br><br><br>
	</div>


		
		
		<div class="container text-center cstmrowm" id="Products_scroll" style="text-align:center; align-item:center;">
        <br><br><br><br><br>
  <div class="row ">
    <div class="col col-md-2 ">
     <a href="product1vegetable.php?value=Vegetables" name="Vegetables" id="Vegetables" ><img src="images/vege.png" alt="About Img" class="cstmproduct"></a> <br/><br/>
	  <h4 class="cstmproducth1 cstmproducth123"> Vegetables</h4> <br/>
    </div>
    <div class="col col-md-2">
	<br/><br/><br/><br/>
      <a href="product1vegetable.php?value=Fruits"> <img src="images/fruits.png" alt="About Img" class="cstmproduct"> </a> <br/><br/>
	<h4 class="cstmproducth1">Fruits</h4> <br/>
	  <a href="product1vegetable.php?value=Major Crops">  <img src="images/OIP (60).jpg" alt="About Img" class="cstmproduct"></a>  <br/><br/>
	  <h4 class="cstmproducth1">Major Crops</h4><br/> 
    </div>
	<div class="col col-md-2"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <a href="product1vegetable.php?value=Flower">  <img src="images/flower.png" alt="About Img" class="cstmproduct"></a>  <br/><br/>
	 <h4 class="cstmproducth1">Flower</h4><br/>
	 
    </div>
	<div class="col col-md-2">
	<br/><br/><br/><br/>
	  <a href="product1vegetable.php?value=Seeds"><img src="images/seeds.png" alt="About Img" class="cstmproduct"></a>  <br/><br/>
	  <h4 class="cstmproducth1">Seeds</h4> <br/>
		
	  <a href="product1vegetable.php?value=Agricultural Equipment"><img src="images/Screenshot 2023-07-18 081533.PNG" alt="About Img" class="cstmproduct cstmtempproduct"></a>  <br/><br/>
	<h4 class="cstmproducth1">Agricultural Equipment</h4>
    </div>
    <div class="col col-md-2">

	  <a href="product1vegetable.php?value=fertilizer"><img src="images/fertiliser (1).png" alt="About Img" class="cstmproduct"></a>  <br/><br/>
	  <h4 class="cstmproducth1">Fertilizer</h4>
    </div>
	
  </div>
</div><br/><br/><br/><br/>

		<center><h1 class="cstmh6">How it Works</h1></center>
		<center><h5>Farmers can sell all products through Agriiculture Market.</h5></center><br/><br/>
		
		
		



<div class="container text-center">
  <div class="row">
    <div class="col col-md-6">
     <img src="images/image-10-1024x536.png" alt="About Img" class="imgc4">
    </div>
    <div class="col col-md-6">
     <img src="images/Screenshot 2023-07-17 122117.png" alt="About Img" class="imgc5">
    </div>
  </div>
  </div><br/><br/>
  
  
  
  <center><a href="registration.php" class="organicreslink1">Register now >></a></center><br/><br/>
  
  




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
	