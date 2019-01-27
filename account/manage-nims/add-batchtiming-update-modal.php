<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM batchtiming WHERE Id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $batch_timing=$row['Name'];
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
                        <label class="col-sm-4 control-label">Select Center <span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="center_nm" name="center_nm">
								      <option value="0">Select Center</option>
                        <?php  
                        	$get3 = mysqli_query($conn,"SELECT * FROM centers");
              				while($row3 = mysqli_fetch_array($get3))
              				{	
              					$center_nm = $row3['Name'];
                        ?>
            					<option value="<?php echo $center_nm;?>"><?php echo $center_nm; ?></option>
            			<?php
							}
						?>
            				</select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Batch Timing <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $batch_timing; ?>" class="form-control" id="batch_timing" name="batch_timing">                            
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
    var center_nm = $("#center_nm").val();
    var batch_timing = $("#batch_timing").val();

    if (center_nm=='0') 
    {
      infoAlert("Please Select Centere Name");
    }
    else if (batch_timing=='') 
    {
      infoAlert("Please Enter Batch Timing");
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'add-batchtiming-update-code.php',
            data: ({ id: id, center_nm: center_nm, batch_timing: batch_timing }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='add-batchtiming.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
