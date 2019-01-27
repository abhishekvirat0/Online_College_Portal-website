<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$class_nm = $_POST['class_nm'];

		$query_update = mysqli_query($conn,"UPDATE class SET Name='$class_nm', Course='$course_nm' WHERE cid='$id'");

		echo "1";
	}

?>