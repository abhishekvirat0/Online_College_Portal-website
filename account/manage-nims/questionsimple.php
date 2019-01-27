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




    <div class="panel panel-default">
    <form method="post" action="questionimage.php" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Question</th>
        </tr>   
        <tr>
          <td align="center" colspan="6">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>

         <tr>
         
            <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(qid)+1 FROM qsimple");
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

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Subject</span></td>
          <td>
            
           <input type="text" id="sub" name="sub" class="wp-form-control wpcf7-text">
            
          </td>

          
          
        </tr>


        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Question</span></td>
          <td>
            
           <input type="text" style="width: 500px;height: 150px" id="ques" name="ques" class="wp-form-control wpcf7-text">
            
          </td>

        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 1</span></td>
          <td>
            
           <input type="text" id="opt1" style="width: 500px;" name="opt1" class="wp-form-control wpcf7-text">
            
          </td>

        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 2</span></td>
          <td>
            
           <input type="text" id="opt2" style="width: 500px;" name="opt2" class="wp-form-control wpcf7-text">
            
          </td>

          <td></td>
        </tr>

                <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 3</span></td>
          <td>
            
           <input type="text" id="opt3" style="width: 500px;" name="opt3" class="wp-form-control wpcf7-text">
            
          </td>

          <td></td>
        </tr>

        <tr>
         <td></td>
          <td>
            
            
          </td>

                   <td><span style="color: #3973ac; font-weight: bold; " align="center">Option 4</span></td>
          <td>
            
           <input type="text" id="opt4" style="width: 500px;" name="opt4" class="wp-form-control wpcf7-text">
            
          </td>

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

  <script >

  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var qid=$('#txtqid').val();
    var subject=$('#sub').val();  
    var question=$('#ques').val();
    var option1=$('#opt1').val();
    var option2=$('#opt2').val();
    var option3=$('#opt3').val();
    var option4=$('#opt4').val();
    var answer=$('#answer').val();
    
    if(subject=='') 
    {
      $('.modal-body').html("Please Enter Subject Name ");
      $("#myModal").modal();
    }
    else if(question=='')
    {
       $('.modal-body').html("Please Enter Question");
       $("#myModal").modal();
    }
    else if(option1=='')
    {
       $('.modal-body').html("Please Enter Option 1");
       $("#myModal").modal();
    }
        else if(option2=='')
    {
       $('.modal-body').html("Please Enter Option 2");
       $("#myModal").modal();
    }
        else if(option3=='')
    {
       $('.modal-body').html("Please Enter Option 3");
       $("#myModal").modal();
    }
        else if(option4=='')
    {
       $('.modal-body').html("Please Enter Option 4");
       $("#myModal").modal();
    }
        else if(answer=='Select Answer')
    {
       $('.modal-body').html("Please Select Answer");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'questionsimple2.php',
         data: ({qid:qid, subject:subject ,question:question , option1:option1 , option2:option2 , option3:option3 , option4:option4 , answer:answer }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Question Added Successfully");
                 $("#myModal").modal();
                 setTimeout(function(){
                  window.location.href='questionsimple.php';
                  }, 1000); 
          }
             else
             {
                 $('.modal-body').html("Question Not Added");
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