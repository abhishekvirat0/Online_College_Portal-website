<?php


 include '../../connection.php';


?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title>Nims | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

  <?php include '../../assets/dashboard-assets-js.php'; ?>


<script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-user-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" name="myForm" id="myForm" action="employeemaster.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">User</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
          <td></td>
        </tr>
   
        <tr>
                                  <?php
                                    
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM user_master");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">

          <td><td><span style="color: #3973ac; font-weight: bold; ">LoginId</span></td>

          <td><input type="text" name="txtlid" id="txtlid" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Password</span></td>
            <td><input type="password" name="txtpass" id="txtpass" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
             <tr >
                <td>
                   <td><span style="color: #3973ac; font-weight: bold; ">Role</span></td>
                    <td><select id="role" name="role" class="form-control">
                    <option value="Select Role">Select Role</option>
                    <option value="A">Admin</option>
                    <option value="F">Faculty</option>
                    <option value="NA">NonFaculty</option>
                    </select>
            
             
                      </td>  
            
            
                          <td><span style="color: #3973ac; font-weight: bold; ">  ReferenceID</span></td>
                             <td><input type="text" name="txtrid" id="txtrid" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none"></span>
                             </td>
                             
                         </td> 
                   </tr>
                   
                   
        <tr>  
          <td align="right" colspan = "3">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "3">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
          
          </tr>
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
            <th>Login ID</th>
            <th>PassWord</th>
            <th>Role</th>
            <th>Reference ID</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM user_master");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $lid1=$row2['lid'];
                $pass1=$row2['pass'];
                 $role1=$row2['role'];
                $rid1=$row2['rid'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $lid1; ?></td>
             <td><?php echo $pass1; ?></td>
            <td><?php echo $role1; ?></td>
            <td><?php echo $rid1; ?></td>
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
<!-- ./wrapper -->


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
               url: 'add-user-delete-code.php',
               data: ({ id: id }),
               success: function(response) {

               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='usermaster.php';
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

    var cid=$('#txtcid').val();  
    var lid=$('#txtlid').val();
    var pass=$('#txtpass').val();
    var role=$('#role').val();
    var rid=$('#txtrid').val();

    if(lid=='') 
    {
       infoAlert("Please Enter Login Id");
    }
    
    else if(pass=='')
    {
       infoAlert("Please Enter Password");
    }
    else if(role=='')
    {
        infoAlert("Please Select Role");
    }
    else if(rid=='')
    {
        infoAlert("Please Enter Reference ID");
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'usermaster2.php',
         data: ({cid:cid, lid:lid ,pass:pass,role:role,rid:rid }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("User Added Successfully");
                 $("#myModal").modal();   
                
                 setTimeout(function(){
                  window.location.href='usermaster.php';
                  }, 1000); 
          }
             else
             {
                 $('.modal-body').html("User Not Added");
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