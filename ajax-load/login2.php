<?php

include '../ck.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

        $uname=$_POST['uname'];
        $pass=$_POST['pass'];

        $get = mysqli_query($conn,"SELECT * FROM `registration1` WHERE `emailid`='$uname' and `pass`='$pass'");
        if($row = mysqli_fetch_array($get))
        {
            // session_start();

            $_SESSION["pass"] = $pass;
            $_SESSION["uname"] = $uname;

            echo "1";
        }

    }
       
?>
