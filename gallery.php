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
              <h2 class="text-theme-colored2 font-36">Gallery</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div> 
    </section>
    
    <!-- Gallery Grid 3 -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-12">
              <!-- Portfolio Filter -->
              <div class="portfolio-filter">
                <a href="#design" class="" data-filter=".design">Images</a>
                <a href="#photography" class="" data-filter=".photography">Media</a>
              </div>
              <!-- End Portfolio Filter -->
            <?php
              include("connection.php");
              $get2 = mysqli_query($conn,"SELECT * FROM imgs");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $user_nm=$row2['img'];
                $title=$row2['title'];
                $desc1=$row2['desc1'];
               
              ?>
              <!-- Portfolio Gallery Grid -->
              <div id="grid" class="gallery-isotope default-animation-effect grid-4 gutter clearfix">
                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                  <div class="thumb">
                    <div class="flexslider-wrapper">
                      <div class="flexslider">
                        <ul class="slides">
                          <li><a href="#" title="Portfolio Gallery - Photo 1"><img src="account/configure-site/galleryimages/<?php echo $user_nm; ?>" alt=""></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="#"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php  
              }

?>
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                <div class="gallery-item photography">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/gallery/4.jpg" alt="project">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto"><i class="fa fa-youtube-play"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Portfolio Item End -->
              </div>
              <!-- End Portfolio Gallery Grid -->
                          
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include("footer.php") ?>

  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

</body>
</html>