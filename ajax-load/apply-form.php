<?php 
include '../connection.php';
?>
<section class="">
  <div class="container position-relative p-0 mt-90" style="max-width: 570px;">
    <h2 class="bg-theme-colored p-15 pt-10 mt-0 mb-0 text-white" align="center">Apply Now</h2>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Apply Form Starts -->
          <form  method="post" role="form" action="apply-form2.php" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Full Name" id="name" name="name" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input class="form-control required date-picker" id="dob" name="dob" type="text" placeholder="Date of Birth" aria-required="true">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Qualification" id="sub" name="sub" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Total Year of Experience" id="num" name="num" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Contact Number" id="phone" name="phone" class="form-control" required="" aria-required="true" type="Phone">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Address" id="address" name="address" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="form-group">
                  <label>C/V Upload</label>
                  <input type="file" id="file" name="file" size="50">
                  <small>PDF should be smaller in size</small>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input name="form_botcheck" class="form-control" value="" type="hidden">
                  <button type="submit" class="btn btn-colored btn-block btn-theme-colored text-white btn-lg btn-flat" id="btnRegister" name="btnRegister">Apply</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
  </div>
</section>