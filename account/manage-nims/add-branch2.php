<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$bid=$_POST['bid'];
        $course=$_POST['course'];
        $class1=$_POST['class1'];
        $branch=$_POST['branch'];

$query="CALL insertbranch('".$bid."','".$course."','".$class1."','".$branch."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>