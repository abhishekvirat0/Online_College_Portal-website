<?php
include '../ck.php';
?> 

	<!-- <input type="text" class="wp-form-control wpcf7-text" id="txtuid" name="txtuid" readonly="true" value="<?php echo $attend; ?>"> -->

<table class="table table-striped" width="100%">
	<tr>
		<th>Date</th>
		<th>Report</th>
	</tr>
	<?php
		include '../connection.php';

		$result = mysqli_query($conn,"SELECT * FROM registration1 where emailid = '$emailid'");
		if($row = mysqli_fetch_row($result))
		{
			$h_id = $row[0];
			}
		?>

		
		<input type="text" class="wp-form-control wpcf7-text" id="txtuid" name="txtuid" readonly="true" value="<?php echo $h_id; ?>">

		<?php 
		$res = mysqli_query($conn,"SELECT * from studentattendance where UID='$h_id'");
		while($row2 = mysqli_fetch_row($res))
		{
			$attend = $row2[7];
			$date = $row2[8];
		
	?>

	<tr>
		<td><?php echo $date ;?></td>
		<td><?php echo $attend ;?></td>
	</tr>
	<?php 


} 
?>
	<!-- <tr>
		<td>2018-07-08</td>
		<td>Absent</td>
	</tr> -->
</table>
