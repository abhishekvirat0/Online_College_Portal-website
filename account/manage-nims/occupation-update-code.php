<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$occupation = $_POST['occupation'];
		$chkIsMother = $_POST['chkIsMother'];

		$query_update = mysqli_query($conn,"UPDATE occupation SET Name='$occupation', IsMother='$chkIsMother' WHERE id='$id'");

		echo "1";
	}

?>