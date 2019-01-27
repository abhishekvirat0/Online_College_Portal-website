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
              <h2 class="text-theme-colored2 font-36">Apply For Franchise</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Franchise</a></li>
                <li class="active">Apply</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Apply Franchise -->
    <section>
      <div class="container pt-50 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <form>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                    <div class="form-group">  
                      <label>Email</label>
                      <input type="email" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Franchise City</label>
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Franchise For</label><br>
                      <table width="100%">
                        <tr>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox4" value="option1"> Banking
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox5" value="option2"> Company Training
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> Competative
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> Engineering
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> English Speaking
                            </label>
                          </td>
                        </tr>

                        <tr>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> HSC
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> MSW
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> Personality Development
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> Polytechnics
                            </label>
                          </td>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> School
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <label class="checkbox-inline">
                              <input type="checkbox" id="inlineCheckbox6" value="option3"> Other
                            </label>
                          </td>
                        </tr>
                      </table>
                    </div>
                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="phone" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                    <div class="form-group">
                      <label>Pin Code</label>
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-border btn-theme-colored2 btn-circled btn-lg">Submit</button>
                  </form>
            </div>
            
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <h3 class="text-uppercase font-weight-600 title">Contact <span class="text-theme-colored2">Us </span></h3> 
                  <div class="double-line-bottom-theme-colored-2 mt-15 mb-10"></div>
                  
                </div>
                 <?php 
                $query = mysqli_query($conn,"select * from address");
                while($row = mysqli_fetch_array($query))
                {
                  $adrs = $row['adrs'];
                  $cont = $row['cont'];
                  $email = $row['email'];

                  ?>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Head Office Address</h5>
                      <p>Nims Educational Care, Shop No. 4,TradMark Complex<br>Near Gadge Baba Temple<br>Gadge Nagar Amravati.</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Zonal Address</h5>
                      <p><?php echo $adrs;?><br><strong>Sunday- Closed</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Contact Number</h5>
                      <p><?php echo $cont;?></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Email Address</h5>
                      <p><?php echo $email;?></p>
                    </div>
                  </div>
                </div>

              </div>
              <?php } ?>
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