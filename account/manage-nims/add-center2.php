<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$ID=$_POST['ID'];
        $CityName=$_POST['CityName'];
        $Name=$_POST['Name'];
        

$query="CALL AddCenter('".$ID."','".$CityName."','".$Name."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>