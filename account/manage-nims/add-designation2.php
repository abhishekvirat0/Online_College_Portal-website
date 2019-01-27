<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $occupation=$_POST['occupation'];
        $designation1=$_POST['designation1'];
        

$query="CALL insertdesignation('".$cid."','".$designation1."','".$occupation."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>