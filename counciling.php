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
              <h2 class="text-theme-colored2 font-36">Counciling</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Corner</a></li>
                <li class="active">Counciling</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Blog -->
    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
            <ul id="myTab" class="nav nav-tabs boot-tabs nav-justified">
              <li class="nav-item active"><a href="#student" data-toggle="tab">Student Counciling</a></li>
              <li class="nav-item"><a href="#career" data-toggle="tab">Carrer Counciling</a></li>
              <li class="nav-item"><a href="#parent" data-toggle="tab">Parent Counciling</a></li>
            </ul>
            <div id="myTabContent2" class="tab-content">
              <div class="tab-pane fade in active" id="student">
                <?php include("counciling-details.php"); ?>
              </div>
              <div class="tab-pane fade" id="career">
                <?php include("counciling-details.php"); ?>
              </div>
              <div class="tab-pane fade" id="parent">
                <?php include("counciling-details.php"); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> 
  </div>  
  <!-- end main-content -->

  <!-- Footer -->
  <?php include("footer.php"); ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/council.js"></script>
</body>
</html>