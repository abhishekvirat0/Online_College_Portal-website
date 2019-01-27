<?php


include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $course=$_POST['course'];
        $coursetype=$_POST['coursetype'];
        $c_durt = $_POST['c_durt'];
        $c_time = $_POST['c_time'];
        $c_desc = $_POST['c_desc'];
        

$query="insert into coursetype(cid,Name,Course,c_durt,c_time,c_desc) values ('$cid','$coursetype','$course','$c_durt','$c_time','$c_desc')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>