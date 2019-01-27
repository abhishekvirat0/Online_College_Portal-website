<?php

include '../../connection.php';


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$cid = $_POST['cid'];


 			$query_update = mysqli_query($conn,"DELETE FROM councel WHERE id='$cid'");

 			echo "1"; 				
	}

?>

