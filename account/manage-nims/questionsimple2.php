<?php

include '../../connection.php';

   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        
        $qid=$_POST['qid'];
        $subject=$_POST['subject'];
        $question=$_POST['question'];
        $option1=$_POST['option1'];
        $option2=$_POST['option2'];
        $option3=$_POST['option3'];
        $option4=$_POST['option4'];
        $answer=$_POST['answer'];

$query="CALL insertqusim('".$qid."','".$subject."','".$question."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."')";
$ans=mysqli_query($conn,$query);
echo "1";
}
?>