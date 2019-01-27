<?php

include("../../connection.php");

if($_SERVER['REQUEST_METHOD'] == "POST")

   $func = $_POST['func'];
   $role = $_POST['role'];
   $roleId = $_POST['roleId'];
   $skills = $_POST['skills'];
   $exp = $_POST['exp']; 

$query="INSERT INTO career (J_func,J_role,J_roleId,J_skills,J_exp) VALUES ('$func','$role','$roleId','$skills','$exp')";

$ans=mysqli_query($conn,$query);
echo "1";
?>
 