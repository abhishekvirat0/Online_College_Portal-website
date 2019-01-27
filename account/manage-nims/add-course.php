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
  <title>Nims |Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>



  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-course-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

      function delete_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-course-delete-modal.php?id='+id); /*Modal Content Load from page location*/
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
      <form method="post" action="add-course.php">
          <table class="table table-bordered">
              <tr>
                   <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Course</th>
              </tr>          
              <tr>
                   <td align="center" colspan="4"></td>
              </tr>
              <tr>             
                   <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>
                   
                   <td><input type="text" name="txtcourse"  id="txtcourse" class="form-control" style="width: 200px;">(<font color="#DB2929" style="font-size: small">e.g.- H.S.C</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span> </td>
             </tr>

            <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM course");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">
                   
             <tr>
                   <td></td>
                       
                   <td align="left">
                   
                           <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
                           
                          <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
                       
                    </td>              
             </tr>
                        
         </table>

      </form>  
    </div>   



    <!-- table start -->

    <br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>Course ID</th>
            <th>Course Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM course");
              while($row2 = mysqli_fetch_array($get2))
              {

                $course_id=$row2['Id'];
                $course_nm=$row2['Name'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $course_id; ?></td>
            <td><?php echo $course_nm; ?></td>
            <td>
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $course_id; ?>')">
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger"onclick="delete_row('<?php echo $course_id; ?>')">
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

<!-- ./wrapper -->

<?php include '../../assets/dashboard-assets-js.php'; ?>


      <script >

  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var cid=$('#txtcid').val();  
    var course=$('#txtcourse').val();
    

    if(course=='') 
    {
      $('.modal-body').html("Please Enter Course Name ");
      $("#myModal").modal();
    }
    
  else
  {
    $.ajax({
         type: 'POST',
         url: 'add-course2.php',
         data: ({cid:cid, course:course }),
         success: function(response) 
     {
             if(response == "1")
            {  
              $('.modal-body').html("Course Added Successfully");
              $("#myModal").modal();
              setTimeout(function(){
                window.location.href='add-course.php';
              }, 1000); 
                 
          }
             else
             {
                 $('.modal-body').html("Course Not Added");
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