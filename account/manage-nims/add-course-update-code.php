<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];

		$query_update = mysqli_query($conn,"UPDATE course SET Name='$course_nm' WHERE Id='$id'");

		echo "1";
	}

?>