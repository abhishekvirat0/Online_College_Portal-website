<html>
<head>
</head>
<body>

    <section id="team">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase title">Our <span class="text-theme-colored2">TUTORS</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase mb-0">We Have Highly Qualified Teachers</p>
            </div>
          </div>
           </div>
                              
        <div class="row">
          <div class="team-members">
             <?php
    include 'connection.php';
    $sel=mysqli_query($conn,"select * from tutor order by tid desc limit 4");
    while($arr=mysqli_fetch_array($sel))
   {
   $tid=$arr['tid'];
   $tname=$arr['tname'];
   $spec=$arr['speciality'];
   $desc1=$arr['description'];
   $pic=$arr['tpic'];
?>
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="account/configure-site/tutorimages/<?php echo $pic ?>" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0"><?php echo $tname;?> <span class="text-gray font-13 ml-5"><?php echo $spec;?></span></h4>                  
                  <p class="font-13 mt-10 mb-10"><?php echo $desc1; ?></p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>
            <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="images/team/2.jpg" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">John Diggle <span class="text-gray font-13 ml-5">- CSE</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
<!--             <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="images/team/3.jpg" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">Laurel Lance <span class="text-gray font-13 ml-5">- Civil</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div> -->
<!--             <div class="col-md-3">
              <div class="team-members maxwidth400 mb-30">
                <div class="team-thumb">
                  <img src="images/team/4.jpg" alt="" class="img-fullwidth">
                </div>
                <div class="team-bottom-part bg-silver-deep p-15 pb-0">
                  <h4 class="text-uppercase font-raleway text-theme-colored title-border font-weight-600 line-bottom-center m-0">Echo Kellum <span class="text-gray font-13 ml-5">- English</span></h4>                  
                  <p class="font-13 mt-10 mb-10">Lorem ipsum dolorsit amet consecte turadip isior ipsum dolor sit ametor ipsum dolor sit amet conse</p>
                  <ul class="styled-icons icon-theme-colored2">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>
    </body>
</html>