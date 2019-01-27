<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$title1 = $_POST['title1'];
		$detail1 = $_POST['detail1'];
		$date1 = $_POST['date1'];
	

		$query_update = mysqli_query($conn,"UPDATE news SET Title='$title1',Details='$detail1',date1='$date1' WHERE Id='$id'");

		echo "1";
	}

?>