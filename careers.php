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
              <h2 class="text-theme-colored2 font-36">Careers</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Careers</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
                <?php 
        $query = mysqli_query($conn,"select * from career");
        while($row = mysqli_fetch_array($query))
        {
          $function = $row['J_func'];
          $role = $row['J_role'];
          $roleId = $row['J_roleId'];
          $skills = $row['J_skills'];
          $exp = $row['J_exp'];
      ?>
          <div class="col-md-12">
            <div class="job-overview">
              <h2>Job Description</h2>
<table width="100%">
        <tr>
          <td colspan="2"><h3><b>Job Description</b><br></h3></td>
        </tr>
        <tr>
          <td colspan="2">Must Have Skills</td>
        </tr>
        <tr>
          <td colspan="2"><?php echo $exp; ?></td>
        </tr>
        <tr>
          <td><b>Job Function</b></td>
          <td><?php echo $function; ?></td>
        </tr>
        <tr>
          <td><b>Role</b></td>
          <td><?php echo $exp; ?></td>
        </tr>
        <tr>
          <td><b>Job ID</b></td>
          <td><?php echo $roleId; ?></td>
        </tr>
        <tr>
          <td><b>Desired Skills</b></td>
          <td><?php echo $skills; ?></td>
        </tr>
              </table><br>
              <h2>Desired Candidate Profile</h2>
              <table>
                <tr>
                  <td><b>Qualification:</b> BSCIT OF COMPUTER</td>
                </tr>
              </table>
              <a class="btn btn-dark mt-20 text-white ajaxload-popup" href="ajax-load/apply-form.php">Apply Now</a>
              
            </div>
            <br>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->

  <!-- Footer -->
  <?php include('footer.php');?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>
<script src="js/apply.js"></script>

</body>
</html>