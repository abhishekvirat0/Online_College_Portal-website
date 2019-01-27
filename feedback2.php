<?php

include 'connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

    	$feedbackid=$_POST["feedbackid"];
		$name=$_POST["name"];
		$course=$_POST["course"];
		$mobile=$_POST["mobile"];
		$email=$_POST["email"];
		$date=$_POST["date"];
		$comment = $_POST['comment'];

		mysqli_query($conn, "DROP PROCEDURE IF EXISTS insertfeedback");

		$sql = "CREATE PROCEDURE insertfeedback()
				BEGIN
					INSERT INTO feedback(FeedbackID, Name, course, Mobile, EmailId, Modifiedon, Remark) VALUES ('$feedbackid', '$name', '$course', '$mobile', '$email', '$date', '$comment');
				END";
		$query = mysqli_query($conn, $sql);

		$sql2 = "CALL insertfeedback()";
		$query2 = mysqli_query($conn, $sql2);

		echo "1";
	}
?>






 