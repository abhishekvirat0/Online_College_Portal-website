<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$exam = $_POST['exam'];

		$query_update = mysqli_query($conn,"UPDATE exampattern SET course='$course_nm', Name='$exam' WHERE cid='$id'");

		echo "1";
	}

?>