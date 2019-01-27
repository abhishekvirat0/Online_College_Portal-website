<?php

include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		// $connect=mysqli_connect("localhost","root","","mynims");
		$cid=$_POST['cid'];
        $name=$_POST['name'];
        $email=$_POST['email'];
		$mesg=$_POST['mesg'];

	$query = "CALL insertcontact('".$cid."','".$name."','".$email."','".$mesg."')";
	$ans = mysqli_query($conn,$query);
	echo "1";
}
?>