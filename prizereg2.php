<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$connect=mysqli_connect("localhost","root","","mynims");
		
		$course=$_POST['course'];
        $subject=$_POST['subject'];
        $name=$_POST['name'];
        $year=$_POST['year'];
        $date1=$_POST['date1'];
        

$query="CALL insertprizeclaim('".$course."','".$subject."','".$name."','".$year."','".$date1."')";
$ans=mysqli_query($connect,$query);
echo "1";
}
?>