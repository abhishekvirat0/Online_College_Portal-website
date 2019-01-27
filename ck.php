<?php

include 'connection.php';

if(!isset($_SESSION)) 
{ 
	session_start(); 
} 


$ck=0;

if(isset($_SESSION["uname"]))
{
	$uname = $_SESSION["uname"];
	$pass = $_SESSION["pass"];

	$get = mysqli_query($conn,"SELECT * FROM registration1 WHERE emailid='$uname' and pass='$pass'");
	if($row = mysqli_fetch_array($get))
	{
		$ck=1;
		// $fname=$row['FirstName']; to show data on different pages we use this 
		$uid = $row['uid'];
		$role=$row['role'];
		$emailid = $row['emailid'];
		
	}
	$get2 = mysqli_query($conn,"SELECT * FROM registration2 WHERE uid='$uid'");
	while($row2 = mysqli_fetch_array($get2))	
	{
		$fname=$row2['fname'];
	}
}
?>
