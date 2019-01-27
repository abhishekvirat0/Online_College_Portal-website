<?php





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
          $('#light_box').load('result-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="result.php" >
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Topper Details</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
                                     include '../../connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM  result");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtid" value="<?php echo   $highest_id; ?> " id="txtid" class="form-control">
          
           <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>
             <td> <?php
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

        ?></td>
           <td><span style="color: #3973ac; font-weight: bold; ">Class</span></td>
           <td><?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM  class ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='classname' name='classname' class='form-control'>";
echo "<option value='Select Class'>Select Class</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            </td>
            <td><span style="color: #3973ac; font-weight: bold; ">Branch</span></td>
           <td><?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  BranchName FROM branch ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='branch' name='branch' class='form-control'>";
echo "<option value='Select Branch'>Select Branch</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['BranchName'] ."'>" . $row['BranchName'] ."</option>";
}
echo "</select>";

        ?></td> 
          </tr> 
        <tr>
        <td>
        </td>      
           
          
          <td><span style="color: #3973ac; font-weight: bold; ">College</span></td>
            <td><input type="text" name="txtclg" id="txtclg" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Subject</span></td>
           <td><input type="text" name="txtsub" id="txtsub" class="form-control"></td>
           <td><span style="color: #3973ac; font-weight: bold; ">Year Of Result</span></td> 
            <td><input type="text" name="txtresult" id="txtresult" class="form-control"></td>
             
          <tr> 
          <td></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Students Appeared</span></td> 
            <td><input type="text" name="txtapp" id="txtapp" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Student Pass</span></td> 
          <td><input type="text" name="txtpass" id="txtpass" class="form-control"></td>
          </tr>
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


 <br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Course</th>
            <th>Class</th>
            <th>Branch</th>
            <th>College</th>
            <th>Subject</th>
            <th>Year Of Result</th>
            <th>Students Appeared</th>
            <th>Student Pass</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM result");
              while($row2 = mysqli_fetch_array($get2))
              {
                        $id=$row2['id'];
                        $course=$row2['course'];
                        $class=$row2['class'];
                        $branch=$row2['branch'];
                        $clg=$row2['clg'];
                        $sub=$row2['sub'];
                        $yresult=$row2['yresult'];
                        $sappeared=$row2['sappeared'];
                        $spass=$row2['spass']; 

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course; ?></td>
            <td><?php echo $class; ?></td>
            <td><?php echo $branch; ?></td>
            <td><?php echo $clg; ?></td>
            <td><?php echo $sub; ?></td>
            <td><?php echo $yresult; ?></td>
            <td><?php echo $sappeared; ?></td>
            <td><?php echo $spass; ?></td>
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

        <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
         <div id="light_box">

         </div>
       </div>

<!-- ./wrapper -->

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
               url: 'result-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='result.php';
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
    var course=$('#course').val();
    var classname=$('#classname').val();
    var branch=$('#branch').val();
    
    var clg=$('#txtclg').val();
    var sub=$('#txtsub').val();
    var result=$('#txtresult').val();
    var app=$('#txtapp').val();
    var pass=$('#txtpass').val();
    

    if(course=='Select Course') 
    {
      $('.modal-body').html("Please Select Course Name ");
      $("#myModal").modal();
    }
    
    else if(classname=='Select Class')
    {
       $('.modal-body').html("Please Select Class ");
       $("#myModal").modal();
    }
    else if(clg=='')
    {
       $('.modal-body').html("Please Enter College ");
       $("#myModal").modal();
    }
    else if(sub=='')
    {
       $('.modal-body').html("Please Enter Subject");
       $("#myModal").modal();
    }
     else if(result=='')
    {
       $('.modal-body').html("Please Enter Result");
       $("#myModal").modal();
    }
   
    else if(app=='')
    {
       $('.modal-body').html("Please Enter Students Appeared");
       $("#myModal").modal();
    }
    else if(pass=='')
    {
       $('.modal-body').html("Please Enter Students Pass");
       $("#myModal").modal();
    }
    
  else
  {
    $.ajax({
         type: 'POST',
         url: 'result2.php',
         data: ({id:id, course:course , classname:classname , branch:branch ,clg:clg , sub:sub , result:result ,app:app , pass:pass }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Result Added Successfully");
                 $("#myModal").modal();
                 setTimeout(function(){
                  window.location.href='result.php';
                  }, 1000); 
          }
             else
             {
                 $('.modal-body').html("Result Not Added ");
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