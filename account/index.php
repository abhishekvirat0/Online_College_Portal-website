<?php

include '../ck.php';

if($ck!=1 or $ck!="1")
{
  header("Location: ../index.php");
}
else
{
	if($role == "admin")
	{
		header("Location: admin/dashboard.php");
	}
	else if($role == "student")
	{
		header("Location: ../student-corner.php");
	}
	else if($role == "parent")
	{
		header("Location: ../parent-corner.php");
	}
}

?>