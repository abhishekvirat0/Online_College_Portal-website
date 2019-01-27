<?php

include '../../connection.php';

if(isset($_POST['btnsubmit']))
{

  $cid=$_POST["txtid"];
  $imginp = $_FILES['img']['name'];
  $title=$_POST["txttitle"];
  $desc=$_POST["txtdesc"];

    $target_dir = "galleryimages/";
    $target_file = $target_dir . basename($_FILES["img"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
        // $check = getimagesize($_FILES["img"]["tmp_name"]);
        // if($check !== false) {
        //     // echo "File is an image - " . $check["mime"] . ".";
        //     $uploadOk = 1;
        // } else {
        //     echo '<script>alert("File is not an image.");</script>';
        //     // echo "File is not an image.";
        //     $uploadOk = 0;
        // }
    // }
    // Check if file already exists
    if (file_exists($target_file)) {

        echo '<script>alert("Sorry, file already exists.");</script>';
        // echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["img"]["size"] > 1000000) {

        echo '<script>alert("Sorry, your file is too large.");</script>';
        // echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {

        echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script>';
        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {

        echo '<script>alert("Sorry, your file was not uploaded.");</script>';
        // echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {

          $query = mysqli_query($conn, "INSERT INTO imgs (id,img,title,desc1) VALUES ('$cid','$imginp','$title','$desc')");

          echo '<script>alert("Data Inserted");</script>';

            // echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
        } else {

            echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
            // echo "Sorry, there was an error uploading your file.";
        }
    }

}




?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nims | Dashboard</title>

  <?php include '../../assets/dashboard-assets-css.php'; ?>
   <script type="text/javascript">
    
      function edit_row(id)
      {
        setTimeout(function(){
          $('#light_box').load('managegallery-update-modal.php?id='+id); /*Modal Content Load from page location*/
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
    <form method="post" action="managegallery.php"  name="myForm" id="myForm" onsubmit="return validateForm()" enctype="multipart/form-data">
      <table class="table table-bordered">
        <tr>
        
          <th colspan="4" class="panel-heading" style="font-weight: bold; text-align: center;">Manage Image Gallery</th>
        </tr>   
        <tr>
          <td align="center" colspan="4">
             <!-- <asp:Label ID="lblerrormsg" runat="server" ForeColor="Red"></asp:Label> -->
          </td>
        </tr>
   
        <tr>
                        
          <td><span style="color: #3973ac; font-weight: bold; ">Select Your Image</span></td>
          <td><input type="file" name="img" id="img" class="form-control"></td>
          </td>
        </tr>

        <?php
                                     
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM imgs");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <input type="hidden" name="txtid" value="<?php echo $highest_id; ?> " id="txtid" class="form-control">


        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Write Title</span></td>
          <td><input type="text" name="txttitle" id="txttitle" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- </font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          <td>
        </tr>
        
        <tr>
          <td><span style="color: #3973ac; font-weight: bold; ">Write Description</span></td>
          <td><input type="text" name="txtdesc" id="txtdesc" class="form-control" style="width: 200px">(<font color="#DB2929" style="font-size: small">e.g.- </font>)<span id="spnError" style="color: Red; display: none">*Enter Characters Only.</span>
          <td>
        </tr>

        <tr>
         <td></td>
          <td align="left">
            <input type="submit" name="btnsubmit" id="btnsubmit" value="Submit" class="btn btn-primary">

            <input type="button" name="btnclear" id="btnclear" value="Clear" class="btn btn-primary">
          </td>

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
            <th>Photo</th>
            <th>Title</th>
            <th>Description</th>
            
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM imgs");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $user_nm=$row2['img'];
                $title=$row2['title'];
                $desc1=$row2['desc1'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><img src="galleryimages/<?php echo $user_nm; ?>" width="100" height="100" alt="Planets"></td>
            <td><?php echo $title; ?></td>
            <td><?php echo $desc1; ?></td>
            

            <td>
              
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
               url: 'managegallery-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='managegallery.php';
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
    var imginp = document.forms["myForm"]["img"].value;
    var title= document.forms["myForm"]["txttitle"].value;
    var desc= document.forms["myForm"]["txtdesc"].value;
    
   
        if (imginp== "") {
        infoAlert("Please Enter Your Image");
        return false;
    }
    

      else if (title == "") {
        infoAlert("Please Enter Title");
        return false;
    }
    else  if (desc == "") {
      infoAlert("Please Enter  Description");
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