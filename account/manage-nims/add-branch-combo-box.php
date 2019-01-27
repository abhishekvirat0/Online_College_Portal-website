<?php  

include '../../connection.php';

	$course = $_REQUEST['course'];

?>

<select id='class' name='class' class='form-control'>
  <option value='0'>Select Class</option>
<?php  
$get = mysqli_query($conn,"SELECT * FROM class WHERE Course='$course'");
while($row = mysqli_fetch_array($get))
{
  $class_nm = $row['Name'];
?>
    <option value="<?php echo $class_nm; ?>"><?php echo $class_nm; ?></option>
<?php  
}
?>
</select>