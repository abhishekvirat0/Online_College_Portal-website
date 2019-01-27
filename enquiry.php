<?php

include("connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$c_query = $_POST['c_query'];
	$message = $_POST['message'];
	$democlass = $_POST['democlass'];

	$query = "INSERT INTO enquiry(p_name,p_email,p_phone,p_query,p_message,p_democlass) values ('$name','$email','$phone','$c_query','$message','$democlass')";
	if(mysqli_query($conn,$query))
	{
		echo "1";
	}
	else
	{
		echo "0";
	}
}
?>