  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <?php 
          $query = mysqli_query($conn,"select * from address");
          while($row = mysqli_fetch_array($query))
          {
            $adrs = $row['adrs'];
            $cont = $row['cont'];
            $email = $row['email'];

            ?>
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/logo-white-footer.png">
            <p><?php echo $adrs;?></p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $cont;?></a> </li>
              <br>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-envelope-o text-theme-colored2 mr-5"></i> <a class="text-gray" href="#"><?php echo $email;?></a> </li>
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">www.yourdomain.com</a> </li>
            </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        <?php }?>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="index.php">Home Page</a></li>
              <li><a href="about.php">About Us</a></li>
              <li><a href="about.php">Our Mission</a></li>
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="faq.php">FAQ</a></li>              
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Top News</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">PHP Learning</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Web Development</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Spoken English</a></h5>
                  <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Opening Hours</h4>
            <div class="opening-hours">
              <ul class="list-border">
                <li class="clearfix"> <span> Mon - Tues :  </span>
                  <div class="value pull-right"> 6.00 am - 10.00 pm </div>
                </li>
                <li class="clearfix"> <span> Wednes - Thurs :</span>
                  <div class="value pull-right"> 8.00 am - 6.00 pm </div>
                </li>
                <li class="clearfix"> <span> Fri : </span>
                  <div class="value pull-right"> 3.00 pm - 8.00 pm </div>
                </li>
                <li class="clearfix"> <span> Sun : </span>
                  <div class="value pull-right bg-theme-colored2 text-white closed"> Closed </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2018 <a href="http://www.logodesk.in">Logodesk</a>. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="faq.php">FAQ</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Help Desk</a>
                </li>
                <li>|</li>
                <li>
                  <a href="#">Support</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
