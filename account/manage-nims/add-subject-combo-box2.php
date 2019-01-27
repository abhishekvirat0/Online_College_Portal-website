<?php  

include '../../connection.php';

	$cls = $_REQUEST['cls'];

?>

<select id='Branch' name='Branch' class='form-control'>
	<option value='0'>Select Branch</option>
<?php  
$get = mysqli_query($conn,"SELECT * FROM branch WHERE Class='$cls'");
while($row = mysqli_fetch_array($get))
{
  $branch_nm = $row['BranchName'];
?>
    <option value="<?php echo $branch_nm; ?>"><?php echo $branch_nm; ?></option>
<?php  
}
?>
</select>