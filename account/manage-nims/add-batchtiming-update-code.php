<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$center_nm = $_POST['center_nm'];
		$batch_timing = $_POST['batch_timing'];

		$query_update = mysqli_query($conn,"UPDATE batchtiming SET CenterName='$center_nm', Name='$batch_timing' WHERE Id='$id'");

		echo "1";
	}

?>