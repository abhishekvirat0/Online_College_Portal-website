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

 <!--  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-subject-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

  </script>
 -->

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
    <form method="post" action="homework.php">
      <table class="table table-bordered">
        <tr>
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Subject</th>
        </tr>   
        <tr>
          <td align="center" colspan="6">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
       <!--  <?php
                                     
                                     // $result = mysqli_query($conn,"SELECT MAX(Id)+1 FROM subjects");
                                     // $row = mysqli_fetch_row($result);
                                     // $highest_id = $row[0];
                                    ?> -->
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
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM class ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Class' name='Class' class='form-control'>";
echo "<option value='0'>Select Class</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
   </td> 


          <td><span style="color: #3973ac; font-weight: bold; ">Subject</span></td>
          <td>
            
 <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Subject FROM subjects ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Subject' name='Subject' class='form-control'>";
echo "<option value='0'>Select Subject</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Subject'] ."'>" . $row['Subject'] ."</option>";
}
echo "</select>";

        ?> 
            
          </td>
        </tr>
        <tr>
                        
          <td><span style="color: #3973ac; font-weight: bold; ">State</span></td>
          <td>

  <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM states ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='State' name='State' class='form-control'>";
echo "<option value='0'>Select State</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?> 

          </td>

          <td><span style="color: #3973ac; font-weight: bold; ">City</span></td>
          <td>


            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM city ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='City' name='City' class='form-control'>";
echo "<option value='0'>Select City</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>         
          </td>
          <td><span style="color: #3973ac; font-weight: bold; ">Branch</span></td>
          <td>


            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT BranchName FROM branch ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Branch' name='Branch' class='form-control'>";
echo "<option value='0'>Select Branch</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['BranchName'] ."'>" . $row['BranchName'] ."</option>";
}
echo "</select>";

        ?>         
          </td>
        </tr>
        <tr>
    <td><span style="color: #3973ac; font-weight: bold; ">Batch Timing</span></td>
          <td>


            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM batchtiming ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Batchtime' name='Batchtime' class='form-control'>";
echo "<option value='0'>Select Batchtime</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>         
          </td>
           <td><span style="color: #3973ac; font-weight: bold; ">Homework Question</span></td>
           <td><input type="text" name="txthwquestion" id="txthwquestion" class="form-control">
          </td>

           <td><span style="color: #3973ac; font-weight: bold; ">Homework Description</span></td>
           <td><input type="text" name="txthwdes" id="txthwdes" class="form-control">
          </td>
        </tr>
        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Added By</span></td>
           <td><input type="text" name="txtadded" id="txtadded" class="form-control">
          </td>
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
            <th>Subject</th>
            <th>State</th>
            <th>City</th>
            <th>Branch</th>
            <th>BatchTime</th>
            <th>HomeWork Question</th>
            <th>HomeWork Description</th>
            <th>Added By</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM homework");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['Id'];
                $Course_nm=$row2['Course'];
                $Class_nm=$row2['class'];
                $Subject_nm=$row2['Subject'];
                $State_nm=$row2['State'];
                $City_nm=$row2['City'];
                $Branch_nm=$row2['Branch'];
                $Batchtime_nm=$row2['Batchtime'];
                $txthwquestion_nm=$row2['txthwquestion'];
                $txthwdes_nm=$row2['txthwdes'];
                $txtadded_nm=$row2['txtaddedby'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $Course_nm; ?></td>
            <td><?php echo $Class_nm; ?></td>
            <td><?php echo $Subject_nm; ?></td>
            <td><?php echo $State_nm; ?></td>
            <td><?php echo $City_nm; ?></td>
            <td><?php echo $Branch_nm; ?></td>
            <td><?php echo $Batchtime_nm; ?></td>
            <td><?php echo $txthwquestion_nm; ?></td>
            <td><?php echo $txthwdes_nm; ?></td>
            <td><?php echo $txtadded_nm; ?></td>
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

    $('#btnsubmit').click(function(event) {

    event.preventDefault();

    var id=$('#Id').val();  
    var Course=$('#Course').val();  
    var Class=$('#Class').val();
    var Subject=$('#Subject').val();
    var State=$('#State').val();
    var City=$('#City').val();  
    var Branch=$('#Branch').val();
    var Batchtime=$('#Batchtime').val();
    var txthwquestion=$('#txthwquestion').val();
    var txthwdes=$('#txthwdes').val();
    var txtadded=$('#txtadded').val();  
    

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
     else if(Subject=='')
    {
       $('.modal-body').html("Please Enter Subject ");
       $("#myModal").modal();
    }
     else if(State=='')
    {
       $('.modal-body').html("Please Enter State ");
       $("#myModal").modal();
    }
     else if(City=='')
    {
       $('.modal-body').html("Please Enter City ");
       $("#myModal").modal();
    }
    else if(Branch=='0')
    {
       $('.modal-body').html("Please Select Branch ");
       $("#myModal").modal();
    }
     else if(Batchtime=='')
    {
       $('.modal-body').html("Please Enter BatchTime ");
       $("#myModal").modal();
    } 
    else if(txthwquestion=='')
    {
       $('.modal-body').html("Please Enter Question ");
       $("#myModal").modal();
    }
     else if(txthwdes=='')
    {
       $('.modal-body').html("Please Enter Description ");
       $("#myModal").modal();
    }
     else if(txtadded=='')
    {
       $('.modal-body').html("Please Enter Added By ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'homework2.php',
         data: ({Id:id,Course:Course ,Class:Class , Subject:Subject , State:State , City:City , Branch:Branch , Batchtime:Batchtime , txthwquestion:txthwquestion , txthwdes:txthwdes ,txtadded:txtadded }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Homework Added Successfully");
                 $("#myModal").modal();   
                 setTimeout(function(){
                  window.location.href='homework.php';
                  }, 1000);  
                 
          }
             else
             {
                 $('.modal-body').html("Homework Not Added");
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