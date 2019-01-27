<?php


include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $id=$_POST['id'];
        $course=$_POST['course'];
        $classname=$_POST['classname'];
        $branch=$_POST['branch'];
        $city=$_POST['city'];
        $center=$_POST['center'];
        $btime=$_POST['btime'];
        $subject=$_POST['subject'];
        $tname=$_POST['tname'];
        $tdesc=$_POST['tdesc'];
        $cname=$_POST['cname'];
        $tmarks=$_POST['tmarks'];
        $tdate=$_POST['tdate'];
        $ttime=$_POST['ttime'];
        $tcenter=$_POST['tcenter'];

$query="CALL insertweektest('".$id."','".$subject."','".$classname."','".$tname."','".$tdesc."','".$tmarks."','".$center."','".$course."','".$id."','".$tdate."','".$btime."','".$branch."','".$ttime."','".$tcenter."','".$cname."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>