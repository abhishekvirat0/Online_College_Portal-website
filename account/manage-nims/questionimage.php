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
  <title>Nims |Admin</title>

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

<?php
function yo($qid,$ques,$op1,$op2,$op3,$op4,$ans)
{

   $connect=mysqli_connect("localhost","root","","mynims");

if($_FILES['img']['tmp_name']!="")
      { 
  if ((($_FILES["img"]["type"] == "image/gif")
        || ($_FILES["img"]["type"] == "image/png")
        || ($_FILES["img"]["type"] == "image/jpeg")
        || ($_FILES["img"]["type"] == "image/pjpeg"))
        && ($_FILES["img"]["size"] < 5999999999))
        {
          copy($_FILES['img']['tmp_name'],"quesimages/".$ques);
          copy($_FILES['img']['tmp_name'],"quesimages/".$op1);
          copy($_FILES['img']['tmp_name'],"quesimages/".$op2);
          copy($_FILES['img']['tmp_name'],"quesimages/".$op3);
          copy($_FILES['img']['tmp_name'],"quesimages/".$op4);
          copy($_FILES['img']['tmp_name'],"quesimages/".$ans);

          $sql="CALL insertquim ('".$qid."','".$ques."','".$op1."','".$op2."','".$op3."','".$op4."','".$ans."')";
  $query=mysqli_query($connect,$sql);
  return $query;
        }else{        }
}}


if(isset($_POST['btnsubmit']))
{
$qid=$_POST["txtqid"];
$ques = $_FILES['img']['name'];
$op1 = $_FILES['img1']['name'];
$op2 = $_FILES['img2']['name'];
$op3 = $_FILES['img3']['name'];
$op4 = $_FILES['img4']['name'];
$ans = $_POST["answer"];

$test=yo($qid,$ques,$op1,$op2,$op3,$op4,$ans);

if($test!='')
{
  echo '<script>alert("Question inserted");</script>'; 
 
}
}

?>


    <div class="panel panel-default">
    <form method="post" action="questionimage.php" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Question threw Image</th>
        </tr>   
        <tr>
          <td align="center" colspan="6">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>

         <tr>
         
            <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(qid)+1 FROM questionimage");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtqid" value="<?php echo $highest_id; ?> " id="txtqid" class="form-control">
          </td>
        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Question</span></td>
          <td>
            
           <input type="file" id="img" name="img" class="wp-form-control wpcf7-file">
            
          </td>

          <td><img id="question1" src="#" alt="Question Image will be displayed here after uploaded" style="width: 200px;height: 100px"></td>
          <td></td>
        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 1</span></td>
          <td>
            
           <input type="file" id="img1" name="img1" class="wp-form-control wpcf7-file">
            
          </td>

          <td><img id="option11" src="#" alt="Option 1 Image will be displayed here after uploaded" style="width: 200px;height: 100px"></td>
          <td></td>
        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 2</span></td>
          <td>
            
           <input type="file" id="img2" name="img2" class="wp-form-control wpcf7-file">
            
          </td>

          <td><img src="#" id="option22" alt="Option 2 Image will be displayed here after uploaded" style="width: 200px;height: 100px"></td>
          <td></td>
        </tr>

                <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 3</span></td>
          <td>
            
           <input type="file" id="img3" name="img3" class="wp-form-control wpcf7-file">
            
          </td>

          <td><img src="#" id="option33" alt="Option 3 Image will be displayed here after uploaded" style="width: 200px;height: 100px"></td>
          <td></td>
        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 4</span></td>
          <td>
            
           <input type="file" id="img4" name="img4" class="wp-form-control wpcf7-file">
            
          </td>

          <td><img src="#" id="option44" alt="Option 4 Image will be displayed here after uploaded" style="width: 200px;height: 100px"></td>
          <td></td>
        </tr>

                <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Answer</span></td>
          <td>
            
           <select class="wp-form-control wpcf7-Select" id="answer" name="answer"><option value="Select Answer">Select Answer</option>
                         <option value="option1">Option 1</option>
                         <option value="option2">Option 2</option>
                         <option value="option3">Option 3</option>
                         <option value="option4">Option 4</option>
               </select> 
          </td>

          <td></td>
          <td></td>
        </tr>
        <tr>
          <td align="right" colspan = "3">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "3">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
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
<script type="text/javascript">
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#question1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img").change(function(){
    readURL(this);
});
</script>

<script type="text/javascript">
  function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#option11').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img1").change(function(){
    readURL1(this);
});
</script>

<script type="text/javascript">
  function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#option22').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img2").change(function(){
    readURL2(this);
});
</script>

<script type="text/javascript">
  function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#option33').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img3").change(function(){
    readURL3(this);
});
</script>


<script type="text/javascript">
  function readURL4(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#option44').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#img4").change(function(){
    readURL4(this);
});
</script>

</body>
</html>
<?php
  }
}

?>