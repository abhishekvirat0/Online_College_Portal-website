<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$cid=$_POST['cid'];
        $vurl=$_POST['vurl'];
        $vtitle=$_POST['vtitle'];
        $vdesc=$_POST['vdesc'];
        

$query="CALL insertvideo('".$cid."','".$vurl."','".$vtitle."','".$vdesc."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>