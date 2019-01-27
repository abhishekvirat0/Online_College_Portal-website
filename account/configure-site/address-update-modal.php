<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM address WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $adrs=$row['adrs'];
                        $cont=$row['cont'];
                        $email=$row['email'];
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
                        <label class="col-sm-4 control-label">Address Description <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $adrs; ?>" class="form-control" id="adrs" name="adrs">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Description <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $cont; ?>" class="form-control" id="cont" name="cont">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email Description <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="email" value = "<?php echo $email; ?>" class="form-control" id="email" name="email">                            
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
    var adrs = $("#adrs").val();
    var cont = $("#cont").val();
    var email = $('#email').val();


    if(adrs=='') 
    {
      infoAlert("Please Enter address Description");
      
    }
    if(cont=='') 
    {
      infoAlert("Please Enter contact Description");
      
    }
     if(email=='') 
    {
      infoAlert("Please Enter email Description");
      
    }
    else
    {
        $.ajax({
            type: 'POST',
            url: 'address-update-code.php',
            data: ({ id: id, adrs: adrs, cont: cont ,email: email }),
            success: function(response_update) {
                alert(response_update);

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='address.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
