<?php 
include("../connection.php");
?>

<?php

	if (isset($_POST['btnRegister']))
{

	   $name = $_POST['name'];
	   $dob = $_POST['dob'];
	   $sub = $_POST['sub'];
	   $num = $_POST['num'];
	   $phone = $_POST['phone']; 
	   $address = $_POST['address'];
	   $image = $_FILES['file']['name'];
  
  $fid = substr(str_shuffle('0123456789') , 0 , 16 );

  $img=$_FILES["file"]["name"];

  if ($_FILES["file"]["error"] > 0) 
  {
    $error = $_FILES["file"]["error"];
  }
  else if (($_FILES["file"]["type"] == "application/pdf")|| ($_FILES["file"]["type"] == "application/msword") || ($_FILES["file"]["type"] == "application/vnd.openxmlformats-officedocument.wordprocessingml.document") && ($_FILES["file"]["size"] < 20000000)) 
  {

    $filename = $_FILES["file"]["tmp_name"];
    $targetdir = "application/";
    $targetdir =$targetdir.basename($_FILES['file']['name']);
    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetdir))
{
    $query="INSERT INTO application(s_name,s_dob,s_sub,s_num,s_phone,s_address,s_res) VALUES ('$name','$dob','$sub','$num','$phone','$address','$image')";

    mysqli_query($conn,$query);

    ?>
    <script type="text/javascript">
      successAlert("Flight Ticket Uploaded");
      setTimeout(function(){
       window.location.href='careers.php';
     }, 1000);
   </script>
   <?php
 }}
 else 
 {
  ?>
  <script type="text/javascript">
    errorAlert("Not Applied Successfully!");
    setTimeout(function(){
     window.location.href='careers.php';
   }, 1000);
 </script>
 <?php
}



}

?>
