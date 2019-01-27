<?php

include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $lid=$_POST['lid'];
        $pass=$_POST['pass'];
        $role=$_POST['role'];
        $rid=$_POST['rid'];
        

$query="CALL insertuser('".$cid."','".$lid."','".$pass."','".$role."','".$rid."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>