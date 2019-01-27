<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$id=$_POST['id'];
        $desc1=$_POST['desc1'];
        $act=$_POST['act'];
        

$query="CALL inserthighdetalis('".$id."','".$desc1."','".$act."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>