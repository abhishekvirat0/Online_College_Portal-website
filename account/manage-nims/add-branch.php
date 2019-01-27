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
          $('#light_box').load('add-branch-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Branch</th>
        </tr>
        <tr>
          <td align="center" colspan="6">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>

         <tr>

            <?php

                                     $result = mysqli_query($conn,"SELECT MAX(BId)+1 FROM branch");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtbid" value="<?php echo $highest_id; ?> " id="txtbid" class="form-control">
          </td>
        </tr>

        <tr>
         <td><span style="color: #3973ac; font-weight: bold; ">Select Course</span></td>
          <td>

            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='course' name='course' class='form-control'>";
echo "<option value='Select Course'>Select Course</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>

          </td>

                   <td><span style="color: #3973ac; font-weight: bold; ">Select Class</span></td>
          <td>

<div id="divClass">
<select id='class' name='class' class='form-control'>
  <option value='0'>Select Class</option>
</select>
</div>

          </td>

          <td><span style="color: #3973ac; font-weight: bold; ">Branch name</span></td>
          <td><input type="text" name="txtbranch"  id="txtbranch" class="form-control">(<font color="#DB2929" style="font-size: small">e.g.- Computer</font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
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
            <th>Course</th>
            <th>Class</th>
            <th>Branch</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM branch");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['BId'];
                $class_nm=$row2['Class'];
                $branch_nm=$row2['BranchName'];
                $course_nm=$row2['Course'];

?>
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course_nm; ?></td>
            <td><?php echo $class_nm; ?></td>
            <td><?php echo $branch_nm; ?></td>
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
               url: 'add-branch-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='add-branch.php';
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

      $('#course').change(function(event) {

      var course=$('#course').val();

      $("#divClass").load("add-branch-combo-box.php?course="+course).fadeIn("fast");

    });


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var bid=$('#txtbid').val();
    var course=$('#course').val();
    var class1=$('#class').val();
    var branch=$('#txtbranch').val();

    if(course=='Select Course')
    {
      infoAlert("Please Select Course Name");
    }
    else if(class1=='Select Class') 
    {
      infoAlert("Please Select Class");
    }
    else if(branch=='')
    {
      infoAlert("Please Enter Branch");
    }

  else
  {
    $.ajax({
         type: 'POST',
         url: 'add-branch2.php',
         data: ({bid:bid, course:course, class1:class1, branch:branch}),
         success: function(response3)
     {
             if(response3 == "1")
            {
              successAlert("Branch Added Successfully");
                  setTimeout(function(){
                  window.location.href='add-branch.php';
                  }, 1000);


          }
             else
             {
                 errorAlert("Branch Not Added");
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
