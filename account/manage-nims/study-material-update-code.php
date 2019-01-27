<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$study_material = $_POST['study_material'];

		$query_update = mysqli_query($conn,"UPDATE studymaterial SET Name='$study_material' WHERE cid='$id'");

		echo "1";
	}

?>