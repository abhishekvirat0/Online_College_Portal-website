<?php include'connection.php';?>
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
     <title>Student Register</title>

<?php  
      include 'assets/assets-css.php';
?>

<!-- <?php  
      // include 'assets/assets-js.php';
?> -->

 <script type="text/javascript">
      function display()
      {
        setTimeout(function(){
          $('#login').load('divsecond.php');
        });

      }

      function display2()
      {
        setTimeout(function(){
          $('#login').load('divthird.php');
        });

      }

      function display3()
      {
        setTimeout(function(){
          $('#login').load('divfourth.php');
        });

      }

      function display4()
      {
        setTimeout(function(){
          $('#login').load('divfifth.php');
        });

      }
    </script>

  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

<?php  
      include 'navbar.php';
?>

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2>Student Registration</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       
      
       <div class="row" style="margin-left: 225px" >
         <div class="col-lg-8 col-md-8 col-sm-8" >
           <div class="contact_form wow fadeInLeft" id="login" name="login">
              <form class="submitphoto_form" method="post" enctype="multipart/form-data">
                        <?php
                                     include 'connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(uid)+1 FROM registration1");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
              <input type="text" class="wp-form-control wpcf7-text" id="txtuid" name="txtuid" readonly="true" value="<?php echo $highest_id; ?>" placeholder="Choose User Id">
                <input type="password" class="wp-form-control wpcf7-text" id="txtpass" name="txtpass" placeholder="Enter Your Password">   
                <input type="password" class="wp-form-control wpcf7-text" id="txtcpass" name="txtcpass" placeholder="Enter Your Confirm Password"> 
                <input type="number" class="wp-form-control wpcf7-number" id="txtmno" name="txtmno" placeholder="Enter Your Students Mobile Number">
                <input type="email" class="wp-form-control wpcf7-email" id="txtemail" name="txtemail" placeholder="Enter Your Email Id">
                <input type="file" name="img" id="img" class="wp-form-control wpcf7-file">
                <input type="hidden" name="txtrole" id="txtrole" value="student">        
        
           <input type="submit" value="Submit" class="wpcf7-submit" id="btnsubmit1" name="btnsubmit1" >
              </form>

           </div>


         </div>

    </section>
<?php 

function yo($uid,$pass,$mno,$email,$image1,$role)
{

   $connect=mysqli_connect("localhost","root","","mynims");

if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 199999999) )
        {
          copy($_FILES['img']['tmp_name'],"userimages/".$image1);
          
          $sql="CALL insertreg1 ('".$uid."','".$pass."','".$mno."','".$email."','".$image1."','".$role."')";
  $query=mysqli_query($connect,$sql);
  return $query;
        }else{        }
}}

function reg2($uid2,$fname,$mname,$dob,$smno,$gender,$bloodgroup,$category,$nationality,$year)
{
  $connect=mysqli_connect("localhost","root","","mynims");
  $sql2="CALL insertreg2 ('".$uid2."','".$fname."','".$mname."','".$dob."','".$smno."','".$gender."','".$bloodgroup."','".$category."','".$nationality."','".$year."')";
  $query2=mysqli_query($connect,$sql2);
  return $query2;
}

function reg3($uid3,$fathername,$mothername,$fmno,$mno,$femail,$memail,$moccu,$foccu,$fdesi,$mdesi,$aincome,$ecno,$add1,$city,$state,$country,$pcode,$fsignature,$msignature,$b1name,$b1age,$b1edu,$sis1name,$sis1age,$sis1edu,$bro2name,$bro2age,$bro2edu,$sis2name,$sis2age,$sis2edu)
{
  $connect=mysqli_connect("localhost","root","","mynims");
  $sql3="CALL insertreg31 ('".$uid3."','".$fathername."','".$mothername."','".$fmno."','".$mno."','".$femail."','".$memail."','".$moccu."','".$foccu."','".$fdesi."','".$mdesi."','".$aincome."','".$ecno."','".$add1."','".$city."','".$state."','".$country."','".$pcode."','".$fsignature."','".$msignature."','".$b1name."','".$b1age."','".$b1edu."','".$sis1name."','".$sis1age."','".$sis1edu."','".$bro2name."','".$bro2age."','".$bro2edu."','".$sis2name."','".$sis2age."','".$sis2edu."')";
  $query3=mysqli_query($connect,$sql3);
  return $query3;
  
}

function reg4($uid4,$exampattern,$coursetype,$studymedium,$coursename,$class,$subject,$branch,$school,$city,$branchtime,$studycenter,$board,$year)
{
  $connect=mysqli_connect("localhost","root","","mynims");
  $sql4="CALL insertreg4 ('".$uid4."','".$exampattern."','".$coursetype."','".$studymedium."','".$coursename."','".$class."','".$subject."','".$branch."','".$school."','".$city."','".$branchtime."','".$studycenter."','".$board."','".$year."')";
  $query4=mysqli_query($connect,$sql4);
  return $query4;
}



function reg5($uid5,$lexam,$lscl,$lclass,$eborad,$lresult,$attempt,$maths,$m1,$m2,$m3,$science,$english,$xag,$xpa,$xiag,$xipa,$xiiag,$xiipa,$poag,$popa,$po2ag,$po2pa,$beag,$bepa,$ex,$reference,$personname,$relative)
{
  $connect=mysqli_connect("localhost","root","","mynims");
  $sql5="CALL insertreg5 ('".$uid5."','".$lexam."','".$lscl."','".$lclass."','".$eborad."','".$lresult."','".$attempt."','".$maths."','".$m1."','".$m2."','".$m3."','".$science."','".$english."','".$xag."','".$xpa."','".$xiag."','".$xipa."','".$xiiag."','".$xiipa."','".$poag."','".$popa."','".$po2ag."','".$po2pa."','".$beag."','".$bepa."','".$ex."','".$reference."','".$personname."','".$relative."')";
  $query5=mysqli_query($connect,$sql5);
  return $query5;
}


if(isset($_POST['btnsubmit1']))
{
$uid=$_POST["txtuid"];
$pass=$_POST["txtpass"];
$cpass=$_POST["txtcpass"];
$mno=$_POST["txtmno"];
$email=$_POST["txtemail"];
$image1 = $_FILES['img']['name'];
$role=$_POST["txtrole"];

$test=yo($uid,$pass,$mno,$email,$image1,$role);

if($test!='')
{
  echo '<script>display();</script>'; 
 
}
}

if(isset($_POST['btnsubmit2']))
{
$uid2=$_POST["txtuid2"];
$fname=$_POST["txtfname"];
$mname=$_POST["txtmname"];
$date=$_POST["txtdate"];
$month=$_POST["txtmonth"];
$year=$_POST["txtyear"];
$smno=$_POST["txtsmno"];
$gender=$_POST["gender"];
$bloodgroup=$_POST["bloodgroup"];
$category=$_POST["category"];
$nationality=$_POST["nationality"];

$dob=$date . "-" . $month;

$test2=reg2($uid2,$fname,$mname,$dob,$smno,$gender,$bloodgroup,$category,$nationality,$year);

if($test2!='')
{
  echo '<script>display2();</script>'; 
 
}
}

if(isset($_POST['btnsubmit3']))
{
$uid3=$_POST["txtuid3"];
$fathername=$_POST["txtfathername"];
$mothername=$_POST["txtmothername"];
$fmno=$_POST["txtfmno"];
$mno=$_POST["txtmmno"];
$femail=$_POST["txtfemail"];
$memail=$_POST["txtmemail"];
$moccu=$_POST["txtmoccu"];
$foccu=$_POST["txtfoccu"];
$fdesi=$_POST["txtfdesi"];
$mdesi=$_POST["txtmdesi"];
$aincome=$_POST["txtaincome"];
$ecno=$_POST["txtecno"];
$add1=$_POST["txtadd"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$pcode=$_POST["txtpcode"];
$fsignature=$_POST["txtfsignature"];
$msignature=$_POST["txtmsignature"];
$b1name=$_POST["txtb1name"];
$b1age=$_POST["txtb1age"];
$b1edu=$_POST["txtb1edu"];
$sis1name=$_POST["txtsis1name"];
$sis1age=$_POST["txtsis1age"];
$sis1edu=$_POST["txtsis1edu"];
$bro2name=$_POST["txtbro2name"];
$bro2age=$_POST["txtbro2age"];
$bro2edu=$_POST["txtbro2edu"];
$sis2name=$_POST["txtsis2name"];
$sis2age=$_POST["txtsis2age"];
$sis2edu=$_POST["txtsis2edu"];



$test3=reg3($uid3,$fathername,$mothername,$fmno,$mno,$femail,$memail,$moccu,$foccu,$fdesi,$mdesi,$aincome,$ecno,$add1,$city,$state,$country,$pcode,$fsignature,$msignature,$b1name,$b1age,$b1edu,$sis1name,$sis1age,$sis1edu,$bro2name,$bro2age,$bro2edu,$sis2name,$sis2age,$sis2edu);

if($test3!='')
{
  echo '<script>display3();</script>';
}
}

if(isset($_POST['btnsubmit4']))
{
$uid4=$_POST["txtuid4"];
$exampattern=$_POST["exampattern"];
$coursetype=$_POST["coursetype"];
$studymedium=$_POST["studymedium"];
$coursename=$_POST["coursename"];
$class=$_POST["txtclass"];
$subject=$_POST["txtsubject"];
$branch=$_POST["txtbranch"];
$school=$_POST["txtschool"];
$city=$_POST["city"];
$branchtime=$_POST["branchtime"];
$studycenter=$_POST["studycenter"];
$board=$_POST["board"];
$year=$_POST["txtyear"];

$test4=reg4($uid4,$exampattern,$coursetype,$studymedium,$coursename,$class,$subject,$branch,$school,$city,$branchtime,$studycenter,$board,$year);

if($test4!='')
{
  echo '<script>display4();</script>'; 
 
}
}

if(isset($_POST['btnsubmit5']))
{
$uid5=$_POST["txtuid5"];
$lexam=$_POST["txtlexam"];
$lscl=$_POST["txtlscl"];
$lclass=$_POST["txtlclass"];
$eborad=$_POST["txteborad"];
$lresult=$_POST["lresult"];
$attempt=$_POST["attempt"];
$maths=$_POST["maths"];
$m1=$_POST["m1"];
$m2=$_POST["m2"];
$m3=$_POST["m3"];
$science=$_POST["science"];
$english=$_POST["english"];
$xag=$_POST["xag"];
$xpa=$_POST["xpa"];
$xiag=$_POST["xiag"];
$xipa=$_POST["xipa"];
$xiiag=$_POST["xiiag"];
$xiipa=$_POST["xiipa"];
$poag=$_POST["poag"];
$popa=$_POST["popa"];
$po2ag=$_POST["po2ag"];
$po2pa=$_POST["po2pa"];
$beag=$_POST["beag"];
$bepa=$_POST["bepa"];
$ex=$_POST["txtex"];
$reference=$_POST["txtreference"];
$personname=$_POST["txtpersonname"];
$relative=$_POST["txtrelative"];

$test5=reg5($uid5,$lexam,$lscl,$lclass,$eborad,$lresult,$attempt,$maths,$m1,$m2,$m3,$science,$english,$xag,$xpa,$xiag,$xipa,$xiiag,$xiipa,$poag,$popa,$po2ag,$po2pa,$beag,$bepa,$ex,$reference,$personname,$relative);

if($test5!='')
{
  echo '<script>alert("Data Inserted , Now you can Login");</script>'; 
 
}
}
?>

    <!--=========== END CONTACT SECTION ================-->

    
    <!--=========== BEGIN FOOTER SECTION ================-->
<?php include 'footer.php';?>
    <!--=========== END FOOTER SECTION ================--> 

  



  </body>
</html><!DOCTYPE html>
<html lang="en">
  <head>
  
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>My Nims</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

  
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    
  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>


  </body>
</html>       