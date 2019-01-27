<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$connect=mysqli_connect("localhost","root","","mynims");
		$id=$_POST['id'];
        $course=$_POST['course'];
        $classname=$_POST['classname'];
        $branch=$_POST['branch'];
        $clg=$_POST['clg'];
        $sub=$_POST['sub'];
        $result=$_POST['result'];
        $app=$_POST['app'];
        $pass=$_POST['pass'];
       

$query="CALL insertresult('".$id."','".$course."','".$classname."','".$branch."','".$clg."','".$sub."','".$result."','".$app."','".$pass."')";
$ans=mysqli_query($connect,$query);
echo "1";
}
?>