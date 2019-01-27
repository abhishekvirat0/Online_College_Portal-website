<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$class_nm = $_POST['class_nm'];
		$branch_nm = $_POST['branch_nm'];
		$subject = $_POST['subject'];
		$fees = $_POST['fees'];

		$query_update = mysqli_query($conn,"UPDATE subjects SET Course='$course_nm', Class='$class_nm', Branch='$branch_nm', Subject='$subject', Fees='$fees' WHERE Id='$id'");

		echo "1";
	}

?>