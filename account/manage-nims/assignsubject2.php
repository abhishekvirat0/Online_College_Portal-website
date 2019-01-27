<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $connect=mysqli_connect("localhost","root","","mynims");
        $cid=$_POST['cid'];
        $course=$_POST['course'];
        $class1=$_POST['class1'];
        $branch=$_POST['branch'];
        $faculty=$_POST['faculty'];
        $subject=$_POST['subject'];
        $dt=$_POST['date'];


    mysqli_query($connect, "DROP PROCEDURE IF EXISTS insertsubject");

    $sql = "CREATE PROCEDURE insertsubject()
            BEGIN
                INSERT INTO facultysubjectdetails(course, class, branch, faculty, subject, date1) VALUES ('$course', '$class1', '$branch', '$faculty', '$subject', '$dt');
            END";
    $query = mysqli_query($connect, $sql);

    $sql2 = "CALL insertsubject()";
    $query2 = mysqli_query($connect, $sql2);

echo "1";
}
?>