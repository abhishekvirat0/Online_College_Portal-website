<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$state_nm = $_POST['state_nm'];

		$query_update = mysqli_query($conn,"UPDATE states SET Name='$state_nm' WHERE Id='$id'");

		echo "1";
	}

?>