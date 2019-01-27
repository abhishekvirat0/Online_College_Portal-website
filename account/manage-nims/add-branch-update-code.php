<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$course_nm = $_POST['course_nm'];
		$class_nm = $_POST['class_nm'];
		$branch_nm = $_POST['branch_nm'];

		$query_update = mysqli_query($conn,"UPDATE branch SET Course='$course_nm', Class='$class_nm', BranchName='$branch_nm' WHERE BId='$id'");

		echo "1";
	}

?>