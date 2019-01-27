<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$id=$_POST['id'];
		$title1=$_POST['title1'];
        $detail=$_POST['detail'];
        $date=$_POST['date'];
        

$query = "INSERT INTO faq(Id,Title,Details,date1) values ('$id','$title1','$detail','$date')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>