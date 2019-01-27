<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['hid'];
		$employee_nm = $_POST['employee_nm'];
		$edu = $_POST['edu'];
    $subject = $_POST['subject'];
		$contact = $_POST['contact'];
		$address = $_POST['address'];
		$payment = $_POST['payment'];

      $pimg=$_FILES['img']['name'];

      if($_FILES['img']['tmp_name']!="")
      { 
        if ((($_FILES["img"]["type"] == "image/gif")
              || ($_FILES["img"]["type"] == "image/png")
              || ($_FILES["img"]["type"] == "image/jpeg")
              || ($_FILES["img"]["type"] == "image/pjpeg"))
              && ($_FILES["img"]["size"] < 99999999) )
        {
                copy($_FILES['img']['tmp_name'],"empimages/".$pimg);

          		$query_update = mysqli_query($conn,"UPDATE employeemaster SET ename='$employee_nm', sub='$subject', edu='$edu', cno='$contact', pic='$pimg', add1='$address', payment='$payment' WHERE id='$id'");
?>

<script type="text/javascript">
    alert("Data Updated");
    window.location.href="employeemaster.php";
</script>

<?php
        }

      }		
	}

?>