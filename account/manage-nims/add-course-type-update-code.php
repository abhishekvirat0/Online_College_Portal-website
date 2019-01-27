<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$course_type = $_POST['course_type'];

		$query_update = mysqli_query($conn,"UPDATE coursetype SET Course='$course_nm', Name='$course_type' WHERE cid='$id'");

		echo "1";
	}

?>