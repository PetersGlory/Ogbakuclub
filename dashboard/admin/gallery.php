<?php
ini_set('display_errors',1);
error_reporting("E_ALL");
require "../../backend/config.php";
$msg = "";
// uploading images
if(isset($_POST['upload'])){
    // Check if file was uploaded without errors
    $user_id = $_SESSION['ids'];
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
       $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png", "PNG" => "image/png");
       $filename = $_FILES["photo"]["name"];
       $filetype = $_FILES["photo"]["type"];
       $filesize = $_FILES["photo"]["size"];
   
       // Verify file extension
       $ext = pathinfo($filename, PATHINFO_EXTENSION);
       if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
   
       // Verify file size - 5MB maximum
       $maxsize = 5 * 1024 * 1024;
       if($filesize > $maxsize) die("Error: File size is larger than the allowed limit. '$maxsize'");
   
       // Verify MYME type of the file
       if(in_array($filetype, $allowed)){
           // Check whether file exists before uploading it
           if(file_exists("../../upload" . $filename)){
               $msg =  "<div class='text-danger'>".$filename . " is already exists.</div>";
           } else{
               $query = "INSERT INTO uploads (`name`,`user_id`) Values('$filename','$user_id')";
               if($conn->query($query)){
                   move_uploaded_file($_FILES["photo"]["tmp_name"], "../../upload/" . $filename);
                   $msg =  "<div class='text-success'>Your file was uploaded successfully.</div>";
               }
           } 
       } else{
           $msg =  "<div class='text-danger'>Error: There was a problem uploading your file. Please try again.</div>"; 
       }
   } else{
       $msg = "<div class='text-danger'>Error: " . $_FILES["photo"]["error"] . "</div>";
   }
}

// getting all the images details 
$query = "SELECT * FROM uploads";
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
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assets/demo/demo.css" rel="stylesheet" />
    <!-- <style>
    .card-user .card-body {
       min-height: 350px !important;
    }
  </style> -->
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
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
                    <li>
                        <a href="index.php">
                            <i class="nc-icon nc-single-02"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./mangeMember.php">
                            <i class="nc-icon nc-circle-10"></i>
                            <p>Manage Members</p>
                        </a>
                    </li>
                    <li style="width: 500px;">
                        <a href="./post.php">
                            <i class="nc-icon nc-email-85"></i>
                            <p>Members Notice Board</p>
                        </a>
                    </li>
                    <li style="width: 500px;" class="active">
                        <a href="./gallery.php">
                            <i class="nc-icon nc-email-85"></i>
                            <p>Manage Gallery</p>
                        </a>
                    </li>
                    <li>
                        <a href="./changPassword.php">
                            <i class="nc-icon nc-badge"></i>
                            <p>Change Password</p>
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
                                <button data-trigger="#navbar_main" class="navbar-toggler" type="button"><span
                                        class="navbar-toggler-icon"></span></button>
                                <a style="margin-left: 20px;" class="navbar-brand" href="./index.php">User
                                    Dashboard</a>
                            </div>
                        </div>
                    </nav>

                    <nav id="navbar_main" class="mobile-offcanvas ">
                        <div class="container nav-cont">
                            <a class="navbar-brand d-none d-lg-block" href="./index.php">User Dashboard</a>
                            <div class="offcanvas-header">
                                <button class="navbar-toggler btn-close"><span
                                        class="navbar-toggler-icon"></span></button>
                            </div>
                            <ul class="navbar-nav">
                                <li class="nav-item active"> <a class="nav-link" href="./index.php">Dashboard</a></li>
                                <li class="nav-item"><a class="nav-link" href="./mangeMember.php">Manage Members</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="./post.php">Members Notice Board</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="./gallery.php">Manage Gallery</a></li>
                                <li class="nav-item"><a class="nav-link" href="./changPassword.php">Change Password</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="./logout.php">Log Out</a></li>
                            </ul>
                        </div>
                    </nav>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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

            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="container">
                            <div class="jumbotron">
                                <h1><i class="fa fa-camera-retro"></i> The Image Gallery</h1>
                                <p>here are the images!</p>
                                <?php echo $msg;?>
                                <div class="update ml-auto mr-auto">
                                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="photo" class="form-control" />
                                        <input type="submit" name="upload" class="btn btn-success btn-round" value="Upload Image" />
                                    </form>
                                </div>
                            </div>

                            <div class="row">
                                <?php foreach($rows as $row):?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="thumbnail">
                                        <img src="../../upload/<?php echo $row['name'];?>" alt="<?php echo $row['name'];?>" />
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-black  footer-white ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="credits ml-auto">
                            <span class="copyright">
                                ©
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>All Rights Reserved | Developed by:<i class="fa fa-heart heart"></i>
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
    <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="./assets/demo/demo.js"></script>
</body>

</html>