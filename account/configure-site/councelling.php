<?php

include '../../connection.php';

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage Councelling </title>

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
        <br><br>

        <div>

          <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email Id</th>
                <th>Councelling Date</th>
                <th>Timing</th>
                <th>Mode</th>
                <th>Action</th>

              </tr>
            </thead>
            <tbody>

              <?php

              $get2 = mysqli_query($conn,"SELECT * FROM councel");
              while($row2 = mysqli_fetch_array($get2))
              {

                $cid=$row2['id'];
                $uname=$row2['name'];
                $phone=$row2['mobile'];
                $mail=$row2['email'];
                $query =$row2['doc'];
                $mess = $row2['cot'];
                $democlass = $row2['mode'];

                ?>      
                <div id="tbl_row">
                  <tr>
                    <td><?php echo $cid; ?></td>
                    <td><?php echo $uname; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $mail; ?></td>
                    <td><?php echo $query; ?></td>
                    <td><?php echo $mess; ?></td>
                    <td><?php echo $democlass; ?></td>
                    <td>        
                      <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger" onclick="delete_row('<?php echo $cid; ?>')">
                    </td>
                  </tr>
                </div>
                <?php  
              }

              ?>
            </tbody>
          </table>

        </div>

        <!-- table end -->




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


 <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
   <div id="light_box">

   </div>
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

  function delete_row(cid)
  {

    $.confirm({
      title: 'Confirmation!',
      content: 'Are you sure?',
      buttons: {
        confirm: function () {

         $.ajax({
           type: 'POST',
           url: 'couc-delete-code.php',
           data: ({ cid: cid }),
           success: function(response) {

             if(response == "1" || response == 1 )
             {
               successAlert("Data Deleted");
               setTimeout(function(){
                 window.location.href='councelling.php';
               }, 1000);
             }
             else
             {
               errorAlert("Undefined Error!");
             }
           }
         });
       },
       cancel: function () {

       }
     }
   });

  }

</script>

</body>
</html>
