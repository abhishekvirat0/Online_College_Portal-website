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
  <title>Nims | Dashboard</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>


  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('add-exam-pattern-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }
      function display(){
      	
      	 var courseid=$('#courseid').val();  
    var branchid=$('#branchid').val();
    
      	        setTimeout(function(){
          $('#nxtdiv').load('attendance-display2.php?courseid='+courseid+'&branchid='+branchid);
        });
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
    <form method="post" action="add-attendance.php">
    	<div id="firstdiv">
      <table class="table table-bordered">
        <tr>
        
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Attendance Pattern</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>

          <!-- <input type="hidden" name="txtcid" value="<?php  ?> " id="txtcid" class="form-control"> -->
          <td><span style="color: #3973ac; font-weight: bold; ">Select Course</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='courseid' name='courseid' class='form-control'>";
echo "<option value='Select Course'>Select Course</option>";
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

$sqli1 = "SELECT BranchName FROM branch ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='branchid' name='branchid' class='form-control'>";
echo "<option value='Select Branch'>Select Branch</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['BranchName'] ."'>" . $row['BranchName'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>           
        </tr>
        
        <tr>
        
          <td align="right" colspan = "2">
            <input type="button" name="btnsearch" id="btnsearch" value="Search" onclick="display();" class="btn btn-primary">
          </td>
        </tr>
      </table>
      </div>
      </form>
    </div>   




    <!-- table start -->

    <br><br>

    <div>
      <form method="post" name="frm1" action="add-attendance.php">
      	<div id="nxtdiv">
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Class</th>
            <th>Attendance</th>
            <th>Date</th>

          </tr>
        </thead>
        <tbody>



        </tbody>
      </table>
</div>	
    </div>

    <!-- table end -->


</form>
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

<script type="text/javascript">
  
    $(document).ready(function() {  

        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var courseid=$('#courseid').val();  
    var branchid=$('#branchid').val();
    var attend=$('#attend').val(); 
    var date1=$('#date1').val();
    var id1=$('#id1').val();
    var fname=$('#fname').val();
    var mname=$('#mname').val();
    var class1=$('#class1').val();

    if(courseid=='Select Course') 
    {
      $('.modal-body').html("Please Enter Course Name ");
      $("#myModal").modal();
    }
    
    else if(branchid=='Select Branch')
    {
       $('.modal-body').html("Please Enter Branch Name ");
       $("#myModal").modal();
    }
  else{

    $.ajax({
         type: 'POST',
         url: 'add-attendance2.php',
         data: ({courseid:courseid, branchid:branchid ,attend:attend , date1:date1 , id1:id1 , fname:fname , mname:mname , class1:class1}),
         success: function(response) 
     {  
             if(response == "1" || response == 1)
            {  
              	// $('.modal-body').html("Board/University Added Successfully");
               //   $("#myModal").modal(); 
                 alert('Attendance recorded successfully');
          }
             else
             {
             	alert(response);
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