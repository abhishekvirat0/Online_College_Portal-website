<?php 
include 'ck.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Learnpro - Education University School Kindergarten Learning HTML Template" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>My Nims</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/scroll-event.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/chart.js"></script>
<script src="js/utils.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-fixed-footer">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/1.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>
  
  <!-- Header -->
  <header id="header" class="header header-floating">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
              <ul class="list-inline xs-text-center text-white">
                <?php 
                $query = mysqli_query($conn,"select * from address");
                while($row = mysqli_fetch_array($query))
                {
                  $adrs = $row['adrs'];
                  $cont = $row['cont'];
                  $email = $row['email'];

                  ?>
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i><?php echo "  ".$cont;?></a> </li>
                <li class="m-0 pl-10 pr-10"> 
                  <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> <?php echo $email;?></a> 
                </li>
<?php }?>
              </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">

              <?php if ($ck == 1) {
                # code...
               ?>
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10" style="cursor: pointer;">
              <p class="m-0 pl-10 dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-o mr-5 text-white"></i> Hi, <?php echo $fname; ?></a><span class="caret"></span>
                <ul class="dropdown-menu">
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
                </ul>
              </p>  
            </ul>
              <?php } else{

               ?>
              <li class="m-0 pl-10"> <a href="ajax-load/login.php" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Login /</a> </li>
              <li class="m-0 pl-0 pr-10"> 
                <a href="student-registration.php" class="text-white"><i class="fa fa-edit mr-5"></i>Register</a> 
              </li>
            <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav navbar-sticky navbar-sticky-animated">
      <div class="header-nav-wrapper">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default no-bg">
            <a class="menuzord-brand switchable-logo pull-left flip mb-15" href="index.php">
              <img class="logo-default" src="images/logo-wide-white.png" alt="">
              <img class="logo-scrolled-to-fixed" src="images/logo-wide.png" alt="">
            </a>
            <ul class="menuzord-menu">
              <li><a href="index.php">Home</a></li>

              <li><a href="about.php">About</a></li>

              <li><a href="courses.php">Courses</a></li>

              <li><a href="careers.php">Careers</a></li>

              <li><a href="service.php">Services</a></li>

              <li><a href="#">Corners</a>
                <ul class="dropdown">
                  <li><a href="student-corner.php">Student Corner</a></li>
                  <li><a href="parent-corner.php">Parent Corner</a></li>
                  <li><a href="counciling.php">Counciling</a></li>
                  <li><a href="admission.php">Admission Procedure</a></li>
                  <li><a href="feedback.php">Feedback</a></li>
                </ul>
              </li>

              <li><a href="gallery.php">Gallery</a></li>

              <li><a href="#">Franchise</a>
                <ul class="dropdown">
                    <li><a href="joining-hands.php">Joining Hands</a></li>
                    <li><a href="requirement.php">Requirement</a></li>
                    <li><a href="apply-for-franchise.php">Apply for Nims Frenchises</a></li>
                </ul>
              </li>

              <li><a href="contact.php">Contact Us</a></li>

              <li><a href="faq.php">More</a>
                  <ul class="dropdown">
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="testimonial.php">Testimonials</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>