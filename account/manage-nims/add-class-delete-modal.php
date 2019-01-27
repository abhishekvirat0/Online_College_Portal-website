<?php

$id = $_REQUEST['id'];

?>
<div class="modal-dialog">
  <div class="modal-content" style="border-radius: 0px;">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 id="myModalLabel">Authentication</h4>
    </div>
    <form id="user_delete" name="user_delete" method="POST" action="code/delete.php">
      <div class="modal-body">
        <center>
          <h3><strong>Are you sure?</strong></h3>
          <input type="hidden" name="hid" id="hid" value="<?php echo $id;?>">
          <div id="success_msg">

          </div>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button type="submit" class="btn btn-danger" name="delete" id="delete">Confirm</button>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
$(function() {
  $('#delete').click(function(event) {

     var id = $("#hid").val();

     event.preventDefault();

     $.ajax({
     type: 'POST',
     url: 'add-class-delete-code.php',
     data: ({ id: id }),
     success: function(response) {
     if(response == "1" || response == 1 )
     {
       alert("Data Deleted");
       setTimeout(function(){
         window.location.href='add-class.php';
       }, 100);
     }
     else
     {
       alert("Undefined Error!");
     }
     }
    });
   });
 });
</script>
