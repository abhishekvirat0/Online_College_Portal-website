<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$city_nm = $_POST['city_nm'];
		$center_nm = $_POST['center_nm'];

		$query_update = mysqli_query($conn,"UPDATE centers SET CityName='$city_nm', Name='$center_nm' WHERE ID='$id'");

		echo "1";
	}

?>