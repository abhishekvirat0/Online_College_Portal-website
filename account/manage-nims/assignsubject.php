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
  <title>Nims | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>



  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('assignsubject-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

      function delete_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('assignsubject-delete-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="add-school.php">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Assign Subjects To Faculty</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM university");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">
          <td><span style="color: #3973ac; font-weight: bold; ">Select Course</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

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

           <td><span style="color: #3973ac; font-weight: bold; ">Select Class</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM  class ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='txtclass' name='txtclass' class='form-control'>";
echo "<option value=''>Select Class</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 
           <td><span style="color: #3973ac; font-weight: bold; ">Select Branch</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  BranchName FROM branch ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='txtbranch' name='txtbranch' class='form-control'>";
echo "<option value=''>Select Branch</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['BranchName'] ."'>" . $row['BranchName'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>
          </tr> 
        <tr>
        <td>
        </td>      
          <td><span style="color: #3973ac; font-weight: bold; ">Select Faculty</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM faculty";
$result = mysqli_query($conn,$sqli1);

echo "<select id='txtfname' name='txtfname' class='form-control'>";
echo "<option value=''>Select Faculty</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>                  
          
 <td><span style="color: #3973ac; font-weight: bold; ">Select Subject</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  Subject FROM  subjects";
$result = mysqli_query($conn,$sqli1);

echo "<select id='cbsubject' name='cbsubject' class='form-control'>";
echo "<option value=''>Select Subject</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Subject'] ."'>" . $row['Subject'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>  
          <td><span style="color: #3973ac; font-weight: bold; ">Date</span></td> 
          <td><input type="date" name="txtdate" id="txtdate" class="form-control"></td>
        </tr>
        <td>
        </td>
        <tr>  <td></td><td></td>
          <td align="right" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "2">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
          <td>
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
            <th>Course Name</th>
            <th>Class</th>
            <th>Branch</th>
            <th>Faculty</th>
            <th>Subject</th>
            <th>Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM facultysubjectdetails");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $course=$row2['course'];
                $class=$row2['class'];
                $branch=$row2['branch'];
                $faculty=$row2['faculty'];
                $subject=$row2['subject'];
                $dt=$row2['date1'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $class; ?></td>
            <td><?php echo $branch; ?></td>
            <td><?php echo $faculty; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $dt; ?></td>
            <td>
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $id; ?>')">
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger"onclick="delete_row('<?php echo $id; ?>')">
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

  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>


      <script >

  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var cid=$('#txtcid').val();  
    var course=$('#courseid').val();
    var class1=$('#txtclass').val();
    var branch=$('#txtbranch').val();
    var faculty=$('#txtfname').val();
    var subject=$('#cbsubject').val();
    var date=$('#txtdate').val();
    

    if(course=='') 
    {
      $('.modal-body').html("Please Select Course ");
      $("#myModal").modal();
    }
    
    else if(class1=='')
    {
       $('.modal-body').html("Please Select Class ");
       $("#myModal").modal();
    }
    else if(branch=='')
    {
       $('.modal-body').html("Please Select Branch ");
       $("#myModal").modal();
    }
    else if(faculty=='')
    {
       $('.modal-body').html("Please Select Faculty ");
       $("#myModal").modal();
    }
     else if(subject=='')
    {
       $('.modal-body').html("Please Select Subject ");
       $("#myModal").modal();
    }
    else if(date=='')
    {
       $('.modal-body').html("Please Enter Date ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'assignsubject2.php',
         data: ({cid:cid, course:course ,class1:class1,branch:branch,faculty:faculty,subject:subject,date:date }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Assign Subject Faculty Added Successfully");
                 $("#myModal").modal();   
                setTimeout(function(){
                  window.location.href='assignsubject.php';
                }, 1000); 
          }
             else
             {
                 $('.modal-body').html("Assign Subject Faculty Not Added ");
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