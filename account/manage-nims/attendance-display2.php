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
              $get2 = mysqli_query($conn,"SELECT * FROM studentattendance where course='$courseid' and branch='$branchid'");
              while($row2 = mysqli_fetch_array($get2))
              {
              	$id=$row2['id1'];
                $fname=$row2['fname'];
                $mname=$row2['mname'];
                $class=$row2['class'];
                $attend=$row2['attend'];
                $date1=$row2['date1'];
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td><input type="hidden" id="id1" value="<?php echo $id; ?>">
            <td><?php echo $fname; ?></td><input type="hidden" id="fname" value="<?php echo $fname; ?>">
            <td><?php echo $mname; ?></td><input type="hidden" id="mname" value="<?php echo $mname; ?>">
            <td><?php echo $class; ?></td><input type="hidden" id="class1" value="<?php echo $class; ?>">
            <td>
            	<?php echo $attend; ?></td>
                <td>
              <?php echo $date1; ?>
            </td>
          </tr>
        </div>
<?php  
              }

?>
 </tbody>
      </table>