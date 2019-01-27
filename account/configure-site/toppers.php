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
    <form method="post" action="toppers.php" enctype="multipart/form-data" name="myForm" id="myForm" onsubmit="return validateForm()">
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
                                     $result = mysqli_query($conn,"SELECT MAX(id)+1 FROM  toppers");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
          <td><input type="hidden" name="txtid" value="<?php echo   $highest_id; ?> " id="txtid" class="form-control">
          <td><span style="color: #3973ac; font-weight: bold; ">Name</span></td>
             <td><input type="text" name="txtname" id="txtname" class="form-control"></td>
           <td><span style="color: #3973ac; font-weight: bold; ">Course</span></td>
             <td><input type="text" name="txtcourse" id="txtcourse" class="form-control"></td>
           <td><span style="color: #3973ac; font-weight: bold; ">Class</span></td>
           <td><input type="text" name="txtclass" id="txtclass" class="form-control"></td>
          </tr> 
        <tr>
        <td>
        </td>      
          <td><span style="color: #3973ac; font-weight: bold; ">Branch</span></td>
           <td><input type="text" name="txtbranch" id="txtbranch " class="form-control"></td>  
          
          <td><span style="color: #3973ac; font-weight: bold; ">College</span></td>
            <td><input type="text" name="txtclg" id="txtclg" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Subject</span></td>
           <td><input type="text" name="txtsub" id="txtsub" class="form-control"></td>
             
          <tr> 
          <td></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Marks</span></td> 
            <td><input type="text" name="txtmarks" id="txtmarks" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Total Marks</span></td> 
          <td><input type="text" name="txttmarks" id="txttmarks" class="form-control"></td>

          <td><span style="color: #3973ac; font-weight: bold; ">Rank</span></td> 
          <td><input type="text" name="txtrank" id="txtrank" class="form-control"></td>

          
          </tr>

          <tr>
          <td></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Percentage</span></td> 
          <td><input type="text" name="txtper" id="txtper" class="form-control"></td>
          <td><span style="color: #3973ac; font-weight: bold; ">Year</span></td> 
          <td><input type="text" name="txtyear" id="txtyear" class="form-control"></td>
          
          <td><span style="color: #3973ac; font-weight: bold; ">Student Image</span></td> 
          <td><input type="file" name="img" id="img" class="form-control"></td>
        </tr>

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

function event($id,$name,$course,$class,$branch,$clg,$sub,$marks,$tmarks,$rank,$per,$year,$imginp)
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
          copy($_FILES['img']['tmp_name'],"toppersimages/".$imginp);
          
$query="CALL inserttopper('".$id."','".$name."','".$course."','".$branch."','".$marks."','".$rank."','".$per."','".$imginp."','".$year."','".$tmarks."','".$class."','".$sub."','".$clg."')";
$ans=mysqli_query($conn,$query);
  return $ans;


       
        }else{
          
        }
                  

}

 
  
}

if(isset($_POST['btnsubmit']))
{
$id=$_POST["txtid"];
$name=$_POST["txtname"];
$course=$_POST["txtcourse"];
$class=$_POST["txtclass"];
$branch=$_POST["txtbranch"];
$clg=$_POST["txtclg"];
$sub=$_POST["txtsub"];
$marks=$_POST["txtmarks"];
$tmarks=$_POST["txttmarks"];
$rank=$_POST["txtrank"];
$per=$_POST["txtper"];
$year=$_POST["txtyear"];
$imginp = $_FILES['img']['name'];

$test=event($id,$name,$course,$class,$branch,$clg,$sub,$marks,$tmarks,$rank,$per,$year,$imginp);

if($test!='')
{
  echo '<script>alert("Data Inserted");</script>'; 
 
}
}



?>
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
            <th>Name</th>
            <th>Course</th>
           
            <th>Marks</th>
            <th>Rank</th>
            <th>Percentage</th>
            <th>Photo</th>
            <th>Year</th>
         
            <th>Class</th>
            <th>Subject</th>
            <th>Collage</th>
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>

<?php

              $get2 = mysqli_query($conn,"SELECT * FROM toppers");
              while($row2 = mysqli_fetch_array($get2))
              {

                $id=$row2['id'];
                $name=$row2['name'];
                $course=$row2['course'];
               
                $marks=$row2['marks'];
                 $rank=$row2['rank'];
                $per=$row2['per'];
                $photo=$row2['photo'];
                $year1=$row2['year1'];
           
                $class=$row2['class'];
                $subject=$row2['subject'];
                $college=$row2['college'];
               
?>      
        <div id="tbl_row">
          <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
             <td><?php echo $course; ?></td>
            
            <td><?php echo $marks; ?></td>
            <td><?php echo $rank; ?></td>
            <td><?php echo $per; ?></td>
            
              <td><img src="toppersimages/<?php echo $photo; ?>" width="100" height="100" alt="Image"></td>
            <td><?php echo $year1; ?></td>
           
             <td><?php echo $class; ?></td>
            <td><?php echo $subject; ?></td>
            <td><?php echo $college; ?></td>
<td>        
              

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
               url: 'toppers-delete-code.php',
               data: ({ id: id }),
               success: function(response) {
               if(response == "1" || response == 1 )
               {
                 successAlert("Data Deleted");
                 setTimeout(function(){
                   window.location.href='toppers.php';
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
    var name = document.forms["myForm"]["txtname"].value;
    var course= document.forms["myForm"]["txtcourse"].value;
    var class1= document.forms["myForm"]["txtclass"].value;
    var branch = document.forms["myForm"]["txtbranch"].value;
    var clg = document.forms["myForm"]["txtclg"].value;
    var sub = document.forms["myForm"]["txtsub"].value;
    var marks = document.forms["myForm"]["txtmarks"].value;
    var tmarks = document.forms["myForm"]["txttmarks"].value;
    var rank = document.forms["myForm"]["txtrank"].value;
    var per = document.forms["myForm"]["txtper"].value;
    var year = document.forms["myForm"]["txtyear"].value;
    var imginp = document.forms["myForm"]["img"].value;
   
     if (name== "") {
        alert("Please Enter Your Name");
        return false;
      }  
        else if (course== "") {
        alert("Please Enter Course");
        return false;
        }
         else if (class1== "") {
        alert("Please Enter Class");
        return false;
       }
        else if (branch== "") {
        alert("Please Enter Branch");
        return false;
      }
        else  if (clg== "") {
        alert("Please Enter Clg");
        return false;

      }
      else if (sub== "") {
        alert("Please Enter Subject");
        return false;
      }
       else if (marks== "") {
        alert("Please Enter Marks");
        return false;
      }
      else if (tmarks== "") {
        alert("Please Enter Total Marks");
        return false;
       }
       else if (rank== "") {
        alert("Please Enter Rank");
        return false;
        } 
       else if (per== "") {
        alert("Please Enter Percentage");
        return false;
        
    }
    

      else if (year == "") {
        alert("Please Enter Year");
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