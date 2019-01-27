<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$desc1 = $_POST['desc1'];
		$act = $_POST['act'];
	

		$query_update = mysqli_query($conn,"UPDATE highlighter SET desc1='$desc1',active='$act' WHERE id='$id'");

		echo "1";
	}

?>