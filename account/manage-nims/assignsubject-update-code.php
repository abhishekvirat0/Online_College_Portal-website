<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course = $_POST['course'];
		$class2 = $_POST['class2'];
		$branch = $_POST['branch'];
		$faculty = $_POST['faculty'];
		$subject = $_POST['subject'];
		$dt = $_POST['dt'];

		$query_update = mysqli_query($conn,"UPDATE facultysubjectdetails SET course='$course', class='$class2', branch='$branch', faculty='$faculty', subject='$subject', date1='$dt' WHERE id='$id'");

		echo "1";
	}

?>