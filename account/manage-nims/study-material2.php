<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        // $course=$_POST['course'];
        $study=$_POST['study'];
        

$query="CALL insertstudymaterial('".$cid."','".$study."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>