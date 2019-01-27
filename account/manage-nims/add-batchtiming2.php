 
<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
	
		$Id=$_POST['Id'];
        $CenterName=$_POST['CenterName'];
        $Name=$_POST['Name'];
        

$query="CALL  AddbatchTiming('".$Id."','".$CenterName."','".$Name."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>





