<?php

include '../../connection.php';


?>

<script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('highlight-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

  </script>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | Dashboard</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>


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
    <form method="post" action="highlightdetalis.php">
      <table class="table table-bordered">
        <tr>
        
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Highlighter Details</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Highlighter Description</span></td>
          <td><input type="text" name="txtdesc" id="txtdesc" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- congratulations to all students</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
        </tr>

        <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM highlighter");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtid" value="<?php echo   $highest_id; ?> " id="txtid" class="form-control">


        <tr>
          <td></td>
          
          <td><span style="color:#3973AC;"><input id="txtact" type="checkbox" name="txtact" value="checked" /><label for="txtact">Is Active</label></span></td>
        </tr>
        
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
            <th>ID</th>
            <th>Highlight Description</th>
            <th>Active</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM highlighter");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $desc1=$row2['desc1'];
                $active=$row2['active'];
               
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $desc1; ?></td>
            <td><?php echo $active; ?></td>
            
<td>        
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $id; ?>')">
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger" onclick="delete_row('<?php echo $id; ?>')">
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
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
        </div>

<!-- modal end -->



<?php include '../../assets/dashboard-assets-js.php'; ?>
<script >


function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'highlight-delete-code.php',
               data: ({ id: id }),
               success: function(response) {

               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='highlightdetalis.php';
                 }, 1000);
               }
               else
               {
                 errorAlert("Undefined Error!");
               }
               }
              });
            },
            cancel: function () {
                
            }
        }
    });

}




  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var id=$('#txtid').val();  
    var desc1=$('#txtdesc').val();
    var act=$('#txtact').val();
    
    if($("#txtact").prop('checked') == true)
    {
        var txtact = "checked";
    }
    else
    {
        var txtact = "not checked";
    }


    if(desc1=='') 
    {
      infoAlert("Please Enter Highlighter Description");
      
    }
    
    

  else
  {
    $.ajax({
         type: 'POST',
         url: 'highlightdetalis2.php',
         data: ({id:id, desc1:desc1 ,act:act}),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html(" Highlighter Details Added Successfully");
                 $("#myModal").modal();   
                  setTimeout(function(){
                  window.location.href='highlightdetalis.php';
                  }, 1000); 

                 
          }
             else
             {
                 $('.modal-body').html("Highlighter Details Not Added");
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