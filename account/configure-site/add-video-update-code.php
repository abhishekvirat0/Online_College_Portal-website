<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$url = $_POST['url2'];
		$title = $_POST['title'];
		$speak = $_POST['speak'];
	

		$query_update = mysqli_query($conn,"UPDATE ranker SET url='$url',title='$title',speak='$speak' WHERE vid='$id'");

		echo "1";
	}

?>