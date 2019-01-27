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
    <form method="post" action="addstudent.php">
      <table class="table table-bordered">
        <tr>
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Student</th>
        </tr>   
        <tr>
          
        </tr>
        <tr>
          
          
        </tr>
   
        <tr>
          <?php
          include '../../connection.php';
          $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM addstudent");
          $row = mysqli_fetch_row($result);
          $highest_id = $row[0];
          ?>
          <input type="hidden" name="id" value="<?php echo $highest_id; ?> " id="id" class="form-control">
          
        </tr>

        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">FirstName</span></td>

          <td>

            <?php

            $sqli1 = "SELECT fname FROM registration2 ";
            $result = mysqli_query($conn,$sqli1);

            echo "<select id='FirstName' name='FirstName' class='form-control'>";
            echo "<option value='Select FirstName'>Select FirstName</option>";
            while ($row = mysqli_fetch_array($result)) {
              echo "<option value='" . $row['fname'] ."'>" . $row['fname'] ."</option>";
            }
            echo "</select>";

            ?>
            
          </td>


<td><span style="color: #3973ac; font-weight: bold; ">MiddleName</span></td>

          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT mname FROM registration2 ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='MiddleName' name='MiddleName' class='form-control'>";
echo "<option value='Select MiddleName'>Select MiddleName</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['mname'] ."'>" . $row['mname'] ."</option>";
}
echo "</select>";

        ?>
            
          </td>



          <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>

          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM course ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Course' name='Course' class='form-control'>";
echo "<option value='Select Course'>Select Course</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 


          <tr>

           <td><span style="color: #3973ac; font-weight: bold; ">Class</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM class ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Class' name='Class' class='form-control'>";
echo "<option value='Select Class'>Select Class</option>";
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
echo "<option value='Select Branch'>Select Branch</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['BranchName'] ."'>" . $row['BranchName'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 



          <td><span style="color: #3973ac; font-weight: bold; ">Years</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Year FROM years ";
$result = mysqli_query($conn,$sqli1);

echo "<select id='Years' name='Years' class='form-control'>";
echo "<option value='Select Years'>Select Years</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Year'] ."'>" . $row['Year'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 
                              
         
        </tr>



        <tr>



         <!-- <td><span style="color: #3973ac; font-weight: bold; ">Day</span></td>
           <td>
    <select id="Day" class="Day" name="Day">

  <option value="Select Day" selected style="width: 200px;">Select Day</option>                       
  <option value="Tommarow">Tommarow</option>
  <option value="Today">Today</option>
 
  
</select>
                        
                            </td> -->

            <!--<td><span style="color: #3973ac; font-weight: bold; ">Day</span></td>
          <td><input type="text" name="Day" id="Day" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>-->


          
                              
         
        </tr>
        
        <tr>
          <td align="right" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "2">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
          </tr>
        </tr>

      </table>
      </form>
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

    var id=$('#id').val();  
    var FirstName=$('#FirstName').val(); 
    var MiddleName=$('#MiddleName').val();
    var Course=$('#Course').val();  
    var Class=$('#Class').val();  
    var Branch=$('#Branch').val();
    var Years=$('#Years').val();
     
    
   if(Course=='Select Course') 
    {
      $('.modal-body').html("Please Select Course ");
      $("#myModal").modal();
    }

    else if(Class=='Select Class') 
    {
      $('.modal-body').html("Please Select Class ");
      $("#myModal").modal();
    }
    else if(Branch=='Select Branch') 
    {
      $('.modal-body').html("Please Select Branch ");
      $("#myModal").modal();
    }

    else if(Years=='Select Years') 
    {
      $('.modal-body').html("Please Select Years ");
      $("#myModal").modal();
    }

    else if( FirstName=='Select FirstName') 
    {
      $('.modal-body').html("Please Select FirstName ");
      $("#myModal").modal();
    }


    else if( MiddleName=='Select MiddleName') 
    {
      $('.modal-body').html("Please Select Middle Name ");
      $("#myModal").modal();
    }
    
  else
  {
    $.ajax({
         type: 'POST',
         url: 'addstudent2.php',
         data: ({id:id , FirstName:FirstName , MiddleName:MiddleName , Course:Course ,Class:Class , Branch:Branch , Years:Years }),
         success: function(response3) 
     {       
             
             if(response3 == "1")
            {  
              $('.modal-body').html("Student Added Successfully");
                 $("#myModal").modal();   
                setTimeout(function(){
                  window.location.href='addstudent.php';
                  }, 1000);
          }
             else
             {
                 $('.modal-body').html("Student Not Added");
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