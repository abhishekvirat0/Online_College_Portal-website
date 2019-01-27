<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
	
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        

$query="CALL insertcourse('".$cid."','".$course."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>