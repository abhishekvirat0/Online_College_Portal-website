<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$Id=$_POST['Id'];
        $state=$_POST['state'];
        $city=$_POST['city'];
        $center=$_POST['center'];
        $classroom=$_POST['classroom'];
        
        

$query="CALL ManageclassRoom('".$Id."','".$state."','".$city."','".$center."','".$classroom."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>