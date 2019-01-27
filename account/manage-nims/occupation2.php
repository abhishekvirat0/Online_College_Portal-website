<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $occupation1=$_POST['occupation1'];
        $chkIsMother=$_POST['chkIsMother'];
        

$query="CALL insertoccupation('".$id."','".$occupation1."','".$chkIsMother."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>