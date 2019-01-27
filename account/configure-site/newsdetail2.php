<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$id=$_POST['id'];
		$title1=$_POST['title1'];
        $detail=$_POST['detail'];
        $date=$_POST['date'];
        $name1 = $_POST['name1'];
        

$query="INSERT INTO news (Id,Title,Details,date1,name1) VALUES('$id','$title1','$detail','$date','$name1')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>