<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$designation = $_POST['designation'];
		$occupation = $_POST['occupation'];

		$query_update = mysqli_query($conn,"UPDATE designation SET Name='$designation', Occupation='$occupation' WHERE cid='$id'");

		echo "1";
	}

?>