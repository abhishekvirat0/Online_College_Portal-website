<?php


include('../../ck.php');

if($ck!=1 or $ck!="1")
{
  header("Location: ../../login.php");
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
  <title>Nims | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-subject-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="add-board.php">
      <table class="table table-bordered">
        <tr>
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Subject</th>
        </tr>   
        <tr>
          <td align="center" colspan="6">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(Id)+1 FROM subjects");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="Id" value="<?php echo   $highest_id; ?> " id="Id" class="form-control">
          <tr>
            <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>
            <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Course' name='Course' class='form-control'>";
echo "<option value='0'>Select Course</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 


           <td><span style="color: #3973ac; font-weight: bold; ">Class</span></td>
          <td>
            

<div id="divClass">
<select id='Class' name='Class' class='form-control'>
  <option value='0'>Select Class</option>
</select>
</div>            
          </td> 


          <td><span style="color: #3973ac; font-weight: bold; ">Branch</span></td>
          <td>
            
<div id="divBranch">
<select id='Branch' name='Branch' class='form-control'>
  <option value='0'>Select Branch</option>
</select>
</div>  
            
          </td>
        </tr>
        <tr>
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Subject</span></td>
          <td><input type="text" name="Subject" id="Subject" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

          <td><span style="color: #3973ac; font-weight: bold; ">Fees</span></td>
          <td><input type="text" name="Fees" id="Fees" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
          <td colspan="4"></td>
        </tr>
        
        <tr>
        <td colspan="2"></td>
          <td align="left" colspan = "4">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary" style="margin-right: 20px;">
          
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
            <th>Course</th>
            <th>Class</th>
            <th>Branch</th>
            <th>Subject</th>
            <th>Fees</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM subjects");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['Id'];
                $subject_nm=$row2['Subject'];
                $class_nm=$row2['Class'];
                $course_nm=$row2['Course'];
                $branch_nm=$row2['Branch'];
                $fees=$row2['Fees'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course_nm; ?></td>
            <td><?php echo $class_nm; ?></td>
            <td><?php echo $branch_nm; ?></td>
            <td><?php echo $subject_nm; ?></td>
            <td><?php echo $fees; ?></td>
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
               url: 'add-subject-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='add-subject.php';
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

    $('#Course').change(function(event) {

      var course=$('#Course').val();

      $("#divClass").load("add-subject-combo-box.php?course="+course).fadeIn("fast");

    });


    $('#btnsubmit').click(function(event) {

    event.preventDefault();

    var Id=$('#Id').val();  
    var Course=$('#Course').val();  
    var Class=$('#Class').val();  

    var Branch=$('#Branch').val();
    var Subject=$('#Subject').val();
    var Fees=$('#Fees').val();  
    

    if(Course=='0') 
    {
      $('.modal-body').html("Please Select Course ");
      $("#myModal").modal();
    }
    else if(Class=='0')
    {
       $('.modal-body').html("Please Select Class ");
       $("#myModal").modal();
    }
    else if(Branch=='0')
    {
       $('.modal-body').html("Please Select Branch ");
       $("#myModal").modal();
    }
    else if(Subject=='')
    {
       $('.modal-body').html("Please Enter Subject ");
       $("#myModal").modal();
    }
    
    else if(Fees=='')
    {
       $('.modal-body').html("Please Enter Fees ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'add-subject2.php',
         data: ({Id:Id, Course:Course ,Class:Class , Branch:Branch , Subject:Subject , Fees:Fees }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Subject Added Successfully");
                 $("#myModal").modal();   
                 setTimeout(function(){
                  window.location.href='add-subject.php';
                  }, 1000);  
                 
          }
             else
             {
                 $('.modal-body').html("Subject Not Added");
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