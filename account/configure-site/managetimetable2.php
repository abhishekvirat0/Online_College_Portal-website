<?php


include '../../connection.php';


   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $id=$_POST['id'];
        $Course=$_POST['Course'];
        $Class=$_POST['Class'];
        $Board=$_POST['Board'];
        $Center=$_POST['Center'];
        $Batchtiming=$_POST['Batchtiming'];
        $Day=$_POST['Day'];
        $ClassRoom=$_POST['ClassRoom'];
        $Subject=$_POST['Subject'];
        

$query="INSERT into managetimetable(id,Course,Class,Board,Center,Batchtiming,Day,ClassRoom,Subject) values ('$id','$Course','$Class','$Board','$Center','$Batchtiming','$Day','$ClassRoom','$Subject')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>