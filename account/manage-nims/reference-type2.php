<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        // $course=$_POST['course'];
        $reference1=$_POST['reference1'];
        

$query="CALL insertreferencetype('".$cid."','".$reference1."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>