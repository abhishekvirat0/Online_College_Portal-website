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
  <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('event-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="event.php" name="myForm" id="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
          <td><th colspan="6" class="panel-heading" style="font-weight: bold; text-align: center;">Add Events</th></td>
           </tr>
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
        <?php
                                     include '../../connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM events1");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtcid" value="<?php echo   $highest_id; ?> " id="txtcid" class="form-control">
          <td><span style="color: #3973ac; font-weight: bold; ">Event Name</span></td>
          <td>
            
           <input type="text" name="txtename" id="txtename" class="form-control">(<font color="#DB2929" style="font-size: small"></font>)<span id="spnError" style="color: Red; display: none"></span>
          </td>      

           <td><span style="color: #3973ac; font-weight: bold; ">Month</span></td>
          <td>
            <input type="text" name="txtdesc" id="txtdesc" class="form-control">(<font color="#DB2929" style="font-size: small"></font>)<span id="spnError" style="color: Red; display: none"></span>
            
          </td> 
           <td><span style="color: #3973ac; font-weight: bold; ">Date</span></td>
          <td>
            
           <input type="text" name="txtdate" id="txtdate" class="form-control">(<font color="#DB2929" style="font-size: small"></font>)<span id="spnError" style="color: Red; display: none"></span>
                        
          </td>
          </tr> 
        <tr>
        <td>
        </td>      
          <td><span style="color: #3973ac; font-weight: bold; ">Time</span></td>
          <td>
            
           <input type="time" name="txttime" id="txttime" class="form-control">(<font color="#DB2929" style="font-size: small"></font>)<span id="spnError" style="color: Red; display: none"></span>
            
          </td>                  
          
       <td><span style="color: #3973ac; font-weight: bold; ">Address</span></td>
          <td>
            
            <input type="text" name="txtadd" id="txtadd" class="form-control">(<font color="#DB2929" style="font-size: small"></font>)<span id="spnError" style="color: Red; display: none"></span>
            
          </td>  
          <td><span style="color: #3973ac; font-weight: bold; ">Image</span></td> 
          <td><input type="file" id="img" name="img" class="form-control"/>
                               </td>
        </tr>
        <td>
        </td>
        <tr>  <td></td><td></td>
          <td align="right" colspan = "2">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">
          </td>
          <td align="left" colspan = "2">
            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>
          <td>
          </td>
           <?php 

function event($cid,$ename,$desc,$dat,$ti,$add1,$imginp)
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
          copy($_FILES['img']['tmp_name'],"eventimages/".$imginp);
          
$query="CALL insertevent('".$cid."','".$ename."','".$desc."','".$dat."','".$ti."','".$add1."','".$imginp."'
)";
$ans=mysqli_query($conn,$query);
  return $ans;


       
        }else{
          
        }
                  

}

 
  
}



if(isset($_POST['btnsubmit']))
{
$cid=$_POST["txtcid"];
$ename=$_POST["txtename"];
$desc=$_POST["txtdesc"];
$dat=$_POST["txtdate"];
$ti=$_POST["txttime"];
$add1=$_POST["txtadd"];
$imginp = $_FILES['img']['name'];
$test=event($cid,$ename,$desc,$dat,$ti,$add1,$imginp);

if($test!='')
{
  echo '<script>successAlert("Data Inserted");</script>'; 
 
}
}



?>
        </tr>
      </table>
      </form>
    </div>   
<br><br>

    <div>
      
      <table id="example" class="table table-striped table-bordered cell-border" cellspacing="0" width="100%">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Date</th>
            <th>Time</th>
            <th>Address</th>
            <th>Payment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM events1");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $name=$row2['name'];
                $desc1=$row2['desc1'];
                $date1=$row2['date1'];
                $time1=$row2['time1'];
                $add1=$row2['add1'];
                $image=$row2['pic'];

?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $desc1; ?></td>
            <td><?php echo $date1; ?></td>
            <td><?php echo $time1; ?></td>
            <td><?php echo $add1; ?></td>
             <td><img src="eventimages/<?php echo $image; ?>" width="100" height="100" alt="Image"></td>
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

function delete_row(id)
{

      $.confirm({
        title: 'Confirmation!',
        content: 'Are you sure?',
        buttons: {
            confirm: function () {
                
               $.ajax({
               type: 'POST',
               url: 'event-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='event.php';
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
    var ename= document.forms["myForm"]["txtename"].value;
    var desc= document.forms["myForm"]["txtdesc"].value;
    var dat= document.forms["myForm"]["txtdate"].value;
    var ti= document.forms["myForm"]["txttime"].value;
    var add1 = document.forms["myForm"]["txtadd"].value;
    var imginp = document.forms["myForm"]["img"].value;
   
    if (ename == "") {
        infoAlert("Please Enter Event Name");
        return false;
    }
    else  if (desc == "") {
        infoAlert("Please Enter  Description");
        return false;
    }
    else  if (dat == "") {
       infoAlert("Please Enter Date");
        return false;
    }

     else  if (ti == "") {
        infoAlert("Please Enter Time");
        return false;
    }
    else  if (add1 == "") {
        infoAlert("Please Enter Your Address");
        return false;
    }
    else  if (imginp== "") {
        infoAlert("Please Enter Your Image");
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