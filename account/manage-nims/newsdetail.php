<?php





?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | news detail</title>

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
    <form method="post" action="newsdetail.php">
      <table class="table table-bordered">
        <tr>
     
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">News Detail</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <!-- <?php
                                     // include '../../connection.php';
                                     // $result = mysqli_query($conn,"SELECT MAX(cid)+1 FROM referencetype");
                                     // $row = mysqli_fetch_row($result);
                                     // $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtcid" value="<?php // echo   $highest_id; ?> " id="txtcid" class="form-control"> -->
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Title</span></td>
          <td><input type="text" name="title1" id="title1" class="form-control" >
          </td>
          </tr>
          <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Detail</span></td>
          <td><input type="text" name="detail" id="detail" class="form-control" >
          </td>
         
          <?php
                date_default_timezone_get("India/Mumbai");
                $date = date('d/m/y', time());

                ?>  
                 <input type="hidden" class="form-control" value="<?php echo $date;  ?>" id="date" name="date" placeholder="Date">        
         </tr>
        <tr>
        
          <td align="center" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          <!-- </td>
          <td align="left" colspan = "2"> -->
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

    var title1=$('#title1').val();  
    var detail=$('#detail').val();
    var date = $('#date').val();
    

    if(title1=='') 
    {
      $('.modal-body').html("Please Enter Title ");
      $("#myModal").modal();
    }
    
    if(detail=='')
    {
       $('.modal-body').html("Please Enter Detail  ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'newsdetail2.php',
         data: ({title1:title1, detail:detail, date:date}),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("News Detail Added Successfully");
                 $("#myModal").modal();   
                  setTimeout(function(){
                  window.location.href='newsdetail.php';
                  }, 4000); 
                 
                 
          }
             else
             {
                 $('.modal-body').html("News Detial Not Added");
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