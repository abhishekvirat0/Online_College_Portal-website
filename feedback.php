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
<title>My Nims | Feedback</title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
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

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set1.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/5.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div>

  <!-- Start main-content -->
  <div class="main-content"> 
    <!-- Section: home -->
    <section id="home" class="divider parallax layer-overlay overlay-dark-9" data-bg-img="images/bg/bg4.jpg">
      <div class="display-table">
        <div class="display-table-cell">
          <div class="container pb-100">
            <div class="row">
              <div class="col-md-6 col-md-push-3">
                <div class="text-center mb-60"><a href="index.php" class=""><img alt="" src="images/logo-wide-white.png"></a></div>
                <div class="bg-lightest border-1px p-25">
                  <h4 class="text-theme-colored text-uppercase m-0">Feedback</h4>
                  <div class="line-bottom mb-30"></div>
                  <p>Thank you for the feedback, This will help to improve our service.</p>
                  <form id="appointment_form" name="appointment_form" class="mt-30" method="post" action="feedback.php">
                    <div class="row">
                      <?php
                      include 'connection.php';
                      $result = mysqli_query($conn,"SELECT MAX(FeedbackID)+1 FROM feedback");
                      $row = mysqli_fetch_row($result);
                      $highest_id = $row[0];
                      ?>
                      <input type="hidden" class="wp-form-control wpcf7-text" value="<?php echo $highest_id;  ?>" name="feedbackid" id="feedbackid" placeholder="Feedback ID">

                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="name" id="name" class="form-control" type="text" required="" placeholder="Enter Name" aria-required="true">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <?php

                          $sqli1 = "SELECT Name FROM course ";
                          $result = mysqli_query($conn,$sqli1);

                          echo "<select id='course' name='course' class='wp-form-control wpcf7-select'>";
                          echo "<option value='Select Course'>Select Course</option>";
                          while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
                          }
                          echo "</select>";

                          ?>
                          
                        </div>


                      </div>


                      
                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="mobile" id="mobile" class="form-control required" type="text" placeholder="Enter Phone" aria-required="true">
                        </div>
                      </div>

                      <div class="col-sm-12">
                        <div class="form-group mb-10">
                          <input name="email" id="email" class="form-control required email" type="email" placeholder="Enter Email" aria-required="true">
                        </div>
                      </div>
                      <div>
                       <?php
                       date_default_timezone_get("India/Mumbai");
                       $date = date('d/m/y', time());

                       ?>  
                       <input type="hidden" class="wp-form-control wpcf7-date" value="<?php echo $date;  ?>" id="date" name="date" placeholder="Date"
                     </div>
                   </div>
                    <div class="form-group mb-10">
                      <textarea name="comment" id="comment" class="form-control required"  placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                    </div>
                    <div class="form-group mb-0 mt-20">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Submit</button>
                    </div>
                  </form>
                  <!-- Appointment Form Validation-->
                  <script type="text/javascript" src="js/feedback.js"></script>
                  <script type="text/javascript">
                    $("#appointment_form").validate({
                      submitHandler: function(form) {
                        var form_btn = $(form).find('button[type="submit"]');
                        var form_result_div = '#form-result';
                        $(form_result_div).remove();
                        form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                        var form_btn_old_msg = form_btn.html();
                        form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                        $(form).ajaxSubmit({
                          dataType:  'json',
                          success: function(data) {
                            if( data.status == 'true' ) {
                              $(form).find('.form-control').val('');
                            }
                            form_btn.prop('disabled', false).html(form_btn_old_msg);
                            $(form_result_div).html(data.message).fadeIn('slow');
                            setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                          }
                        });
                      }
                    });
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <footer id="footer" class="footer bg-black-111">
    <div class="container p-20">
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">Copyright &copy;2018 <a href="http://www.logodesk.in">Logodesk</a>. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>

<script src="js/custom.js"></script>


</body>
</html>