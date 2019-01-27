 
<?php 
  include("navbar.php");
  include("connection.php"); 
?>
  
  <!-- Start main-content -->

  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">


        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <?php  
              $i=0;
              $sel=mysqli_query($conn,"select * from slider order by ID");
                while($arr=mysqli_fetch_array($sel))
                {
                 $id=$arr['ID'];
                 $SliderImage=$arr['SliderImage'];
                 $ShortDesc=$arr['ShortDescription'];
                 $MainDesc=$arr['MainDescription'];
                 
              ?>
              <!-- SLIDE 1 -->
              <li data-index="<?php $i+1?>" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default"  data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">

                <!-- MAIN IMAGE -->
                <img src="account/configure-site/SliderImages/<?php echo $SliderImage; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-3" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;"><?php echo $ShortDesc; ?>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><?php echo $MainDesc;?>
                </div>
                <!-- LAYER NR. 4 -->
                <!-- <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none"   
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-theme-colored2 btn-lg btn-flat text-white font-weight-600 pl-30 pr-30 mr-15" href="#">Know More</a>                  
                </div> -->
              </li>
              <?php } ?>
            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.1);"></div>
          </div>
        </div>
        

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->
      </div>
    </section>



    <!-- Section: home-boxes -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-4 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto" data-bg-color="#5D9CEC">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fas fa-laptop font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Technology</a></h4>
                  <p class="text-white" style="text-align: justify;">when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-4 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-color="#EF5861">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fas fa-users font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="#" class="text-white">Best Tutor</a></h4>
                  <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore! Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-4 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto" data-bg-color="#E79800">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fas fa-desktop font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Practical Training</a></h4>
                  <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore! Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-4 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto" data-bg-color="#43B14B">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fas fa-comments font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Support</a></h4>
                  <p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore! Lorem ipsum dolor sit amet, consectetur adpisici elit. Obcaec atdistinc tio quaerat iusto, accusa ntumeos nsect eturpers piciatis minima tempore!</p>
                  <div class="shadow-icon"><i class="pe-7s-mail-open"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-50 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-8">
              <h3 class="text-uppercase font-weight-600 mt-0">About <span class="text-theme-colored2">Nims</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="font-16 mt-20" style="text-align: justify;">In the year 2004, Nim's made everyone shocked by giving two top scorers (100 out of 100) for the first time in Amravati for annual pattern which was impossible earlier. After that we consequently gave 14 students (100 out of 100 ) upto the year 2007 in MSBTE as well as Govt. Polythehnic. Again in the year 2008, NIM's gave a mind blowing result of 10 students getting ( 100 out of 100 ). In year 2009, Nim's started its first branch in Nashik and the magic of NIM'S worked again Snehal Gaikar got ( 100 out of 100) in nashik with her hardwork and our support. To be reputed institute of smart people Who add value across generation" One can succed in life by setting goals & acheiving prepare you,guide you,support you & mould you too... As XII & Diploma in Polytechnics is turning point in education fields.</p>
              <a href="about.php" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-10">Read More</a>
            </div>
            
            <?php include("upcoming-event.php") ?>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase title">Popular <span class="text-theme-colored2">Courses</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase">Choose Your Desired Course</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
            <?php

            $get2 = mysqli_query($conn,"SELECT * FROM coursetype");
            while($row2 = mysqli_fetch_array($get2))
            {

              $id=$row2['cid'];
              $course_type=$row2['Name'];
              $course_nm=$row2['Course'];
              $c_durt = $row2['c_durt'];
              $c_time = $row2['c_time'];
              $c_desc = $row2['c_desc'];

              ?>      
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/sm1.jpg">
                  <!-- <div class="price-tag">₹1,000</div> -->
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="course-details.php"><h3 class="mt-0 mb-5"><?php echo $course_nm; ?></h3></a>
                    <!-- <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul>    href="course_detail.php?id='<?php echo $id ?>'"-->
                  </div>
                  <div class="course-top-part pull-right"><a href="#" class="btn btn-theme-colored2 btn-dark btn-circled"><font size="4">₹<?php echo $course_type;?></font></a></div>
                  <!-- <div class="author-thumb">
                    <img src="images/course/xs1.jpg" alt="" class="img-circle">
                  </div> -->
                  <div class="clearfix"></div>
                  <p class="course-description mt-20"><?php echo $c_desc;?></p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6><?php echo $c_time;?></h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>35</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time"><?php echo $c_durt; ?></span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <?php } ?>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/sm1.jpg">
                  <!-- <div class="price-tag">₹1,000</div> -->
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="course-details.php"><h3 class="mt-0 mb-5">JEE Mains</h3></a>
                    <!-- <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul> -->
                  </div>
                  <div class="course-top-part pull-right"><a href="#" class="btn btn-theme-colored2 btn-dark btn-circled"><font size="4">₹1,000</font></a></div>
                  <!-- <div class="author-thumb">
                    <img src="images/course/xs1.jpg" alt="" class="img-circle">
                  </div> -->
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>4 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>35</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">2 hours 30 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="images/course/sm1.jpg">
                  <!-- <div class="price-tag">₹1,000</div> -->
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="course-details.php"><h3 class="mt-0 mb-5">JEE Mains</h3></a>
                    <!-- <ul class="list-inline">
                      <li class="review-stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </li>
                      <li>25 <i class="fa fa-comments-o text-theme-colored2"></i></li>
                      <li>68 <i class="fa fa-thumbs-o-up text-theme-colored2"></i></li>
                    </ul> -->
                  </div>
                  <div class="course-top-part pull-right"><a href="#" class="btn btn-theme-colored2 btn-dark btn-circled"><font size="4">₹1,000</font></a></div>
                  <!-- <div class="author-thumb">
                    <img src="images/course/xs1.jpg" alt="" class="img-circle">
                  </div> -->
                  <div class="clearfix"></div>
                  <p class="course-description mt-20">Lorem ipsum dolor sit amet, consec teturadipsi cing elit. Nobis commodi esse aliquam eligend reprehenderit, numquam a odio.</p>
                  <ul class="list-inline course-meta mt-15">
                    <li>
                      <h6>4 year</h6>
                      <span> Course</span>
                    </li>
                    <li>
                      <h6>35</h6>
                      <span> Class Size</span>
                    </li>
                    <li>
                      <h6><span class="course-time">2 hours 30 min</span></h6>
                      <span> Class Duration</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Enquiry Form -->
    <section data-bg-img="images/pattern/p4.png"> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="text-uppercase font-28 mt-0"><span class="text-theme-colored">Enquiry</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>  
            </div>
          </div>
        </div>
        <div class="section-content">          
          <div class="row">
            <div class="col-md-12">
            
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="contact-form-transparent" action="http://thememascot.net/demo/personal/j/learnpro/v4.0/demo/includes/sendmail.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name <small>*</small></label>
                      <input name="name" id="name" class="form-control" type="text" placeholder="Enter Name" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email <small>*</small></label>
                      <input name="email" id="email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="phone">Select Course*</label>
                        <select id="c_query" name="c_query" class="form-control">
                            <option disabled selected value="">Select Your Course</option>
                            <option value="Catia">Catia</option>
                            <option value="Nx CAD">Nx CAD</option>
                            <option value="Autocad">Autocad</option>
                            <option value="Java">Java</option>
                            <option value=".NET">.NET</option>
                            <option value="PHP">PHP</option>
                            <option value="Linux(RHSE)">Linux(RHCE)</option>
                            <option value="Robotics">Robotics</option>
                          </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <div class="input-group">
                        <div class="input-group-addon">+91</div>
                          <input name="phone" id="phone" class="form-control" type="text" placeholder="Enter Phone">
                        </div>
                      </div>
                    </div>
                  </div>
                
                <div class="form-group">
                  <label>Message</label>
                  <textarea name="message" id="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>

                <div class="row" align="center">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="checkbox" name="democlass" value="Demo class Needed"> Check if you want a demo class.
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" name="btnEnq" id="btnEnq" class="btn btn-dark btn-theme-colored2 btn-flat btn-block" data-loading-text="Please wait...">Send Your Message</button>
                </div>
              </form>
              
              <!-- Contact Form Validation-->
              <script type="text/javascript">
                $("#contact_form").validate({
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
    </section>

    <!--start Funfacts Section-->
    <?php include("counter.php") ?>

    <!-- Section: Team -->
    <?php include("tutor.php") ?>

    <!-- Divider: Testimonials -->
    <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg7.jpg" data-parallax-ratio="0.4">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase text-white title">What Our <span class="text-theme-colored2">Student </span>Say</h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase mb-0">Student and Parents Opinion</p>
            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
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

<!--               <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/2.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div> -->
<!--               <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    <img class="img-thumbnail img-circle" alt="" src="images/testimonials/3.jpg" width="110">
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Catherine Grace</h5>
                    <h6 class="text-gray-darkgray mt-5">CEO apple.inc</h6>
                  </div>
                </div>
              </div>
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
              </div> -->
              <?php } ?>
            </div> 

          </div>

        </div>


      </div>

    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title section-content">
          <div class="row">
            <div class="col-md-8">
              <h2 class="text-uppercase title">Latest <span class="text-theme-colored2">Blog </span></h2>              
              <p class="text-uppercase mb-0">See All Time Latest News</p>
              <div class="double-line-bottom-theme-colored-2"></div>
            <!-- </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8"> -->
              <div class="owl-carousel-2col owl-nav-top" data-nav="true">
                <?php 
                include('connection.php');
                $sql = mysqli_query($conn,"select * from news");

                while($row=mysqli_fetch_array($sql))
                {
                  $title = $row['Title'];
                  $detail = $row['Details'];
                  $name = $row['name1'];
                  $date = $row['date1'];
                
                ?>
                <div class="item">
                  
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/blog/1.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-detail.php"><?php echo $title;?></a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By <?php echo $name; ?></li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">
                        <a href="blog.php">
                      <?php  if(strlen($detail)>100)
                      {
                        $detail=substr($detail,0,1000).' ...........';
                      } echo $detail; ?></p>
                    </a>
                      <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog.php"> View Details</a>
                    </div>
                  </article>

                </div>
                   <?php } ?>
<!--                 <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/blog/2.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                      <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/blog/3.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                      <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/blog/4.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                      <div class="entry-date media-left text-center flip bg-theme-colored border-top-theme-colored2-3px pt-5 pr-15 pb-5 pl-15">
                        <ul>
                          <li class="font-16 text-white font-weight-600">28</li>
                          <li class="font-12 text-white text-uppercase">Feb</li>
                        </ul>
                      </div>
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="blog-single-left-sidebar.html">Post title here</a></h4>
                            <ul class="list-inline">
                              <li><i class="fa fa-user-o mr-5 text-theme-colored2"></i>By Author</li>
                              <li><i class="fa fa-thumbs-o-up mr-5 text-theme-colored2"></i>Likes</li>
                              <li><i class="fa fa-share-alt mr-5 text-theme-colored2"></i> 895 Likes</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipisi cing elit. Molestias eius illum libero dolor nobis deleniti</p>
                      <a class="btn btn-default btn-flat font-12 mt-10 ml-5" href="blog-single-left-sidebar.html"> View Details</a>
                    </div>
                  </article>
                </div> -->
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <h2 class="text-uppercase title">Contact <span class="text-theme-colored2">Us </span></h2> 
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
                      <p><?php echo $adrs;?></p>
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
              <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Map -->
    <section>
      <!-- Google Map HTML Codes -->
                  <div ><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Behind%20hotel%20pavilion%2Cpune+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe></div><br />

    </section>

    

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored2">
      <div class="container pt-10 pb-10">
        <div class="row">
          <div class="col-md-12">
            <!-- Section: Clients -->
            <div class="owl-carousel-6col clients-logo transparent text-center">
              <div class="item"> <a href="#"><img src="images/clients/w1.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w2.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w3.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w4.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w5.png" alt=""></a></div>
              <div class="item"> <a href="#"><img src="images/clients/w6.png" alt=""></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- Divider: Subscribe Newsletter -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="subscribe-newsletter">
              <div class="newsletter-form">
                <h2 class="text-theme-colored2">Subscribe Us</h2>
                <form id="mailchimp-subscription-form-footer" class="newsletter-form mt-10">
                  <div class="input-group">
                    <input type="email" id="mce-EMAIL-footer" data-height="48px" class="form-control input-sm" placeholder="Your Email" name="EMAIL" value="">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-colored btn-theme-colored text-white btn-xs m-0" data-height="48px">Subscribe</button>
                    </span>
                  </div>
                </form>

                <!-- Mailchimp Subscription Form Validation-->
                <script type="text/javascript">
                  $('#mailchimp-subscription-form-footer').ajaxChimp({
                      callback: mailChimpCallBack,
                      url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;id=49d6d30e1e'
                  });

                  function mailChimpCallBack(resp) {
                      // Hide any previous response text
                      var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                          $response = '';
                      $mailchimpform.children(".alert").remove();
                      if (resp.result === 'success') {
                          $response = '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      } else if (resp.result === 'error') {
                          $response = '<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>' + resp.msg + '</div>';
                      }
                      $mailchimpform.prepend($response);
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>


  <!-- Footer -->
<?php include("footer.php") ?>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body" align="center">
        Some text in the modal.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

<script type="text/javascript" src="js/login.js"></script>
<script type="text/javascript" src="js/enquiry.js"></script>

</body>
</html>