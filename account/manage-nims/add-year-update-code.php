<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$year1 = $_POST['year1'];
	

		$query_update = mysqli_query($conn,"UPDATE years SET Year='$year1' WHERE cid='$id'");

		echo "1";
	}

?>