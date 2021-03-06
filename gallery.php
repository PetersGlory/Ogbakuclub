<?php
ini_set('display_errors',1);
error_reporting("E_ALL");
require "./backend/config.php";

// getting all the images details 
$query = "SELECT * FROM uploads";
$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
mysqli_free_result($result);
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="Ogbaku club which started with mostly Lagos based members has since extended to Owerri and Abuja, with rapidly increasing membership and appeal. The club has remained the flagship of educational and economic development in the town of Ogbaku within Imo State in Nigeria." />
<meta property="og:title" content="OGBAKU CLUB" />
<meta property="og:description" content="Ogbaku club which started with mostly Lagos based members has since extended to Owerri and Abuja, with rapidly increasing membership and appeal." />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title>GALLERY | OGBAKU CLUB</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="css/style.min.css">
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-2.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">
<!-- Google fonts -->
<link href="#" rel="stylesheet">
</head>
<body id="bg">
<div class="page-wraper ">
	<!-- header -->
	<header class="site-header header-style-5">
        <!-- main header -->
        <div class="main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                     <!--<p style="text-align: center;  margin:0; padding:0;"> <font style="color:Green;"><b>Website under constuction! All content yet to be verified by club management</b>.<br><br></font></p>-->
				      <p style="text-align: right;  margin:0; padding:0;">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact: 0703-410-4227 &nbsp; | &nbsp; info@ogbakuclub.org
                      <!-- website logo -->
                    <!-- website logo -->
                    <div class="logo-header mostion">
                        <a href="index.html">
                            <img src="images/logo3.png" width="193" height="89" alt="">
                        </a>
                    </div>
                    
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <!-- <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> -->
                        <b>Menu</b>						
                    </button>
                    
    <!-- main nav -->
        <!-- main nav -->
        <div class="header-nav navbar-collapse collapse">
            <ul class=" nav navbar-nav">
                <li class="active"> <a href="#">HOME<i class="fa fa-chevron-down"></i></a></li>
                <li> <a href="javascript:;">THE CLUB<i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                         <li><a href="history.html">History & Achievements</a></li>
                        <li><a href="constitution.html">CONSTITUTION</a></li>
                    </ul>
                </li>
                <li> <a href="javascript:;">BENEFITS<i class="fa fa-chevron-down"></i></a>
                <ul class="sub-menu">
                        <li><a href="benefits.html">BENEFITS FOR OGBAKU</a></li>
                        <li><a href="benefits_2.html">BENEFITS FOR MEMBERS</a></li>
                    </ul>
                </li>
            <li> <a href="gallery.php">GALLERY<i class="fa fa-chevron-down"></i></a>
                    
                </li>
            <li> <a href="javascript:;">MEMBERSHIP<i class="fa fa-chevron-down"></i></a>
                    <ul class="sub-menu">
                        <li><a href="join.html">JOIN NOW</a></li>
                        <li><a href="login.html">MEMBERS ONLY</a></li>
                    </ul>
                </li>
                  <li><a href="#"> OGBAKU TOWN<i class="fa fa-chevron-down"></i></a>
                     <ul class="sub-menu">
                        <li><a href="ogbaku_community.html"><b>OGBAKU HISTORICAL BACKGROUND</b></a></li>
                        <li><a href="ogbaku_community.html">Ogbujioma Autonomous Community</a></li>
                        <li><a href="ogbaku_community.html">Okwu Autonomous Community</a></li>
                        <li><a href="ogbaku_community.html">Isi-Ogbaku Autonomous Community</a></li>
                    </ul>
                </li>
                <li> <a href="contact_us.html">CONTACT US <i class="fa fa-chevron-down"></i></a>
        
                </li>
            </ul>
        </div>				

</div>
            </div>
        </div>
        <!-- main header END -->
    </header>
        <!-- header END -->		<!-- header END -->
    <!-- Content -->
    <div class="page-content">
		<!-- Slider -->
             <div class="page-content"> 
        <!-- inner page banner -->
          <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/our_club002_JPG.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Our Gallery</h1>
                </div>
            </div>
        </div>
        
        <!-- Slider END -->
        
		</div>
	</div>
</div>
</div>
</div>    
<!-- About Company END -->
<!-- Slider END -->


<br>
         <!-- Our Projects  -->
         <div class="container">
            <div class="section-head  text-center">
                <h2 class="h2 text-black">Ogbaku Club Gallery</h2>
                <div class="dlab-separator-outer "> <div class="dlab-separator bg-primary style-liner"></div> </div>
            </div>

            <div class="row">
                <ul id="masonry" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery m-b0">
                    <li data-filter="home" class="card-container col-lg-4 col-md-4 col-sm-6 col-xs-6 ">
                        <div class="dlab-box dlab-gallery-box m-b0">
                            <div class="dlab-media dlab-img-effect rotate"> <a href="javascript:void(0);"> <img src="images/our-work/pic01.jpg"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"></a><a  href="#" class="mfp-link"> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter="office" class="card-container col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="dlab-box dlab-gallery-box m-b0">
                            <div class="dlab-media dlab-img-effect rotate dlab-img-effect zoom"> <a href="javascript:void(0);"> <img src="images/our-work/pic02.jpg"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> </a> <a  href="#" class="mfp-link"> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-filter="children-aid" class="card-container col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="dlab-box dlab-gallery-box m-b0">
                            <div class="dlab-media dlab-img-effect rotate"> <a href="javascript:void(0);"> <img src="images/our-work/pic03.jpg"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> </a> <a href="#" class="mfp-link"> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php foreach ($rows as $row):?>
                    <li data-filter="commercial" class="card-container col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div class="dlab-box dlab-gallery-box m-b0">
                            <div class="dlab-media dlab-img-effect rotate"> <a href="javascript:void(0);"> <img src="./upload/<?php echo $row['name'];?>"  alt="<?php echo $row['name'];?>"> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon"> <a href="javascript:void(0);"> </a> <a  href="./upload/<?php echo $row['name'];?>" class="mfp-link"> </a> </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach;?>                  
                </ul>
            </div>
        </div>
        <!-- Our Projects END -->
		<br>



<br>

    <!-- Footer -->
		<!-- Footer -->
    <footer class="site-footer footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-6 footer-col-4">
                        <div class="">
                            <h4 class="m-b15 text-uppercase">The Club</h4>
                            <img src="images/footer_logo.png" alt="site-logo">
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Quick Links</h4>
                            <ul>
                                <li><a href="benefits_2.html">Benefits</a></li>
                                <li><a href="join.html">New Member Application</a></li>
                                <li><a href="history.html">About Us</a></li>
                                <li><a href="ogbaku_community.html">Ogbaku Town</a></li>
                            </ul>
                        </div>
					</div>
                    <div class="col-md-2 col-sm-6 footer-col-4">
                        <div class="widget widget_services">
                            <h4 class="m-b15 text-uppercase">Advertise here</h4>
                            <ul>
                                <li><a href="contact_us.html">Call Us</a></li>
                                <li><a href="#">Mail Us</a></li>
                                <li><a href="contact_us.html">Chat with Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-col-4">
                        <div class="widget widget_getintuch">
                            <h4 class="m-b15 text-uppercase">Contact Us</h4>
                            <ul>
                                <li><i class="fa fa-home"></i><strong>ADDRESS</strong>22 Road, B1 Close, House 7, FESTAC Town, Lagos <br>
                                        (Registered Address)<br><br>
                                KM 2.5 Oguta Road, Via Owerri-Onitsha Road, Ogbaku, Imo State, Nigeria (Club house)</li>
                                <li><i class="fa fa-phone"></i><strong>phone</strong>0703-410-4227</li>
								 <li><i class="fa fa-envelope"></i><strong>Email</strong>info@ogbakuclub.com</li>
                            </ul>
                        </div>
                    </div>
					<div class="col-md-3 col-sm-12 footer-col-4 ftr-newsletter">
                        <div class="widget">
                            <h4 class="m-b15 text-uppercase">Our Newsletter</h4>
                            <form class="dez-subscribe-form">
								<p>Subscribe to our newsletter</p>
								<div class="input-group m-b15">
									<input name="dzEmail" required="" class="form-control " placeholder="Enter Your Email" type="email">
								</div>
								<div class="input-group">
									<button name="submit" type="submit" value="Submit" class="site-button btn-block">
										SUBSCRIBE <i class="fa fa-angle-right font-18 m-l10"></i>
									</button>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left"> 
						<span>?? Copyright 2020 | All Rights Reserved | Developed by:<a href="" style="color: #00A261"> AK Infotech Solutions</a></span> 
					</div>
					<div class="col-md-6 text-right "> 
						<a href="#"><i class="fa fa-facebook"></i></a> 
						<a href="#"><i class="fa fa-linkedin"></i></a> 
						<a href="#"><i class="fa fa-google-plus"></i></a> 
					</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->    <!-- Footer END-->
    <!-- scroll top button -->
    <button class="scroltop fa fa-arrow-up" ></button>

<div id=""></div>
<!-- JavaScript  files ========================================= -->
	<!-- JavaScript  files ========================================= -->

<script src="js/combine.js"></script>
<!-- All Js Combined  -->
<!-- google map  --><!-- revolution JS FILES -->
	<!-- revolution JS FILES -->
<script  src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script  src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>

</body>


</html>
