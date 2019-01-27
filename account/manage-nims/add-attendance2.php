<?php 
include '../../connection.php';

	$courseid=$_REQUEST['courseid'];
	$branchid=$_REQUEST['branchid'];
	$attend=$_REQUEST['attend'];
	$date1=$_REQUEST['date1'];
	$id1=$_REQUEST['id1'];
	$fname=$_REQUEST['fname'];
	$mname=$_REQUEST['mname'];
	$class1=$_REQUEST['class1'];

	mysqli_query($conn,"INSERT INTO studentattendance (course,branch,id1,fname,mname,class,attend,date1) values ('$courseid','$branchid','$id1','$fname','$mname','$class1','$attend','$date1')");
	echo "1";
 ?>