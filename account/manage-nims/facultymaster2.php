          <?php 

function faculty($cid,$fname,$edu,$cno,$imginp,$add,$payment)
{

include '../../connection.php';
if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 199999999) )
        {
          copy($_FILES['img']['tmp_name'],"facultyimages/".$imginp);
          
$query="CALL insertfaculty('".$cid."','".$fname."','".$edu."','".$cno."','".$imginp."','".$add."','".$payment."')";
$ans=mysqli_query($conn,$query);
  return $ans;


       
        }else{
          
        }
                  

}

 
  
}



if(isset($_POST['btnsubmit']))
{
  $cid=$_POST["txtcid"];
  $fname=$_POST["txtfname"];
  $edu=$_POST["txteducation"];
  $cno=$_POST["txtcno"];
  $imginp = $_FILES['img']['name'];
  $add=$_POST["txtadd"];
  $payment=$_POST["txtpayment"];

  $test=faculty($cid,$fname,$edu,$cno,$imginp,$add,$payment);

  if($test!='')
  {

?>

    <script type="text/javascript">
       alert("Data Inserted");

       window.location.href="facultymaster.php";
    </script>

<?php
 
  }
}

?>