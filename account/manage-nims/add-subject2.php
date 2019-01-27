<?php


include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		
		$Id=$_POST['Id'];
        $Course=$_POST['Course'];
        $Class=$_POST['Class'];
        $Branch=$_POST['Branch'];
        $Subject=$_POST['Subject'];
        $Fees=$_POST['Fees'];
        

$query="CALL AddSubject('".$Id."','".$Subject."','".$Course."','".$Class."','".$Branch."','".$Fees."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>