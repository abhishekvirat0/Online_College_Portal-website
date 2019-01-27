<?php

include '../../connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['hid'];


 			$query_update = mysqli_query($conn,"DELETE FROM facultysubjectdetails WHERE id='$id'");

 			echo "1"; 				
	}


?>

