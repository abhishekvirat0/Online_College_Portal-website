<?php include("navbar.php") ?>
  
  <!-- Start main-content -->
  <div class="main-content">
  
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">Testimonial</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Testimonials</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="row align-center">
    <div class="columns small-12 large-9">
      <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg7.jpg" data-parallax-ratio="0.4">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <?php
                  include 'connection.php';
                  $sel=mysqli_query($conn,"select * from feedback order by Id desc limit 3");
                  while($arr=mysqli_fetch_array($sel))
                  {
                   $id=$arr['Id'];
                   $name=$arr['Name'];
                   $course=$arr['course'];
                   $date1=$arr['Modifiedon'];
                   $remark=$arr['Remark'];
                   ?>
              <div class="col-md-6">
                                  
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/1.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0"><?php  echo $remark;?></h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0"><?php  echo $name;?></h5>
                    <h6 class="text-gray-darkgray mt-5"><?php  echo $course;?></h6>
                  </div>
                
                </div>
                
              </div>
              </div>
              <?php }?>

              <div class="col-md-6">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/1.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              </div>

              <div class="col-md-6">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/1.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              </div>

              <div class="col-md-6">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/1.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- video testimonial -->
<?php

              $get2 = mysqli_query($conn,"SELECT * FROM ranker");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['vid'];
                $url=$row2['url'];
                $title=$row2['title'];
                $speak=$row2['speak'];
               
?>      
    <section>
      <div class="container pt-70 pb-30">
        <div class="row">
          <div class="col-md-12 mb-30">

              <div class="col-md-6">
                <div class="item">
                  <div class="fluid-video-wrapper wow zoomIn" data-wow-duration="1.5s" data-wow-offset="10">
                    <iframe width="1920" height="1080" src="<?php echo $url; ?>" allowfullscreen></iframe>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0"><?php echo $title; ?></h5>
                    <h6 class="text-gray-darkgray mt-5"><?php echo $speak; ?></h6>
                  </div>
                </div>
              </div>

            </div> 
          </div>
        </div>
      </div>
    </section>
  <?php }?>
      </div>
    </div>


<?php include("footer.php") ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>