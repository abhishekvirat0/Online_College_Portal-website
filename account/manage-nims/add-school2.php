<?php


include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        $board=$_POST['board'];
        $school=$_POST['school'];
        

$query="CALL insertschool('".$cid."','".$course."','".$board."','".$school."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>