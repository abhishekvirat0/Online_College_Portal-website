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
    <form method="post" action="addtutor.php" enctype="multipart/form-data" name="myForm" id="myForm" onsubmit="return validateForm()">
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
                                     $result = mysqli_query($conn,"SELECT MAX(tid)+1 FROM tutor");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtid" value="<?php echo $highest_id; ?> " id="txtid" class="form-control">
          
           <td><span style="color: #3973ac; font-weight: bold; ">Tutor Name</span></td>
             <td><input type="text" name="txttname" id="txttname" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Speciality</span></td>
           <td><input type="text" name="txtspec" id="txtspec" class="form-control"></td>  
          
          <td><span style="color: #3973ac; font-weight: bold; ">Description</span></td>
            <td><input type="text" name="txtdesc1" id="txtdesc1" class="form-control"></td>
          
           </tr> 
        <tr>
        <td>
        </td>      
          <td><span style="color: #3973ac; font-weight: bold; ">Tutor Image</span></td>
           <td><input type="file" name="img" id="img" class="form-control"></td>

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
         <?php 

function tutor($id,$tname,$spec1,$desc1,$imginp)
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
          copy($_FILES['img']['tmp_name'],"tutorimages/".$imginp);
          
$query="CALL inserttutor('".$id."','".$tname."','".$spec1."','".$desc1."','".$imginp."')";
$ans=mysqli_query($conn,$query);
  return $ans;


       
        }else{
          
        }
                  

}

 
  
}

if(isset($_POST['btnsubmit']))
{
$id=$_POST["txtid"];
$tname=$_POST["txttname"];
$spec=$_POST["txtspec"];
$desc1=$_POST["txtdesc1"];
$imginp = $_FILES['img']['name'];

$test=tutor($id,$tname,$spec,$desc1,$imginp);

if($test!='')
{
  echo '<script>alert("Data Inserted");</script>'; 
 
}
}



?>
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
<script type="text/javascript">
function validateForm() 
  {  
    var tname = document.forms["myForm"]["txttname"].value;
    var spec= document.forms["myForm"]["txtspec"].value;
    var desc1= document.forms["myForm"]["txtdesc1"].value;
    var imginp = document.forms["myForm"]["img"].value;
   
     if (tname== "") {
        alert("Please Enter Tutor Name");
        return false;
      }  
        else if (spec== "") {
        alert("Please Enter Speciality");
        return false;
        }
         else if (desc1== "") {
        alert("Please Enter Description");
        return false;
       }
    else  if (imginp == "") {
        alert("Please Enter Image ");
        return false;
    }
    
    
    
}
</script>

</body>
</html>
<?php

?>