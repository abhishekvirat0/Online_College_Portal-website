<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        $board=$_POST['board'];
        

$query="CALL insertborad('".$cid."','".$course."','".$board."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>