<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        $class1=$_POST['class1'];
        

$query="CALL insertaddclass('".$cid."','".$class1."','".$course."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>