<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$state_nm = $_POST['state_nm'];
		$city_nm = $_POST['city_nm'];

		$query_update = mysqli_query($conn,"UPDATE city SET StateName='$state_nm', Name='$city_nm' WHERE Id='$id'");

		echo "1";
	}

?>