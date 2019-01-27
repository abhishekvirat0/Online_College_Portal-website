<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM exampattern WHERE cid='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $exam_nm=$row['Name'];
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
                        <label class="col-sm-4 control-label">Select Course <span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="course_nm" name="course_nm">
								<option value="0">Select Course</option>
                        <?php  
                        	$get3 = mysqli_query($conn,"SELECT * FROM course");
              				while($row3 = mysqli_fetch_array($get3))
              				{	
              					$course_nm = $row3['Name'];
              					$course_id = $row3['Id'];
                        ?>
            					<option value="<?php echo $course_nm;?>"><?php echo $course_nm; ?></option>
            			<?php
							}
						?>
            				</select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Exam Pattern Name <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $exam_nm; ?>" class="form-control" id="exam" name="exam">                            
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
    var course_nm = $("#course_nm").val();
    var exam = $("#exam").val();

    if (course_nm=='0') 
    {
      infoAlert("Please Select Course Name");
    }
    else if (exam=='') 
    {
      infoAlert("Please Enter Exam Pattern Name");
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'add-exam-pattern-update-code.php',
            data: ({ id: id, course_nm: course_nm, exam: exam }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='add-exam-pattern.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
