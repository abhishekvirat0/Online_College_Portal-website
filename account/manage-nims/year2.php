<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        // $course=$_POST['course'];
        $year1=$_POST['year1'];
        

$query="CALL insertyears('".$cid."','".$year1."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>