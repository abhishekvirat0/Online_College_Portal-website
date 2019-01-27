<?php  

include '../../connection.php';

	$course = $_REQUEST['course'];

?>
<select id='txtboard' name='txtboard' class='form-control'>
  <option value='0'>Select Board/University</option>
<?php

$get = mysqli_query($conn,"SELECT * FROM university WHERE Name='$course'");
while($row = mysqli_fetch_array($get))
{
  $board_nm = $row['Boardname'];
?>
    <option value="<?php echo $board_nm; ?>"><?php echo $board_nm; ?></option>
<?php
}
?>
</select>
