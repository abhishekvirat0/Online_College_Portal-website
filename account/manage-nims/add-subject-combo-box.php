<?php  

include '../../connection.php';

	$course = $_REQUEST['course'];

?>

<select id='Class' name='Class' class='form-control'>
	<option value='0'>Select Class</option>
<?php  
$get = mysqli_query($conn,"SELECT * FROM class WHERE Course='$course'");
while($row = mysqli_fetch_array($get))
{
  $class_nm = $row['Name'];

	$get2 = mysqli_query($conn,"SELECT * FROM branch WHERE Class='$class_nm'");
	if($row2 = mysqli_fetch_array($get2))
	{
?>
	<option value="<?php echo $class_nm; ?>"><?php echo $class_nm; ?></option>
<?php
	}
	else
	{

	}
}
?>
</select>


<script type="text/javascript">
	$('#Class').change(function(event) {

   		var cls=$('#Class').val();

    	$("#divBranch").load("add-subject-combo-box2.php?cls="+cls).fadeIn("fast");

    });
</script>