<?php
ini_set('display_errors',1);
error_reporting("E_ALL");
require "../../backend/config.php";

  $ids = $_SESSION['ids'];
  // echo $ids;
  $query = "SELECT * FROM users WHERE id = '$ids' LIMIT 1";
  $result = mysqli_query($conn, $query);
  $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
  mysqli_free_result($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ogbaku club Dashboard 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger" >
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="index.php" class="simple-text logo-normal">
          Ogbaku Club
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href="./index.php">
              <i class="nc-icon nc-single-02"></i>
              <p>My Profile</p>
            </a>
          </li>
          <li>
            <a href="./updateProfile.php">
              <i class="nc-icon nc-circle-10"></i>
              <p>Update Profile</p>
            </a>
          </li>
          <li>
            <a href="./changPassword.php">
              <i class="nc-icon nc-badge"></i>
              <p>Change Password</p>
            </a>
          </li>
          <li style="width: 500px;">
            <a href="./post.php">
              <i class="nc-icon nc-email-85"></i>
              <p>Members Notice Board</p>
            </a>
          </li>
          <li>
            <a href="./logout.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>Log Out</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">

    <!-- Mobile Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">  
          <nav class="navbar2 navbar d-lg-none  navbar-expand-lg navbar-light mt-3">
            <div class="container">
              <div class="navbar-wrapper">
                <button data-trigger="#navbar_main" class="navbar-toggler" type="button"><span class="navbar-toggler-icon"></span></button>
                <a style="margin-left: 20px;" class="navbar-brand" href="./index.php"></a>
              </div>
            </div>
          </nav>

          <nav id="navbar_main" class="mobile-offcanvas ">
            <div class="container nav-cont">
              <a class="navbar-brand d-none d-lg-block" href="./index.php"></a>
              <div class="offcanvas-header">
                <button class="navbar-toggler btn-close"><span class="navbar-toggler-icon"></span></button>
              </div>
              <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="./index.php">My Profile</a> </li>
                <li class="nav-item"><a class="nav-link" href="./updateProfile.php">Update Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="./changPassword.php">Change Password</a></li>
                <li class="nav-item"><a class="nav-link" href="./post.php">Members Notice Board</a></li>
                <li class="nav-item"><a class="nav-link" href="./logout.php">Log Out</a></li>
              </ul>
            </div>
          </nav>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </nav>

      <!-- End Mobile Navbar -->
    <?php foreach ($rows as $row):?>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-user" style="margin-top: 10px;">
              <div class="image">
                <img src="./assets/img/header.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="./assets/img/default-avatar.png" alt="...">
                    <h5 class="title"><?php echo $row['surname']; ?> <?php echo $row['othernames']; ?></h5>
                  </a>
                  <hr>
                  <h5>
                    About Me <br>
                    <p id="about"><?php echo $row['reason']; ?></p>
                  </h5>
                  <hr>
                  <h5>
                    Email address <br>
                    <p id="mail"><?php echo $row['mail']; ?></p>
                  </h5>
                  <hr>
                  <h5>
                    Address <br>
                    <p id="addr"><?php echo $row['rAddress']; ?></p>
                  </h5>
                </div>
              </div>
              <div class="card-footer">
                <hr>
                <div class="button-container">
                  <div class="row">
                    <div class="col-lg-3 col-md-6 col-6 ml-auto">
                      <p class="description">City</p><br />
                      <h5>Lagos</h5> 
                    </div>
                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                      <p class="description">Country</p><br />
                      <h5>Nigeria</h5>
                    </div>
                    <div class="col-lg-3 mr-auto">
                      <p class="description">Postal Code</p><br /> 
                      <h5>100001</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach;?>
      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <div class="credits ml-auto">
              <span class="copyright">
                ?? <script>
                  document.write(new Date().getFullYear());
                </script>
                All Rights Reserved | Developed by:<i class="fa fa-heart heart"></i> 
                   AKI Solutions
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="./assets/demo/demo.js"></script>
</body>

</html>