<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$Id=$_POST['Id'];
        $StateName=$_POST['StateName'];
        $Name=$_POST['Name'];
        

$query="CALL AddCity('".$Id."','".$StateName."','".$Name."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>