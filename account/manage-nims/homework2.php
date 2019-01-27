<?php

include('../../ck.php');


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	$id = $_POST['Id'];
	$Course = $_POST['Course'];
	$Class = $_POST['Class'];
	$Subject = $_POST['Subject'];
	$State = $_POST['State'];
	$City = $_POST['City'];
	$Branch = $_POST['Branch'];
	$Batchtime = $_POST['Batchtime'];
	$txthwquestion = $_POST['txthwquestion'];
	$txthwdes = $_POST['txthwdes'];
	$txtadded = $_POST['txtadded'];

	    	
	    $query = "INSERT INTO homework (Course,Subject,class,City,State,Branch,Batchtime,txthwquestion,txthwdes,txtaddedby) VALUES ('$Course','$Subject','$Class','$City','$State','$Branch','$Batchtime','$txthwquestion','$txthwdes','$txtadded')";

		$result = mysqli_query($conn,$query);

		echo "1";
	
}
else
{
	header("Location:homework.php");
}

?>