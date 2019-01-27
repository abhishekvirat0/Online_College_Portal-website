<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$vurl = $_POST['vurl'];
		$title = $_POST['title'];
		$desc1 = $_POST['desc1'];
	

		$query_update = mysqli_query($conn,"UPDATE managevideo SET vurl='$vurl',title='$title',desc1='$desc1' WHERE id='$id'");

		echo "1";
	}

?>