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
    <form method="post" name="myForm" id="myForm" action="manage-press1.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Press Releseas</th></td>
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
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM tb_pressrelease");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">
          
           
                           
          <!--<td><span style="color: #3973ac; font-weight: bold; "> Image Title </span></td>
          <td><input tabindex="17" type="file" name="img" id="img" class="form-control">
                 
          </td>-->



              <td><span style="color: #3973ac; font-weight: bold; ">Image</span></td>
                             <td><!-- <input type="file" name="img1" id="img1" class="form-control">
                             <img src="" width="100" height="100" style="margin-top: 10px"> -->
                               <input type="file" id="img" name="img" class="form-control"/></td>
                               <td><img id="blah" src="#" alt="your image" style="width: 100px;height: 100px;margin-top: 10px" />

                             </td>
                             
        

        <tr>
                           
          <td><span style="color: #3973ac; font-weight: bold; "> Description </span></td>
         <td><input type="text" name="txtdes" id="txtdes" class="form-control"><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
         <td></td>
                 
          </td>
        </tr>

         <tr>
                           
          <td><span style="color: #3973ac; font-weight: bold; "> Date </span></td>
          <td><input type="Date" name="txtdate" id="txtdate">
          <td></td>
                 
          </td>
        </tr>

        
        
        <tr>
          <td align="center" colspan = "3">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          
        </tr>
     



<?php 

function faculty($cid,$imginp,$des,$date)
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
          
$query="CALL AddPress('".$cid."','".$imginp."','".$des."','".$date."')";
$ans=mysqli_query($conn,$query);
  return $ans;


       
        }else{
          
        }
                  

}

 
  
}



if(isset($_POST['btnsubmit']))
{
$cid=$_POST["txtcid"];
$imginp = $_FILES['img']['name'];
$des=$_POST["txtdes"];
$date=$_POST["txtdate"];

$test=faculty($cid,$imginp,$des,$date);

if($test!='')
{
  echo '<script>alert("Data Inserted");</script>'; 
 
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
    
    var imginp = document.forms["myForm"]["img"].value;
    var des = document.forms["myForm"]["txtdes"].value;
    var date = document.forms["myForm"]["txtdate"].value;




      if (imginp== "") {
        alert("Please Enter Your Image");
        return false;
    }
    else  if (des == "") {
        alert("Please Enter Your description");
        return false;
    }
    else  if (date == "") {
        alert("Please Enter Your date");
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