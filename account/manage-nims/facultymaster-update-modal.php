<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM faculty where Id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $faculty=$row['Name'];
                        $eduction=$row['eduction'];
                        $cno=$row['cno'];
                        // $image=$row['image'];
                        $add1=$row['add1'];
                        $payment=$row['payment'];
                      }



?>
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Update Details</h4>
    </div>
    <br>
        <form role="form" id="modalform" name="modalform" action="facultymaster-update-code.php" class="form-horizontal calender" method="POST"  enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Faculty Name <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $faculty; ?>" class="form-control" id="faculty" name="faculty">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Education <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $eduction; ?>" class="form-control" id="edu" name="edu">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Contact <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $cno; ?>" class="form-control" id="contact" name="contact">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Image <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="file" id="img" name="img" class="form-control"/>
                                                        
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Address <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $add1; ?>" class="form-control" id="address" name="address">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Payment <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $payment; ?>" class="form-control" id="payment" name="payment">                            
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



