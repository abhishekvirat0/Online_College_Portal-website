<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM user_master WHERE id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $lid1=$row['lid'];
                        $role1=$row['role'];
                        $pass1=$row['pass'];
                        $rid1=$row['rid'];

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
                        <label class="col-sm-4 control-label">Login Id <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $lid1; ?>" class="form-control" id="lid1" name="lid1">                            
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $pass1; ?>" class="form-control" id="pass1" name="pass1">                            
                        </div>
                    </div>


                     <div class="form-group">
                        <label class="col-sm-4 control-label">Role <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <!-- <input type="text" value = "<?php  // echo $pass1; ?>" class="form-control" id="pass1" name="pass1"> -->   
                        <select id="role1" name="role1" value = "<?php echo $role1; ?>" class="form-control">
                    <option value="0">Select Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Faculty">Faculty</option>
                    <option value="NonFaculty">NonFaculty</option>
                    </select>

                        </div>
                    </div>

                    




                      <div class="form-group">
                        <label class="col-sm-4 control-label">Reference Id <span class="required">*</span></label>
                        <div class="col-sm-4">
                            <input type="text" value = "<?php echo $rid1; ?>" class="form-control" id="rid1" name="rid1">                            
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
    var lid1 = $("#lid1").val();
    var pass1 = $("#pass1").val();
    var role1 = $("#role1").val();
    var rid1 = $("#rid1").val();
 

    if (lid1=='') 
    {
      infoAlert("Please Enter Login Id");
    }
     else if(pass1=='')
    {
       infoAlert("Please Enter Password");
    }
    else if(role1=='0')
    {
        infoAlert("Please Select Role");
    }
    else if(rid1=='')
    {
        infoAlert("Please Enter Reference ID");
    }
   
    else
    {
        $.ajax({
            type: 'POST',
            url: 'add-user-update-code.php',
            data: ({ id: id, lid1: lid1,pass1: pass1, role1: role1, rid1:rid1 }),
            success: function(response_update) {

            if(response_update == "1" || response_update == 1)
            {
                successAlert("Data Updated");
                setTimeout(function(){
                  window.location.href='usermaster.php';
                }, 1000);
            }
        }
    });
    } 
});
});

</script>
