<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM course where Id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $course_name=$row['Name'];
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
                        <label class="col-sm-3 control-label">Course Name <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $course_name; ?>" class="form-control" id="course_nm" name="course_nm">                            
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

    if (course_nm=='') 
    {
    	$('#myModal2').show();
        $('#modal-body2').html("Please Select Course");
        btnClose();
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'add-course-update-code.php',
            data: ({ id: id, course_nm: course_nm }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                $('#myModal2').show();
                $('#modal-body2').html("Data Updated");
                btnClose();
                setTimeout(function(){
                  window.location.href='add-course.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
