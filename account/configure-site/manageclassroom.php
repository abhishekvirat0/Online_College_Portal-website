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
    <form method="post" action="managetimetable.php">
      <table class="table table-bordered">
        <tr>
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Manage Class Room</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
                                     include '../../connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(Id)+1 FROM manageclassroom");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="Id" value="<?php echo   $highest_id; ?> " id="Id" class="form-control">
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

echo "<select id='state' name='state' class='form-control'>";
echo "<option value='Select State'>Select State</option>";
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

echo "<select id='city' name='city' class='form-control'>";
echo "<option value='Select City'>Select City</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 


          <td><span style="color: #3973ac; font-weight: bold; ">Center</span></td>
          <td>
            
            <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

$sqli1 = "SELECT Name FROM centers";
$result = mysqli_query($conn,$sqli1);

echo "<select id='center' name='center' class='form-control'>";
echo "<option value='Select Center'>Select Center</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
}
echo "</select>";

        ?>
            
          </td> 


           <tr>
                              
          <td><span style="color: #3973ac; font-weight: bold; ">Class Room</span></td>
          <td><input type="text" name="classroom" id="classroom" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>

           
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

    var Id=$('#Id').val();  
    var state=$('#state').val();  
    var city=$('#city').val();  

    var center=$('#center').val();
    var classroom=$('#classroom').val();
    
    

    if(state=='Select State') 
    {
      $('.modal-body').html("Please Select State");
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
    else if(classroom=='') 
    {
      $('.modal-body').html("Please Enter class room");
      $("#myModal").modal();
    }
    
    
  else
  {
    $.ajax({
         type: 'POST',
         url: 'manageclassroom2.php',
         data: ({Id:Id, state:state ,city:city , center:center , classroom:classroom  , }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("classroom Added Successfully");
                 $("#myModal").modal();   
                // $('#Id').val('');
                // $('#state').val('Select State'); 
                 //$('#city').val(''); 
                 //$('#center').val(''); 
                 //$('#classroom').val('');
                 setTimeout(function(){
                  window.location.href='manageclassroom.php';
                  }, 1000);  
                
          }
             else
             {
                 $('.modal-body').html("classroom Not Added");
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