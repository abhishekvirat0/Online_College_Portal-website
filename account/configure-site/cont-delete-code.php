<?php

include '../../connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$cid = $_POST['cid'];


 			$query_update = mysqli_query($conn,"DELETE FROM contactus WHERE cid='$cid'");

 			echo "1"; 				
	}

?>

