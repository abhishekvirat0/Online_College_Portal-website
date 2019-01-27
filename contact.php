<?php 
  include("navbar.php");
  include("connection.php"); 
?>
<html>
<head>
</head>
<body>


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
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-theme-colored-7" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-120 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row"> 
            <div class="col-md-6">
              <h2 class="text-theme-colored2 font-36">About</h2>
              <ol class="breadcrumb text-left mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Current Page</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
      <div class="container pt-50 pb-70">
        <div class="row pt-10">
          <div class="col-md-5">
            <div ><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Behind%20hotel%20pavilion%2Cpune+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Add map to website</a></iframe></div><br />
          </div>
          <div class="col-md-7">
            <h4 class="mt-0 mb-30 line-bottom-theme-colored-2">Interested in discussing?</h4>
            <!-- Contact Form -->
            <form id="contact_form" name="contact_form" class="" action="contact.php" method="post">
              <?php
              
              $result = mysqli_query($conn,"SELECT MAX(cid)+1 FROM contactus");
              $row = mysqli_fetch_row($result);
              $highest_id = $row[0];
              ?>

              <div class="row">
                <div class="col-sm-6">
                  <input type="hidden" value="<?php echo  $highest_id ; ?>" class="wp-form-control wpcf7-text" id="txtcid" name="txtcid" >
                  <div class="form-group mb-30">
                    <input id="txtuname" name="txtuname" class="form-control" type="text" placeholder="Enter Name" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="txtemail" name="txtemail" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>                
<!--               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-30">
                    <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div> -->

              <div class="form-group mb-30">
                <textarea id="txtmsg" name="txtmsg" class="form-control required" rows="7" placeholder="Enter Message"></textarea>
              </div>
              <div class="form-group">
                <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" class="btn btn-flat btn-default bg-hover-theme-colored mr-5" id="btncontact" name="btncontact">Send your message</button>
                <button type="reset" class="btn btn-flat btn-theme-colored2 bg-hover-theme-colored">Reset</button>
              </div>
            </form>
          </div>
        </div>
        <?php 
        $query = mysqli_query($conn,"select * from address");
        while($row = mysqli_fetch_array($query))
        {
          $adrs = $row['adrs'];
          $cont = $row['cont'];
          $email = $row['email'];

          ?>
          <div class="row mt-60">
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                <i class="fa fa-phone font-36 mb-10 text-theme-colored2"></i>
                <h4>Call Us</h4>
                <h6 class="text-gray">Phone: <?php echo $cont;?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60" >
                <i class="fa fa-map-marker font-36 mb-10 text-theme-colored2"></i>
                <h4>Address</h4>
                <h6 class="text-gray"><?php echo $adrs;?></h6>
              </div>
            </div>
            <div class="col-sm-12 col-md-4">
              <div class="contact-info text-center bg-silver-light border-1px pt-60 pb-60">
                <i class="fa fa-envelope font-36 mb-10 text-theme-colored2"></i>
                <h4>Email</h4>
                <h6 class="text-gray"><?php echo $email;?></h6>
              </div>
            </div>
          <?php }?>
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


<script type="text/javascript">

  $(document).ready(function() {  

    $('#btncontact').click(function(event) {

     event.preventDefault();

     var cid=$('#txtcid').val();
     var name = $('#txtuname').val();
     var email = $('#txtemail').val();
     var mesg= $('#txtmsg').val();

     if(name=='') 
     {
      $('.modal-body').html("Please Enter Your User Name ");
      $("#myModal").modal();
    }
    else if(email=='') 
    {
      $('.modal-body').html("Please Enter Your Email Id ");
      $("#myModal").modal();
    }
    else if (mesg=='') 
    {
      $('.modal-body').html("Please Enter Your Message ");
      $("#myModal").modal();
    }
    else
    {
      $.ajax({
       type: 'POST',
       url: 'contact/contact2.php',
       data: ({cid:cid, name:name, email: email , mesg: mesg }),
       success: function(response3) 
       {
      // alert(response3);
      if(response3 == "1")
      {  
        $('.modal-body').html("Message send Successfully");
        $("#myModal").modal();   
        $('#txtcid').val('');
        $('#txtuname').val(''); 
        $('#txtemail').val('');
        $('#txtmsg').val('');  
      }
      else
      {
       $('.modal-body').html("Message Not send");
       $("#myModal").modal();
     }
   }
 });
    }
    

  });
  });
</script>
<script type="text/javascript" src="js/login.js"></script>
  <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
                
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body" align="center">
                    <!-- Please login first to access dashboard. -->
                    If you are a student then <a href="">Click here</a><br>
                    If you are a parent then <a href="">Click here</a><br>                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

</body>
</html>