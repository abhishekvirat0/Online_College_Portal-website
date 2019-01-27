<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM designation WHERE cid='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $designation=$row['Name'];
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
                        <label class="col-sm-4 control-label">Occupation <span class="required">*</span></label>
                        <div class="col-sm-4">
                        	<select class="form-control" id="occupation" name="occupation">
								<option value="0">Select Occupation</option>
                        <?php  
                        	$get3 = mysqli_query($conn,"SELECT * FROM occupation");
              				while($row3 = mysqli_fetch_array($get3))
              				{	
              					$occupation = $row3['Name'];
                        ?>
            					<option value="<?php echo $occupation;?>"><?php echo $occupation; ?></option>
            			<?php
							}
						?>
            				</select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Designation <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $designation; ?>" class="form-control" id="designation" name="designation">                            
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
    var occupation = $("#occupation").val();
    var designation = $("#designation").val();

    if (occupation=='0') 
    {
      infoAlert("Please Select Occupation");
    }
    else if (designation=='') 
    {
      infoAlert("Please Enter Designation");
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'add-designation-update-code.php',
            data: ({ id: id, occupation: occupation, designation: designation }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='add-designation.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
