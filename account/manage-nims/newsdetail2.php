<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$connect=mysqli_connect("localhost","root","","mynims");
		$title1=$_POST['title1'];
        $detail=$_POST['detail'];
        $date=$_POST['date'];
        

$query="CALL insertnews('".$title1."','".$detail."','".$date."')";
$ans=mysqli_query($connect,$query);
echo "1";
}
?>