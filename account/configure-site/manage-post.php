<?php





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

  <?php include '../../assets/dashboard-assets-js.php'; ?>
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
          <form method="post" name="myForm" id="myForm" action="manage-post.php" onsubmit="return validateForm()" enctype="multipart/form-data">
            <table class="table table-bordered">
              <tr>
                <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Post Details</th></td>
              </tr>
              <tr>
                <td align="center" colspan="4">
                 <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
               </td>
               <td></td>
             </tr>
             
             <tr>
              <?php
              include '../../connection.php';
              $result = mysqli_query($conn,"SELECT MAX(ID)+1 FROM posts");
              $row = mysqli_fetch_row($result);
              $highest_id = $row[0];
              ?>
              <td><input type="hidden" name="ID" value="<?php echo   $highest_id; ?> " id="ID" class="form-control">
              </td>
            </tr>
            <tr>
              <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>
              <td>
                
                <?php

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


              <td><span style="color: #3973ac; font-weight: bold; ">Class</span></td>
              <td>
                
                <?php
//          mysql_connect('localhost', 'root', '');
// mysql_select_db('newsproject');

                $sqli1 = "SELECT Name FROM class";
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

              

              <tr>

                <tr>
                  
                  <td><span style="color: #3973ac; font-weight: bold; ">Title</span></td>
                  <td><input type="text" name="Title" id="Title" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
                  </td>

                  <td><span style="color: #3973ac; font-weight: bold; ">Sub Title</span></td>
                  <td><input type="text" name="SubTitle" id="SubTitle" class="form-control"> <span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
                  </td>
                  
                  
                  <td><span style="color: #3973ac; font-weight: bold; "> Description </span></td>
                  <td><input type="text" name="Description" id="Description" class="form-control"><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
                   
                  </td>
                </tr>
                <tr>

                  <td><span style="color: #3973ac; font-weight: bold; "> Upload Image </span></td>
                  <td><input tabindex="17" type="file" name="img" id="img" class="form-control">
                    <td></td>
                    <td>
                    </td>
                    <td></td>
                    <td></td>
                  </tr>

                  

                  
                  
                  <tr>
                    <td></td>
                    <td align="right" colspan = "1">
                      <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
                    </td>
                    <td align="left" colspan = "2">
                      <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
                    </td>
                    
                  </tr>
                  



                  <?php 

                  function faculty($cid,$crs,$cls,$brnch,$titl,$sbtitl,$des,$imginp)
                  {

                    include '../../connection.php';
                    if($_FILES['img']['tmp_name']!="")
                    { 
                      if ((($_FILES["img"]["type"] == "image/gif")
                        || ($_FILES["img"]["type"] == "image/png")
                        || ($_FILES["img"]["type"] == "image/jpeg")
                        || ($_FILES["img"]["type"] == "image/pjpeg"))
                        && ($_FILES["img"]["size"] < 199999999) )
                      {
                       copy($_FILES['img']['tmp_name'],"../../Images/".$imginp);
                       
                       $query="CALL InsertPost('".$cid."','".$crs."','".$cls."','".$brnch."','".$titl."','".$sbtitl."','".$des."','".$imginp."')";
                       $ans=mysqli_query($conn,$query);
                       return $ans;


                       
                     }else{
                      
                     }
                     

                   }

                   
                   
                 }



                 if(isset($_POST['btnsubmit']))
                 {
                  $cid=$_POST["ID"];
                  $crs=$_POST["Course"];
                  $cls=$_POST["Class"];
                  $brnch=$_POST["Branch"];
                  $titl=$_POST["Title"];
                  $sbtitl=$_POST["SubTitle"];
                  $des=$_POST["Description"];
                  $imginp = $_FILES['img']['name'];



                  $test=faculty($cid,$crs,$cls,$brnch,$titl,$sbtitl,$des,$imginp);

                  if($test!='')
                  {
                    echo '<script>alert("Post Inserted");</script>'; 
                    
                  }
                }



                ?>
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

<script type="text/javascript">
  function validateForm() 
  {

    var crs = document.forms["myForm"]["Course"].value;
    var cls = document.forms["myForm"]["Class"].value;
    var brnch = document.forms["myForm"]["Branch"].value;
    var titl = document.forms["myForm"]["Title"].value;
    var sbtitl = document.forms["myForm"]["SubTitle"].value;
    var des = document.forms["myForm"]["Description"].value;
    var imginp = document.forms["myForm"]["img"].value;
    
    


    if (des == "") {
      alert("Please Enter Your description");
      return false;
    }
    else if (imginp== "") {
      alert("Please Enter Your Image");
      return false;
    }
    
    

  }
</script>

<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#img").change(function(){
    readURL(this);
  });
</script>

</body>
</html>
<?php

?>