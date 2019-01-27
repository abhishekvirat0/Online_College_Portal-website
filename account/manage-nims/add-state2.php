<?php

include '../../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
		// $connect=mysqli_connect("localhost","root","","mynims");
		$Id=$_POST['Id'];
        $Name=$_POST['Name'];
       

	$query = "CALL AddState('".$Id."','".$Name."')";
	$ans = mysqli_query($conn,$query);
	echo "1";
}
?>