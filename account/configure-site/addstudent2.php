<?php


include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $id=$_POST['id'];
        $FirstName=$_POST['FirstName'];
        $MiddleName=$_POST['MiddleName'];
        $Course=$_POST['Course'];
        $Class=$_POST['Class'];
        $Branch=$_POST['Branch'];
        $Years=$_POST['Years'];


$query="CALL addstudent ('".$id."','".$FirstName."','".$MiddleName."','".$Course."','".$Class."','".$Branch."','".$Years."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>