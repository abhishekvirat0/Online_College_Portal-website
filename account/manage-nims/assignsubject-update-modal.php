<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM facultysubjectdetails where id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $date=$row['date1'];
                      }


?>
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Update Details</h4>
    </div>
    <br>
                <form id="modalform" name="modalform" action="code/delete.php" class="form-horizontal calender" method="POST">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Course <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="course" name="course">
                                <option value="0">Select Course</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM course");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $course_nm = $row3['Name'];
                        ?>
                                <option value="<?php echo $course_nm;?>"><?php echo $course_nm; ?></option>
                        <?php
                            }
                        ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Class <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="class2" name="class2">
                                <option value="0">Select Class</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM class");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $class_nm = $row3['Name'];
                        ?>
                                <option value="<?php echo $class_nm;?>"><?php echo $class_nm; ?></option>
                        <?php
                            }
                        ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Branch <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="branch" name="branch">
                                <option value="0">Select Branch</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM branch");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $branch_nm = $row3['BranchName'];
                        ?>
                                <option value="<?php echo $branch_nm;?>"><?php echo $branch_nm; ?></option>
                        <?php
                            }
                        ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Faculty <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="faculty" name="faculty">
                                <option value="0">Select Faculty</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM faculty");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $faculty_nm = $row3['Name'];
                        ?>
                                <option value="<?php echo $faculty_nm;?>"><?php echo $faculty_nm; ?></option>
                        <?php
                            }
                        ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Select Subject <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="subject" name="subject">
                                <option value="0">Select Subject</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM subjects");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $subject_nm = $row3['Subject'];
                        ?>
                                <option value="<?php echo $subject_nm;?>"><?php echo $subject_nm; ?></option>
                        <?php
                            }
                        ?>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Date <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="date" value = "<?php echo $date; ?>" class="form-control" id="dt" name="dt">                            
                        </div>
                    </div>

                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                        <button type="submit" class="btn btn-danger" name="update" id="update">Confirm</button>
                    </div>

                    <input type="hidden" name="hid" id="hid" value="<?php echo $id;?>">

                  </form>
  </div>
</div>


<div class="modal" id="myModal2" data-backdrop="static">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" id="btnclose2" aria-hidden="true" onclick="btnClose();">X</button>
          <h4 class="modal-title"></h4>
        </div><div class="container"></div>
        <div class="modal-body" id="modal-body2" align="center">
          Content for the dialog / modal goes here.
        </div>
        <div class="modal-footer">
          <a href="javascript:void(0);" class="btn btn-default" id="btnclose" onclick="btnClose();">Close</a>
        </div>
      </div>
    </div>
</div>

<!-- css for second modal -->

<style type="text/css" media="screen">
    .modal:nth-of-type(even) {
    z-index: 1042 !important;
}
.modal-backdrop.in:nth-of-type(even) {
    z-index: 1041 !important;
}
    
</style>



<script type="text/javascript">
 $(document).ready(function(){

    $("#modal-body2").css({"font-size": "15px"});

    function btnClose()
    {
        $('#btnclose').click(function(event) {
            $('#myModal2').hide();
        });
        $('#btnclose2').click(function(event) {
            $('#myModal2').hide();
        });
    }
            

  $('#update').click(function(event) {

    event.preventDefault();


    var id = $("#hid").val();
    var course = $("#course").val();
    var class2 = $("#class2").val();
    var branch = $("#branch").val();
    var faculty = $("#faculty").val();
    var subject = $("#subject").val();
    var dt = $("#dt").val();

    if (course=='0') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Select Course");
        btnClose();
    }
    else if (class2=='0') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Select Class");
        btnClose();
    }
    else if (branch=='0') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Select Branch");
        btnClose();
    }
    else if (faculty=='0') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Select Faculty");
        btnClose();
    }
    else if (subject=='0') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Select Subject");
        btnClose();
    }
    else if (dt=='') 
    {
        $('#myModal2').show();
        $('#modal-body2').html("Please Enter Date");
        btnClose();
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'assignsubject-update-code.php',
            data: ({ id: id, course: course, class2: class2, branch: branch, faculty: faculty, subject: subject, dt: dt }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                $('#myModal2').show();
                $('#modal-body2').html("Data Updated");
                btnClose();
                setTimeout(function(){
                  window.location.href='assignsubject.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
