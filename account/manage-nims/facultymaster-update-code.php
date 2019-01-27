<?php  

include '../../connection.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['hid'];
		$faculty = $_POST['faculty'];
		$edu = $_POST['edu'];
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
                copy($_FILES['img']['tmp_name'],"facultyimages/".$pimg);

          		$query_update = mysqli_query($conn,"UPDATE faculty SET Name='$faculty', eduction='$edu', cno='$contact', image='$pimg', add1='$address', payment='$payment' WHERE Id='$id'");
?>

<script type="text/javascript">
    alert("Data Updated");
    window.location.href="facultymaster.php";
</script>

<?php
        }

      }		

		echo "1";
	}

?>