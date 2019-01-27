<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$name1 = $_POST['name1'];
	

		$query_update = mysqli_query($conn,"UPDATE referencetype SET Name='$name1' WHERE cid='$id'");

		echo "1";
	}

?>