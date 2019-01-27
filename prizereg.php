
<?php  

 include 'connection.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>MyNim's : Prize Claim Registration</title>

<?php  
      include 'assets/assets-css.php';
?>

  
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


    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

<?php  
      include 'navbar/navbar.php';
?>

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Prize Claim Registration</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">

<!--               <h2 class="title_two">We are Wpf Degree</h2>
              <span></span> 
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
            </div> -->
          
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form class="submitphoto_form" action="prizereg.php" method="post">
      <!--         <?php
             

              // $result = mysqli_query($conn,"SELECT MAX(FeedbackID)+1 FROM feedback");
              // $row = mysqli_fetch_row($result);
              // $highest_id = $row[0];
              ?> -->
               <!-- <input type="hidden" class="wp-form-control wpcf7-text" value="<?php  // echo $highest_id;  ?>" name="feedbackid" id="feedbackid" placeholder="Feedback ID"> -->
              
<?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='course' name='course' class='wp-form-control wpcf7-select'>";
echo "<option value='Select Course'>Select Course</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
              

                           <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Subject FROM subjects ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='subject' name='subject' class='wp-form-control wpcf7-select'>";
echo "<option value='Select Subject'>Select Subject</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Subject'] ."'>" . $row['Subject'] ."</option>";
}
echo "</select>";

        ?>

                <input type="text" class="wp-form-control wpcf7-text" id="name" name="name" placeholder="Full name">
                <select  class="wp-form-control wpcf7-select" id="year">
                   <option value="Select Year">Exam Year</option>
                  <option>2000</option>
                  <option>2001</option>
                  <option>2002</option>
                  <option>2003</option>
                  <option>2004</option>
                  <option>2005</option>
                  <option>2006</option>
                  <option>2007</option>
                  <option>2008</option>
                  <option>2009</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                  <option>2021</option>
                  <option>2022</option>
                  <option>2023</option>
                  <option>2024</option>
                  <option>2025</option>
                  <option>2026</option>
                  <option>2027</option>
                  <option>2028</option>
                  <option>2029</option>
                  <option>2030</option>
                  <option>2031</option>
                  <option>2032</option>
                  <option>2033</option>

                </select>
      
                <?php
                date_default_timezone_get("India/Mumbai");
                $date1 = date('d/m/y', time());

                ?>  
                 <input type="date" class="wp-form-control wpcf7-date" value="<?php echo $date1;  ?>" id="date1" name="date1" placeholder="Date">        
                <input type="submit" value="Submit" id="btnsubmit" name="btnsubmit" class="wpcf7-submit">
              </form>
           </div>
         </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
<!--     <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=200+Lincoln+Ave,+Salinas,+CA,+USA&amp;aq=&amp;sll=30.977609,-95.712891&amp;sspn=42.157377,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=200+Lincoln+Ave,+Salinas,+California+93901-2639&amp;t=m&amp;z=14&amp;ll=36.674837,-121.657691&amp;output=embed"></iframe>
    </section> -->
    <!--=========== END GOOGLE MAP SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Tutors</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Forum</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 2</a></li>
                  <li><a href="#">Link 3</a></li>
                  <li><a href="#">Link 4</a></li>
                  <li><a href="#">Link 5</a></li>
                </ul>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="http://wpfreeware.com/" rel="nofollow">Wpfreeware.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

<?php  
      include 'assets/assets-js.php';
?>

<script type="text/javascript">

  $(document).ready(function() {  

        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    // var feedbackid=$('#feedbackid').val();
   
    var course = $('#course').val();
    var subject = $('#subject').val();
    var name = $('#name').val();
    var year = $('#year').val();
    var date1 = $('#date1').val();


   if(course=='Select Course') 
    {
      $('.modal-body').html("Please Select Your Course ");
      $("#myModal").modal();
    }
    else if(subject=='Select Subject') 
    {
      $('.modal-body').html("Please Select Your Subject ");
      $("#myModal").modal();
    }
    else if(name=='') 
    {
      $('.modal-body').html("Please Enter Your Name ");
      $("#myModal").modal();
    }
    else if(year=='Select Year') 
    {
      $('.modal-body').html("Please Select Your Year ");
      $("#myModal").modal();
    }
    else if(date1=='') 
    {
      $('.modal-body').html("Please Select Your Date ");
      $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'prizereg2.php',
         data: ({course:course, subject:subject, name:name,  year: year, date1: date1 }),
         success: function(response) 
        {
          if(response == "1" || response == 1)
          {  
            $('.modal-body').html("Prize Claim Registration Added");
              $("#myModal").modal();   
              setTimeout(function(){
                window.location.href='prizereg.php';
              }, 1000);
              
          }
          else
          {
             $('.modal-body').html("Prize Claim Registration Not Added");
             $("#myModal").modal();
          }
    }
  });
}
    
 
});
    });
    </script>




  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>