<?php
ini_set('display_errors',1);
error_reporting("E_ALL");

require './backend/config.php';
$status = '';
$response = '';

if (isset($_POST['submit'])) {
  // code...
  $email = $_POST['mail'];
  $pass = $_POST['password'];

  $query = "SELECT * FROM users WHERE mail='$email' LIMIT 1";
  $result = $conn->query($query);
  if ($result->num_rows > 0) {
    // code...
    while ($row = $result->fetch_assoc()) {
      // code...
      if ($row['password'] ==$pass) {
          $status = "Successfully.";
          $response = "and you are a ". $row['status'];
          if ($row["status"] == "admin") {
            $_SESSION["ids"] = $row['id'];
            $_SESSION['status'] = $row['status'];
            header("location: ./dashboard/admin");
          } else {
                $_SESSION["ids"] = $row['id'];
                header("location: ./dashboard/users");
          }
          
      }else {
        // code...
        $status = "wrong details ";
        $response = "Please input the correct Information..";
      }
    }
  }else{
    $status = "You are not yet a member please.. register ..";
    $response = "Wrong details ..";
  }

}

 ?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="Ogbaku: is a clean and mobile responsive sports club HTML which is very easy to customize according to different type of business need." />
<meta property="og:title" content="Golf Club. - Golf HTML Template" />
<meta property="og:description" content="Ogbaku: is a clean and mobile responsive sports club HTML which is very easy to customize according to different type of business need." />
<meta property="og:image" content="social-image.png" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title> LOG IN | OGBAKU CLUB </title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="https://Ogbaku.dexignlab.com/xhtml/js/html5shiv.min.js"></script>
        <script src="https://Ogbaku.dexignlab.com/xhtml/js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
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

<!-- Google Analytic Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<!-- <script async src="#"></script> -->

<!-- Google Analytic Code -->
</head>
<body id="bg"><div id="loading-area"></div>
	<style media="screen">
        #loader{
            display: none;
            height: 100vh;
            width: 100%;
            background: white;
            transition: 3s;
            position: fixed;
            z-index: 1000;
        background-color: rgba(255,255,255,0.7);
        }
            #loading {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        /* position: fixed; */
        margin-top: 55%;
        transition: 3s;
        z-index: 1;
        /* left: 35%; */
        /* align-content: center; */
        /* position: absolute; */
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        }

        @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
        }
        @-webkit-keyframes spin {
            from {-webkit-transform:rotate(0deg);}
            to {-webkit-transform:rotate(360deg);}
        }

	</style>
	<div id="loader">
		<center><p id="loading"></p></center>
	</div>
<div class="page-wraper">
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
        <!-- header END -->	
    <!-- Content -->
    <div class="page-content">
        <!-- inner page banner -->
       <div class="dlab-bnr-inr overlay-black-middle" style="background-image:url(images/our_club002_JPG.jpg);">

        </div>
        <!-- inner page banner END -->

<div class="section-full content-inner bg-white contact-style-1">
    <div class="container">
        <div class="row">
                    <!-- right part start -->
                    <div class="col-md-4">

                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
                    <div class="col-md-4">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
													<div class="mb-5">
														<center>
															<div id="response">

															</div>
															<img src="images/club_logo.png" class="img-fluid d-block" alt="site-logo" />
														</center><br><br>
													</div>
                        <div class="dzFormMsg"></div>
                            <form method="POST" class="dzForm" action="login.php">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Email</label>
                                                <input name="mail" type="email" id="mail" required class="form-control" placeholder="membership I.D">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label>Password</label>
                                                <input name="password" type="password" id="password" class="form-control" required  placeholder="enter your password" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                      <input type="submit" name="submit" value="Submit" class="btn site-button " />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <div class="col-md-4">

                    </div>

                </div>
            </div>
        </div>
        <!-- contact area  END -->
    </div>
    <!-- Content END-->

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
                                <li><a href="benefits.html">Benefits</a></li>
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
                                <li><a href="contact.html">Call Us</a></li>
                                <li><a href="login.html">Sign In</a></li>
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
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- Footer END-->
    <button class="scroltop fa fa-arrow-up" ></button>
</div>


<!-- JavaScript  files ========================================= -->
<script src="./js/jquery.min.js" charset="utf-8"></script>
<!-- <script type="text/javascript">
    submitLogin = () =>{
            const mail = $("#mail");
            const password = $('#password');
        
    
    setTimeout(()=>{
        $("#loader").css('display','block');
    
        if (isNotEmpty(mail) && isNotEmpty(password)
    ) {
        $.ajax({
            url: './backend/login.php',
            method: "POST",
            dataType: "json",
            data: {
                mail : mail.val(),
                password:password.val(),
            },
            success: (res)=>{
                if (res.response =="and you are a member") {
                    $('#response').html("<center><p class='text-success'>"+res.status+ " " +res.response+"</p></center>");
                    // alert("you are a "+ res.response);
                    setTimeout(()=>{
                        const rootElement = document.documentElement;
                        sessionStorage.mail = res.mail;
                        $('#loader').css('display','none');
                        rootElement.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        });
                        $.ajax({
                            url: "./dashboard/users/index.php",
                            method: "POST",
                            dataType: "json",
                            data:{
                                ids : res.mail,
                            },
                            success:(res)=>{
                                console.log("done");
                            }
                        });
                        setTimeout(()=>{
                            location.href = './dashboard/users/';
    
                        },3000);
                    },1000);
    
                }else if (res.response =="and you are a admin")  {
                    $('#response').html("<center><p class='text-success'>"+res.status+ " " +res.response+"</p></center>");
                    // alert("you are a "+ res.response);
                    setTimeout(()=>{
                        const rootElement = document.documentElement;
                        sessionStorage.mail = res.mail;
                        $('#loader').css('display','none');
                        rootElement.scrollTo({
                            top: 0,
                            behavior: "smooth"
                        });
                        setTimeout(()=>{
                            location.href = './dashboard/admin/';
    
                        },3000);
                    },1000);
                    
                }else{
                    $('#response').html("<center><p class='text-danger'>"+res.status+ " " +res.response+"</p></center>");
                    $('#loader').css('display','none');
                }
            }
        });
    }
    
    },2000);
    }
    isNotEmpty = (event)=>{
        if (event.val()=="") {
            event.css('border', '1px solid red');
            return false;
            $('#loader').css('display','none');
        } else {
            event.css('border', '');
            return true;
        }
            }
    
</script> -->
<!-- <script type="text/javascript">
submitLogin = () =>{
		const mail = $("#mail");
        const password = $('#password');
	

setTimeout(()=>{
	$("#loader").css('display','block');

	if (isNotEmpty(mail) && isNotEmpty(password)
) {
	$.ajax({
		url: './backend/login.php',
		method: "POST",
		dataType: "json",
		data: {
			mail : mail.val(),
			password:password.val(),
		},
		success: (res)=>{
			if (res.response =="and you are a member") {
				$('#response').html("<center><p class='text-success'>"+res.status+ " " +res.response+"</p></center>");
                // alert("you are a "+ res.response);
				setTimeout(()=>{
					const rootElement = document.documentElement;
                    sessionStorage.mail = JSON.stringify(res.mail);
					$('#loader').css('display','none');
					rootElement.scrollTo({
						top: 0,
						behavior: "smooth"
					});
					setTimeout(()=>{
						location.href = './dashboard/';

					},3000);
				},1000);

			}else if (res.response =="and you are a admin")  {
                $('#response').html("<center><p class='text-success'>"+res.status+ " " +res.response+"</p></center>");
                // alert("you are a "+ res.response);
				setTimeout(()=>{
					const rootElement = document.documentElement;
                    sessionStorage.mailA = JSON.stringify(res.mail);
					$('#loader').css('display','none');
					rootElement.scrollTo({
						top: 0,
						behavior: "smooth"
					});
					setTimeout(()=>{
						location.href = './dashboard/users';

					},3000);
				},1000);
				
			}else{
                $('#response').html("<center><p class='text-danger'>"+res.status+ " " +res.response+"</p></center>");
				$('#loader').css('display','none');
            }
		}
	});
}

},2000);
}
isNotEmpty = (event)=>{
	if (event.val()=="") {
		event.css('border', '1px solid red');
		return false;
        $('#loader').css('display','none');
	} else {
		event.css('border', '');
		return true;
	}
		}

</script> -->

<!-- JavaScript  files ========================================= -->

<script src="js/combine.js"></script>
<!-- All Js Combined  -->
<script src="#"></script>
<!-- google map  --><script src='#'></script>
<!-- google api for recaptcha  -->
<script src="js/dz.ajax.js"></script>
<!-- dz ajax fuctions  -->
</body>

<!-- Mirrored from Ogbaku.dexignlab.com/xhtml/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:42:37 GMT -->
</html>

