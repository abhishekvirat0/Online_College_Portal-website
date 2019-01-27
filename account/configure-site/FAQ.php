<?php

include '../../connection.php';

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Manage FAQ </title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('faq-update-modal.php?id='+id); /*Modal Content Load from page location*/
          $('#lightbox_modal').modal('show'); /* Loaded Modal Show*/
        }, 100);
      }

  </script>




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
    <form method="post" action="FAQ.php">
      <table class="table table-bordered">
        <tr>
     
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Manage FAQ</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
                                   <?php
                                    
                                     $result = mysqli_query($conn,"SELECT MAX(Id)+1 FROM faq");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtid" value="<?php echo  $highest_id; ?> " id="txtid" class="form-control">
       
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Title</span></td>
          <td><input type="text" name="title1" id="title1" class="form-control" >
          </td>
          </tr>
          <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Detail</span></td>
          <td><input type="text" name="detail" id="detail" class="form-control" >
          </td>
         
          <?php
                date_default_timezone_set("Asia/Kolkata");
                $date = date("Y-m-d");

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



    <!-- table start -->

    <br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Detail</th>
            <th>Date</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM faq");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['Id'];
                $title1=$row2['Title'];
                $detail1=$row2['Details'];
                $date1=$row2['date1'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $title1; ?></td>
            <td><?php echo $detail1; ?></td>
            <td><?php echo $date1; ?></td>
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

function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'faq-delete-code.php',
               data: ({ id: id }),
               success: function(response) {

               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='FAQ.php';
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







  $(document).ready(function() {  


        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var id=$('#txtid').val();
    var title1=$('#title1').val();  
    var detail=$('#detail').val();
    var date = $('#date').val();
    

    if(title1=='') 
    {
      infoAlert("Please Enter Title");
    }
    
    if(detail=='')
    {
       infoAlert("Please Enter Detail");
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'FAQ2.php',
         data: ({id:id, title1:title1, detail:detail, date:date}),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("FAQ Detail Added Successfully");
                 $("#myModal").modal();   
                  setTimeout(function(){
                  window.location.href='FAQ.php';
                  }, 4000); 
                 
                 
          }
             else
             {
                 $('.modal-body').html("FAQ Detial Not Added");
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