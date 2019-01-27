<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Upcoming <span class="text-theme-colored2">Events</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="ex3">
                              <?php 
                              include 'connection.php';
                $get2 = mysqli_query($conn,"SELECT * FROM events1");
                while($row2 = mysqli_fetch_array($get2))
                {

                  $id=$row2['id'];
                  $name=$row2['name'];
                  $desc1=$row2['desc1'];
                  $date1=$row2['date1'];
                  $time1=$row2['time1'];
                  $add1=$row2['add1'];

                  ?>
              <article>
                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom"><span></span><?php echo $date1;?></li>
                      <li class="font-14 text-center text-uppercase mt-5"><?php echo $desc1;?></li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#"><?php echo $name;?></a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2">&nbsp;</i><?php echo $time1;?></span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i>&nbsp;<?php echo $add1;?></span>
                  </div>
                </div>
              
              </article>
              <?php  }?>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Learning Spoken English</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Workshop Online Marketing</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Workshop Online Marketing</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
              <article>
                <div class="event-small media sm-maxwidth400 mt-5 mb-0 pt-10 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">28</li>
                      <li class="font-14 text-center text-uppercase mt-5">Feb</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Workshop Online Marketing</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> 5.00 pm - 7.30 pm</span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> 25 Newyork City.</span>
                  </div>
                </div>
              </article>
            </div>
            </div>
            </body>
</html>