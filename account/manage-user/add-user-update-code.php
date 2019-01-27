<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['id'];
		$lid1 = $_POST['lid1'];
		$pass1 = $_POST['pass1'];
		$role1 = $_POST['role1'];
		$rid1 = $_POST['rid1'];
	

		$query_update = mysqli_query($conn,"UPDATE user_master SET lid='$lid1',pass='$pass1',role='$role1',rid='$rid1' WHERE id='$id'");

		echo "1";
	}

?>