<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$adrs = $_POST['adrs'];
		$cont = $_POST['cont'];
		$email = $_POST['email'];

		$query_update = mysqli_query($conn,"UPDATE address SET adrs='$adrs',cont='$cont',email='$email' WHERE id='$id'");


		echo "1";
	}

?>