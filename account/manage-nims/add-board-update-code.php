<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$course_id = $_POST['course_id'];
		$course_nm = $_POST['course_nm'];
		$board_nm = $_POST['board_nm'];

		$query_update = mysqli_query($conn,"UPDATE university SET Name='$course_nm', Boardname='$board_nm' WHERE ID='$course_id'");

		echo "1";
	}

?>