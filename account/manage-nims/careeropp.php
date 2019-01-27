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

  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('careeropp-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="careeropp.php">
      <table class="table table-bordered">
        <tr>
        
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Vacancy</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
          </td>
        </tr>
   
        <tr>
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Job Function</span></td>
          <td><input type="text" name="func" id="func" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- CEO</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
        </tr>

        <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM career");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtid" value="<?php echo   $highest_id; ?> " id="txtid" class="form-control">


        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Job Role</span></td>
          <td><input type="text" name="role" id="role" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- Developer</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

        </tr>

        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Job RoleID</span></td>
          <td><input type="text" name="roleId" id="roleId" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- 123456</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

        </tr>

        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Job Skills</span></td>
          <td><input type="text" name="skills" id="skills" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- java,html</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

        </tr>

        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Enter Job Experience</span></td>
          <td><input type="text" name="exp" id="exp" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- 2 years</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

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
            <th>Function</th>
            <th>Role</th>
            <th>RoleId</th>
            <th>Skills</th>
            <th>Experience</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php 
        $query = mysqli_query($conn,"select * from career");
        while($row = mysqli_fetch_array($query))
        {
          $id = $row['id'];
          $function = $row['J_func'];
          $role = $row['J_role'];
          $roleId = $row['J_roleId'];
          $skills = $row['J_skills'];
          $exp = $row['J_exp'];
      ?>
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $function; ?></td>
            <td><?php echo $role; ?></td>
            <td><?php echo $roleId; ?></td>
            <td><?php echo $skills; ?></td>
            <td><?php echo $exp; ?></td>
            <td>
              
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
               url: 'careeropp-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='careeropp.php';
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

            var func = $('#func').val();
            var role = $('#role').val();           
            var roleId = $('#roleId').val();
            var skills = $('#skills').val();
            var exp = $('#exp').val();

            if (func == '') 
            {
              $('.modal-body').html("Please Enter Job Function ");
              $("#myModal").modal();
            }
            else if (role=='') 
            {
              $('.modal-body').html("Please Enter Role ");
              $("#myModal").modal();
            }
            else if (roleId=='') 
            {
              $('.modal-body').html("Please Enter RoleId ");
              $("#myModal").modal();
            }
            else if (skills=='') 
            {
              $('.modal-body').html("Please Enter Skills required ");
              $("#myModal").modal();
            }

            else if (exp=='') 
            {
              $('.modal-body').html("Please Enter Experience required ");
              $("#myModal").modal();
            }


    else
    {
      $.ajax({
         type: 'POST',
         url: 'careeropp2.php',  
         data: ({ func: func, role: role, roleId: roleId, skills: skills, exp: exp }),
         success: function(response3) 
         
        {
         alert(response3);
             if(response3 == "1" || response3 == 1)
            {  
              $('.modal-body').html("Career Added Successfully");
                 $("#myModal").modal();   
                 setTimeout(function(){
                  window.location.href='careeropp.php';
                  }, 1000); 
                 
          }
             else
             {
                 $('.modal-body').html("career Not Added");
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