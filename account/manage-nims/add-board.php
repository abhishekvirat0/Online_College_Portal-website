<?php


include('../../ck.php');

if($ck!=1 or $ck!="1")
{
  header("Location: ../../index.php");
}
else
{
  if($role == "admin")
  {


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | Dashboard</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

  <?php include '../../assets/dashboard-assets-js.php'; ?>


  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-board-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

      function delete_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-board-delete-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }      

  </script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

      <!--NavBar-->
            
            <?php include '../../navbar/dashboard-navbar.php';?>

      <!--NavBar-->

    <!--SideBar-->

        <?php include '../../sidebar/dashboard-left-sidebar.php';?>

    <!--SideBar-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #ffffff; ">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->




    <div class="panel panel-default">
      <table class="table table-bordered">
        <tr>
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Board/University</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>

        <tr>
        <?php
                                     $result = mysqli_query($conn,"SELECT MAX(ID)+1 FROM university");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtcid" value="<?php echo $highest_id; ?> " id="txtcid" class="form-control">
          <td><span style="color: #3973ac; font-weight: bold; ">Select Course</span></td>
          <td>
<?php


$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='courseid' name='courseid' class='form-control'>";
echo "<option value=''>Select Course</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

?>
          </td>                  
          <td><span style="color: #3973ac; font-weight: bold; ">Board/University Name</span></td>
          <td><input type="text" name="txtboard" id="txtboard" class="form-control">(<font color="#DB2929" style="font-size: small">e.g.- Amravati University</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
        </tr>
        
        <tr>
          <td align="right" colspan = "2">
            <input type="button" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "2">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
        </tr>
      </table>
    </div>




    <!-- table start -->

    <br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Board ID</th>
            <th>Course</th>
            <th>Board / University</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM university");
              while($row2 = mysqli_fetch_array($get2))
              {

                $board_id=$row2['ID'];
                $course_nm=$row2['Name'];
                $board_name=$row2['Boardname'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $board_id; ?></td>
            <td><?php echo $course_nm; ?></td>
            <td><?php echo $board_name; ?></td>
            <td>
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $board_id; ?>')">
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger"onclick="delete_row('<?php echo $board_id; ?>')">
            </td>
          </tr>
        </div>
<?php  
              }

?>
        </tbody>
      </table>

    </div>

    <!-- table end -->




    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!--Footer-->

      <?php include '../../footer/footer.php';?>

  <!--Footer-->



  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- modal start -->

       <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
         <div id="light_box">

         </div>
       </div>




    <!-- Modal -->

          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body" align="center">
                  Some text in the modal.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>



<!-- modal end -->

<script type="text/javascript">
  
    $(document).ready(function() {  

        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var cid=$('#txtcid').val();  
    var course=$('#courseid').val();
    var board=$('#txtboard').val();
    

    if(course=='') 
    {
      $('.modal-body').html("Please Enter Course Name ");
      $("#myModal").modal();
    }
    
    else if(board=='')
    {
       $('.modal-body').html("Please Enter Board/University Name ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'add-board2.php',
         data: ({cid:cid, course:course, board:board }),
         success: function(response) 
     {  
             if(response == "1" || response == 1)
            {  
              $('.modal-body').html("Board/University Added Successfully");
                 $("#myModal").modal();   
                 setTimeout(function(){
                  window.location.href='add-board.php';
                  }, 1000); 
                 
          }
             else
             {
                 $('.modal-body').html("Borad/University Not Added");
                 $("#myModal").modal();
             }
         }
      });
  }
    
 
  });
    });

</script>



</body>
</html>
<?php
  }
}

?>