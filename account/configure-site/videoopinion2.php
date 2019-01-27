<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$vid=$_POST['vid'];
        $vurl=$_POST['vurl'];
        $title=$_POST['title'];
        $speak=$_POST['speak'];
        

$query="CALL insertrvideo('".$vid."','".$vurl."','".$title."','".$speak."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>