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
              <h2 class="text-theme-colored2 font-36">Online Exam</h2>
              <h3><span style="color:white;">All the best wishes with you </span><span class="text-theme-colored2"><b>Student Name</b><span></h3>
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
            <iframe src="countdown/countdown.php" scrolling="no"></iframe>
            <div class="col-md-12">
              <div class="col-md-12" align="center">
                <table class="mt-15 wow flipInX " data-wow-duration="1.5s" data-wow-offset="10" width="100%" style="border: 1px solid black; border-radius: 10px;">
                  <tr>
                    <td align="center" width="10%" style="padding: 20px;"><h2>Q1</h2></td>
                    <td align="center" width="80%" style="padding: 20px;"><h4>Who is the Prime Minister of India?</h4></td>
                    <td align="center" width="10%" style="padding: 20px;"></td>
                  </tr>
                </table>
              </div>

              <div class="col-md-6 mt-15">
                  <button class="wow fadeInLeftBig btn btn-default btn-theme-colored btn-xl btn-block" data-wow-duration="0.5s" data-wow-offset="10">Rahul Gandhi</button>
              </div>
              <div class="col-md-6 mt-15">
                    <button class="wow fadeInRightBig btn btn-default btn-theme-colored btn-xl btn-block" data-wow-duration="0.5s" data-wow-offset="10">Narendra Modi</button>
              </div>
              <div class="col-md-6 mt-15">
                    <button class="wow fadeInLeftBig btn btn-default btn-theme-colored btn-xl btn-block" data-wow-duration="0.5s" data-wow-offset="10">Dr Manmohan Singh</button>
              </div>
              <div class="col-md-6 mt-15">
                    <button class="wow fadeInRightBig btn btn-default btn-theme-colored btn-xl btn-block" data-wow-duration="0.5s" data-wow-offset="10">Arvid Kejariwal</button>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section> 

    <section>
      <div class="container mt-30 mb-30 pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
              <!-- start question form -->
            
                     <div class="modal-header">
                        <h4><span class="label btn-theme-colored2" id="qid">Q2</span> Who is the Prime Minister of India?</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-xs-3 col-xs-offset-5">
                           <div id="loadbar" style="display: none;">
                              <div class="blockG" id="rotateG_01"></div>
                              <div class="blockG" id="rotateG_02"></div>
                              <div class="blockG" id="rotateG_03"></div>
                              <div class="blockG" id="rotateG_04"></div>
                              <div class="blockG" id="rotateG_05"></div>
                              <div class="blockG" id="rotateG_06"></div>
                              <div class="blockG" id="rotateG_07"></div>
                              <div class="blockG" id="rotateG_08"></div>
                          </div>
                      </div>

                      <div class="quiz" id="quiz" data-toggle="buttons">
                       <label class="element-animation1 btn btn-lg btn-danger btn-block" data-wow-duration="0.5s" data-wow-offset="10"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">Rahul Gandhi</label>
                       <label class="element-animation2 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">Dr Manmohan Singh</label>
                       <label class="element-animation3 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">Narendra Modi</label>
                       <label class="element-animation4 btn btn-lg btn-danger btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">Arvind Kejariwal</label>
                   </div>
               </div>
               <div class="modal-footer text-muted">
                <span id="answer"></span>
            </div>
            </div>
            </div>
            </div>
            

            <!-- close question form -->
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