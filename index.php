<?php @include("includes/head.php");
session_start();
?>
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
<body class="main-layout ">
    
	<!-- header -->
    <?php @include("head1.php");?>
	
	<section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Agriculture </h1>
                            <span>Services</span>

                            <p>"A helping hand to farming"</p>
							<a class="buynow" href="about-us1.php">About us</a><a class="buynow ggg" onclick="location.href='Agriculturemarket.php#Products_scroll'">Our Product</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="images/agriculture-field-grain-5980.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Agriculture</h1>
                            <span>Services</span>

                            <p>"Best connector with nature"</p><a class="buynow" href="about-us1.php">About us</a><a class="buynow ggg" onclick="location.href='Agriculturemarket.php#Products_scroll'">Our Product</a>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="images/7-3 (1).jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <h1>Agriculture</h1>
                            <span>Services</span>

                            <p>"Live green, Eat green"</p><a class="buynow" href="about-us1.php">About us</a><a class="buynow ggg" onclick="location.href='Agriculturemarket.php#Products_scroll'">Our Product</a>

                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>


  <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
    <!-- end google map js -->
  


  

		<!-- INTRODUCTION -->

				<section id="about-section" >
            <!-- about left  -->
            <div class="about-left ">
               <h1 style="color:green"><b>INTRODUCTION</b></h1><br/>
				<p style="text-align:justify">India is one of the major players in the agriculture sector worldwide and it is the primary source of livelihood for ~55% of India’s population. India has the world's largest cattle herd (buffaloes), largest area planted to wheat, rice, and cotton, and is the largest producer of milk, pulses, and spices in the world. It is the second-largest producer of fruit, vegetables, tea, farmed fish, cotton, sugarcane, wheat, rice, cotton, and sugar. Agriculture sector in India holds the record for second-largest agricultural land in the world generating employment for about half of the country’s population. Thus, farmers become an integral part of the sector to provide us with means of sustenance.<br/><br/>
				Consumer spending in India will return to growth in 2021 post the pandemic-led contraction, expanding by as much as 6.6%. The Indian food industry is poised for huge growth, increasing its contribution to world food trade every year due to its immense potential for value addition, particularly within the food processing industry. The Indian food processing industry accounts for 32% of the country’s total food market, one of the largest industries in India and is ranked fifth in terms of production, consumption, export and expected growth.<br/><br/></p>
				
            </div>

            <!-- about right  -->
                        <div class="about-right ">
			
             
                
                
				
</div>
        </section>
		
		
		<!--our special-->
			<section id="about-section" >
            <!-- about left  -->
            <div class="about-left ">
                <img src="images/Screenshot 2023-07-20 094045.png" alt="About Img" class="imgcstmindex1">
				 
				
            </div>

            <!-- about right  -->
                        <div class="about-right introsection">
			
             
                
                <h1><b>How we can help?</b></h1>
                <p class="howp">We provide farmers with one-of-a-kind, innovative, long-term, and well-researched solutions to help them expand more quickly. Project design and development, turn-key execution, value delivery assistance, discovering new markets for products, and negotiating the best price for farmers are some of the agriculture services we provide.<br/><br/>
				We focus on result-driven, custom-made solutions from a growth and sustainability standpoint. Our agricultural consulting service helps farmers make better crop planting decisions by presenting them with a number of options that best suit their region’s climate, water availability, and market demands.
				</p>
				
</div>
        </section>
		
		<!--our special-->
			<section id="about-section" >
            <!-- about left  -->
            <div class="about-left ">
               <img src="images/Screenshot 2023-07-20 110114.png" alt="About Img" class="imgcstmindex1">
				
				
            </div>

            <!-- about right  -->
                        <div class="about-right introsection">
			
             
                
                	<h1><b>The Best Agriculture Consulting Services</b></h1>
                <p class="howp">All your best farm consulting demands can be met in one place. Agrifriend's has agriculture experts who specialise in providing you with cost-effective solutions to the most difficult situations.<br/><br/>
				The Agrifriend scientists provide on-farm experience, while the agronomists provide scientific expertise. Additionally, their agricultural advisory services might assist you in improving your performance in your field when combined with your experience.

</p>
				
</div>
        </section>
		

   

		<br/><br/><br/>
		
<center><h1 class="ourservice">OUR SERVICES</h1> </center>
<br/>
      <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col cstmcol cstmcol1">
    <div class="card  h-100">
      <img src="images/ecological-agriculture-organic-food-from-eco-friendly-farm.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <i><h3 class="card-title">Organic farming</h3></i>
        <p class="card-text cstmcardtext"><i>Organic farming can be defined as an agricultural process that uses biological fertilisers and pest control acquired from animal or plant waste...</i><br/>
		<br/><center><i><a href="orgo.php" class="cstmlink2 cstmlink22 cstmlink222 cstmlink888">Click for More</a></i></center></p>
      </div>
    </div>
  </div>
  <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/Major-Crops-in-Pakistan-5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
      <i><h3 class="card-title">Major crops</h3></i>
        <i><p class="card-text cstmcardtext">A plant that is cultivated or grown on a large scale is known as crop. In other words, crops are grown in order to commercialize the agriculture sector. Simply, a crop is any plant that is grown and harvested extensively for-profit purposes...</i></p>
      <br/><center><i><a href="wheat.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></i></p></center>
	  </div>
    </div>
  </div>
  <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/tyf.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <i><h3 class="card-title">Fruits & Vegetables</h3></i>
       <i> <p class="card-text cstmcardtext">India's diverse climate ensures the availability of all varieties of fresh fruits & vegetables. It ranks second in fruits and vegetable production in the world, after China. As per National Horticulture Database (3rd Advance Estimates) published by National Horticulture Board...<i/></p>
     <br/> <center><a href="fruitsvegetables.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></p></center>
	  </div>
    </div>
  </div>
  </div>
  
  
<section>
<div class="seccard">
  <div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/OIP (15).jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Government Schemes</h3>
        <p class="card-text cstmcardtext"><i><b>Important Government Schemes & Programmes in Agriculture</b><br/>
		Nowadays Government of India is giving more priority to the welfare of farmers. In this regard, it is implementing several farmers' welfare schemes to revitalize the agriculture sector and to improve their economic conditions...<br/>
		</i><center><a href="scheme.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></center></p>
      </div>
    </div>
  </div>
  
  <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/farmer11.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Agriculture market</h3>
        <i><p class="card-text cstmcardtext">Up-to-date, or current, market information enables farmers to negotiate with traders from a position of greater strength. It also facilitates spatial distribution of products from rural areas to urban areas and between urban markets by sending clear price signals from urban consumers to rural producers regarding quantities and varieties required...</i></p>
      <center><a href="Agriculturemarket.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></p></center>
	  </div>
    </div>
  </div>
  
    <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/soil-testing.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Soil testing</h3>
        <i><p class="card-text cstmcardtext">A soil test is important for several reasons: to optimize crop production, to protect the environment from contamination by runoff and leaching of excess fertilizers, to aid in the diagnosis of plant culture problems, to improve the nutritional balance of the growing media and to save money and conserve energy...</i></p>
      <center><a href="soiltesting.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></p></center>
	  </div>
    </div>
  </div>
  
  <div class="col cstmcol cstmcol1">
    <div class="card h-100">
      <img src="images/article.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title">Articles</h3>
        <i><p class="card-text cstmcardtext">This articles provided to help you to learn the topic of agriculture about the articles of agriculture related like why farmers sucideing ,history of farming, The indian farmers, how effect agriculture in india and so on. This will help you to get a clear view of agriculture. Let's have a look at it.</i></p>
      <center><a href="article.php" class="cstmlink2 cstmlink22 cstmlink222">Click for More</a></p></center>
	  </div>
    </div>
  </div>
  
  </div>
  </div>
  </section>


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
