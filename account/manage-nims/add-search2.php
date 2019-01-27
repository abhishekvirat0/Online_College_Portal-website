 <!-- DataTable -->
  <link rel="stylesheet" href="../../assets/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="../../assets/css/dataTables.bootstrap.min.css">
<!-- DataTable -->
<script src="../../assets/js/jquery.dataTables.min.js"></script>
<script src="../../assets/js/dataTables.bootstrap.min.js"></script>
<script src="../../assets/js/dataTable_call.js"></script>
 <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Class</th>
            <th>Present</th>
            <th>Date</th>

          </tr>
        </thead>
        <tbody>
<?php
include '../../connection.php';
$courseid=$_REQUEST['courseid'];
$branchid=$_REQUEST['branchid'];              
              $get2 = mysqli_query($conn,"SELECT * FROM addstudent where Course='$courseid' and Branch='$branchid'");
              while($row2 = mysqli_fetch_array($get2))
              {
              	$id=$row2['id'];
                $fname=$row2['FirstName'];
                $mname=$row2['MiddleName'];
                $class=$row2['Class']; 
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td><input type="hidden" id="id1" value="<?php echo $id; ?>">
            <td><?php echo $fname; ?></td><input type="hidden" id="fname" value="<?php echo $fname; ?>">
            <td><?php echo $mname; ?></td><input type="hidden" id="mname" value="<?php echo $mname; ?>">
            <td><?php echo $class; ?></td><input type="hidden" id="class1" value="<?php echo $class; ?>">
            <td>
            	<select id="attend" name="attend" class="form-control">
            		<option value="Present">Present</option>
            		<option value="Absent">Absent</option>
            	</select>
                <td>
              <input type="text" readonly="true" class="form-control" name="date1" id="date1" value="<?php echo date('Y/m/d'); ?>" class="" >
            </td>
          </tr>
        </div>
<?php  
              }

?>
 </tbody>
      </table>