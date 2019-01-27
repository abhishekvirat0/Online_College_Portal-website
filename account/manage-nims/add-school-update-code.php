<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$board_nm = $_POST['board_nm'];
		$school = $_POST['school'];

		$query_update = mysqli_query($conn,"UPDATE college SET course='$course_nm', board='$board_nm', school='$school' WHERE ID='$id'");

		echo "1";
	}

?>