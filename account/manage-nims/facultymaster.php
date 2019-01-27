<?php


include('../../ck.php');

if($ck!=1 or $ck!="1")
{
  header("Location: ../../login.php");
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
  <title>Nims | Admin</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>

<?php include '../../assets/dashboard-assets-js.php'; ?>



  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('facultymaster-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" name="myForm" id="myForm" action="facultymaster2.php" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Faculty Master</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
          <td></td>
        </tr>
   
        <tr>
                                  <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(Id)+1 FROM faculty");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">

          <td><span style="color: #3973ac; font-weight: bold; ">Faculty Name</span></td>

          <td><input type="text" name="txtfname" id="txtfname" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Education</span></td>
            <td><input type="text" name="txteducation" id="txteducation" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
            
        
           <td><span style="color: #3973ac; font-weight: bold; ">Contact No</span></td>
         
            
            <td><input type="text" name="txtcno" id="txtcno" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          </td>
          <td> 
               </td>    
                   <tr >
                        <td>
                          <td><span style="color: #3973ac; font-weight: bold; ">Image</span></td>
                             <td><!-- <input type="file" name="img1" id="img1" class="form-control">
                             <img src="" width="100" height="100" style="margin-top: 10px"> -->
                               <input type="file" id="img" name="img" class="form-control"/>
                               <img id="blah" src="#" alt="your image" style="width: 100px;height: 100px;margin-top: 10px" />

                             </td>
                             </td>
                             <td><span style="color: #3973ac; font-weight: bold; ">Address</span></td>
                             <td><input type="text" name="txtadd" id="txtadd" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>

                              <td><span style="color: #3973ac; font-weight: bold; ">Payment</span></td>  
                               <td><input type="text" name="txtpayment" id="txtpayment" class="form-control"><font color="#DB2929" style="font-size: small"></font><span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
                           <td>
                           </td>
                         </td> 
                   </tr>
       
        </tr>
        
        <tr>  <td></td><td></td>
          <td align="right" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" onclick="validateForm();" class="btn btn-primary">
          </td>
          <td align="left" colspan = "2">
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
            <th>Photo</th>
            <th>Faculty</th>
            <th>Education</th>
            <th>Contact</th>
            <th>Address</th>
            <th>Payment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM faculty");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['Id'];
                $user_nm=$row2['Name'];
                $eduction=$row2['eduction'];
                $cno=$row2['cno'];
                $image=$row2['image'];
                $add1=$row2['add1'];
                $payment=$row2['payment'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="facultyimages/<?php echo $image; ?>" width="100" height="100" alt="Planets"></td>
            <td><?php echo $user_nm; ?></td>
            <td><?php echo $eduction; ?></td>
            <td><?php echo $cno; ?></td>
            <td><?php echo $add1; ?></td>
            <td><?php echo $payment; ?></td>
            <td>
              <input type="button" name="btnEdit" id="btnEdit" value="Edit" class="btn btn-primary" onclick="edit_row('<?php echo $id; ?>')">
              <input type="button" name="btnDelete" id="btnDelete" value="Delete" class="btn btn-danger"onclick="delete_row('<?php echo $id; ?>')">
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


<!-- modal start -->

       <div id="lightbox_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
         <div id="light_box">

         </div>
       </div>




    <!-- Modal -->

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
                  <button type="button" class="btn btn-default" id="close" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>



<!-- modal end -->

<!-- ./wrapper -->

  <script>
  $(function(){
    $("#example").dataTable();
  })
  </script>


<script type="text/javascript">

function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'facultymaster-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='facultymaster.php';
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

  function validateForm() 
  {
    var fname= document.forms["myForm"]["txtfname"].value;
    var edu= document.forms["myForm"]["txteducation"].value;
    var cno= document.forms["myForm"]["txtcno"].value;
    var imginp = document.forms["myForm"]["img"].value;
    var add = document.forms["myForm"]["txtadd"].value;
    var payment = document.forms["myForm"]["txtpayment"].value;



    if (fname == "") {
      $('.modal-body').html("Please Enter Faculty Name ");
      $("#myModal").modal();
        return false;
    }
    else  if (edu == "") {
      $('.modal-body').html("Please Enter Educationional Qualification ");
      $("#myModal").modal();      
        return false;
    }
    else  if (cno == "") {
      $('.modal-body').html("Please Enter Contact Number ");
      $("#myModal").modal();      
        return false;
    }

    else  if (imginp== "") {
      $('.modal-body').html("Please Enter Faculty Picture ");
      $("#myModal").modal();
        return false;
    }
    else  if (add == "") {
      $('.modal-body').html("Please Enter Address of faculty ");
      $("#myModal").modal();
        return false;
    }
    else  if (payment == "") {
      $('.modal-body').html("Please Enter the Payment amount ");
      $("#myModal").modal();
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
  }
}

?>