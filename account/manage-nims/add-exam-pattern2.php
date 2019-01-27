<?php


include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        $exam=$_POST['exam'];
        

$query="CALL insertaddexampattern('".$cid."','".$exam."','".$course."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>