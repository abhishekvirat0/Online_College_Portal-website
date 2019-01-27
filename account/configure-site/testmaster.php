<?php





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | Admin</title>

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
    <form method="post" action="testmaster.php">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Weekly Test</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
                                     include '../../connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM  weeklytest");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtid" value="<?php echo   $highest_id; ?> " id="txtid" class="form-control">
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
            
            <?php
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
           <td><span style="color: #3973ac; font-weight: bold; ">Select Branch</span></td>
          <td>
            
            <?php
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

        ?>
            
          </td>
          </tr> 
        <tr>
        <td>
        </td>      
          <td><span style="color: #3973ac; font-weight: bold; ">Select City</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM city";
$result = mysqli_query($conn,$sqli1);

echo "<select id='city' name='city' class='form-control'>";
echo "<option value='Select City'>Select City</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>                  
          
 <td><span style="color: #3973ac; font-weight: bold; ">Select Center</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  Name FROM  centers";
$result = mysqli_query($conn,$sqli1);

echo "<select id='center' name='center' class='form-control'>";
echo "<option value='Select Center'>Select Center</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>  

          <td><span style="color: #3973ac; font-weight: bold; ">Batch Time</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  Name FROM batchtiming";
$result = mysqli_query($conn,$sqli1);

echo "<select id='btime' name='btime' class='form-control'>";
echo "<option value='Select Batch Timing'>Select Batch Timing</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>
          <tr> 
          <td></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Select Subject</span></td> 
           <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT  Subject FROM  subjects";
$result = mysqli_query($conn,$sqli1);

echo "<select id='subject' name='subject' class='form-control'>";
echo "<option value='Select Subject'>Select Subject</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Subject'] ."'>" . $row['Subject'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>

          <td><span style="color: #3973ac; font-weight: bold; ">Test Name</span></td> 
          <td><input type="text" name="txttname" id="txttname" class="form-control"></td>

          <td><span style="color: #3973ac; font-weight: bold; ">Description</span></td> 
          <td><input type="text" name="txtdesc" id="txtdesc" class="form-control"></td>
          </tr>

          <tr>
          <td></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Chapter Name</span></td> 
          <td><input type="text" name="txtcname" id="txtcname" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Total Marks</span></td> 
          <td><input type="text" name="txtmarks" id="txttmarks" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Test Date</span></td> 
          <td><input type="Date" name="txttdate" id="txttdate" class="form-control"></td>
        </tr>
        <tr><td></td>
        <td><span style="color: #3973ac; font-weight: bold; ">Test Time</span></td> 
          <td><input type="time" name="txttime" id="txttime" class="form-control"></td>

          <td><span style="color: #3973ac; font-weight: bold; ">Assign Test Center</span></td> 
          <td><input type="text" name="txttcenter" id="txttcenter" class="form-control"></td>
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
            <th>City</th>
            <th>Center</th>
            <th>Batch Timing</th>
            <th>Subject</th>
            <th>Test Name</th> 
            <th>Chapter Name</th>
            <th>Total Marks</th>
            <th>Test Date</th>
            <th>Test Time</th>
            <th>Assign Test Center</th>
         <th>action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM  weeklytest");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $course=$row2['courseid'];
                $class1=$row2['classname'];
                $branch=$row2['bid'];
                $city=$row2['centerid'];
                $center=$row2['tcenter'];
                 $btime=$row2['timeid'];
                $subject=$row2['syid'];
                $tname=$row2['tname'];
                $cname=$row2['cname'];
                $tmarks=$row2['marks'];
                $tdate=$row2['date1'];
           
                $ttime=$row2['ttime'];
              
                $acenter=$row2['centerid'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $course; ?></td>
             <td><?php echo $class1; ?></td>
            <td><?php echo $branch; ?></td>
            <td><?php echo $city; ?></td>
             <td><?php echo $center; ?></td>
             <td><?php echo $btime; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $tname; ?></td>
            <td><?php echo $cname; ?></td>
            <td><?php echo $tmarks; ?></td>
            <td><?php echo $tdate; ?></td>
            <td><?php echo $ttime; ?></td>
            <td><?php echo $acenter; ?></td>
            
           
           
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
<!-- ./wrapper -->

<?php include '../../assets/dashboard-assets-js.php'; ?>

      <script >

  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var id=$('#txtid').val();  
    var course=$('#course').val();
    var classname=$('#classname').val();
    var branch=$('#branch').val();
    var city=$('#city').val();
    var center=$('#center').val();
    var btime=$('#btime').val();
    var subject=$('#subject').val();
    var tname=$('#txttname').val();
    var tdesc=$('#txtdesc').val();
    var cname=$('#txtcname').val();
    var tmarks=$('#txttmarks').val();
    var tdate=$('#txttdate').val();
    var ttime=$('#txttime').val();
    var tcenter=$('#txttcenter').val();

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
    else if(branch=='Select Branch')
    {
       $('.modal-body').html("Please Select Branch ");
       $("#myModal").modal();
    }
    else if(city=='Select City')
    {
       $('.modal-body').html("Please Select City");
       $("#myModal").modal();
    }
     else if(center=='Select Center')
    {
       $('.modal-body').html("Please Select Center");
       $("#myModal").modal();
    }
    else if(btime=='Select Batch Timing')
    {
       $('.modal-body').html("Please Select batch Timing");
       $("#myModal").modal();
    }
    else if(subject=='Select Subject')
    {
       $('.modal-body').html("Please Select Subject");
       $("#myModal").modal();
    }
    else if(tname=='')
    {
       $('.modal-body').html("Please Enter Test Name");
       $("#myModal").modal();
    }
    else if(tdesc=='')
    {
       $('.modal-body').html("Please Enter Description");
       $("#myModal").modal();
    }
    else if(cname=='')
    {
       $('.modal-body').html("Please Enter Chapter Name");
       $("#myModal").modal();
    }
    else if(tmarks=='')
    {
       $('.modal-body').html("Please Enter Total Marks");
       $("#myModal").modal();
    }
    else if(tdate=='')
    {
       $('.modal-body').html("Please Enter Test Date");
       $("#myModal").modal();
    }
    else if(ttime=='')
    {
       $('.modal-body').html("Please Enter Test Time");
       $("#myModal").modal();
    }
    else if(tcenter=='')
    {
       $('.modal-body').html("Please Enter Test Center");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'testmaster2.php',
         data: ({id:id, course:course ,classname:classname,branch:branch,city:city,center:center,btime:btime,subject:subject,tname:tname,tdesc:tdesc,cname:cname,tmarks:tmarks,tdate:tdate,ttime:ttime,tcenter:tcenter }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Test Added Successfully");
                 $("#myModal").modal();
                 setTimeout(function(){
                  window.location.href='testmaster.php';
                  }, 1000); 
          }
             else
             {
                 $('.modal-body').html("Test Not Added ");
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