<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$connect=mysqli_connect("localhost","root","","mynims");
		
		$name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $dob=$_POST['dob'];
        $address=$_POST['address'];
        $email=$_POST['email'];
        $doc = $_POST['doc'];
        $cot = $_POST['cot'];
        $mode = $_POST['mode'];
        $message = $_POST['message'];

$query="INSERT into councel (name,mobile,dob,address,email,doc,cot,mode,message) values ('$name','$mobile','$dob','$address','$email','$doc','$cot','$mode','$message')";
$ans=mysqli_query($connect,$query);
echo "1";
}
?>