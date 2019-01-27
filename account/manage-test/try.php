<?php

include '../../connection.php';



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









  <!-- table start -->

    <br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Subject</th>
            <th>Class Name</th>
            <th>Test Name</th>
            <th>Description</th>
            <th>Max Marks</th>
            <th>Center</th>
            <th>Course</th>
            <th>Date</th>
            <th>Batch Time</th>
            <th>Branch</th>


          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM weeklytest");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $syid=$row2['syid'];
                $classname=$row2['classname'];
                $tname=$row2['tname'];
                $desc1=$row2['desc1'];
                $marks=$row2['marks'];
                $centerid=$row2['centerid'];
                $courseid=$row2['courseid'];
                $date1=$row2['date1'];
                $timeid=$row2['timeid'];
                $bid=$row2['bid'];
                $ttime=$row2['ttime'];
                $tcenter=$row2['tcenter'];
                $cname=$row2['cname'];                
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $syid; ?></td>
            <td><?php echo $classname; ?></td>
            <td><?php echo $tname; ?></td>
            <td><?php echo $desc1; ?></td>
            <td><?php echo $marks; ?></td>
            <td><?php echo $centerid; ?></td>
            <td><?php echo $courseid; ?></td>
            <td><?php echo $date1; ?></td>
            <td><?php echo $timeid; ?></td>

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

?>