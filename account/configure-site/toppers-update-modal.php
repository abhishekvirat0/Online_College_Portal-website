<?php

include '../../connection.php';

                    $id = $_REQUEST['id'];


                      $get = mysqli_query($conn,"SELECT * FROM  toppers where id='$id'");
                      while($row = mysqli_fetch_array($get))
                      {
                        $name=$row['name'];
                        $course=$row['course'];
                        $branch=$row['branch'];
                        // $image=$row['image'];
                        $marks=$row['marks'];
                        $rank=$row['rank'];
                        $per=$row['per'];
                        $photo=$row['photo'];
                        $year1=$row['year1'];
                        $tmarks=$row['totalmarks'];
                        $class=$row['class'];
                        $sub=$row['subject'];
                        $clg=$row['college'];

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
                        <label class="col-sm-3 control-label"> Name <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $name; ?>" class="form-control" id="txtname1" name="faculty">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Course<span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="course1" name="course1">
                                <option value="0">Select Course</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM course");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $ccourse1 = $row3['Name'];
                               
                        ?>
                                <option value="<?php echo $course;?>"><?php echo $course1; ?></option>
                        <?php
                            }
                        ?>
                            </select>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Branch<span class="required">*</span></label>
                        <div class="col-sm-5">
                            <select class="form-control" id="branch1" name="branch1">
                                <option value="0">Select Course</option>
                        <?php  
                            $get3 = mysqli_query($conn,"SELECT * FROM branch");
                            while($row3 = mysqli_fetch_array($get3))
                            {   
                                $branch1 = $row3['Name'];
                               
                        ?>
                                <option value="<?php echo $branch;?>"><?php echo $branch1; ?></option>
                        <?php
                            }
                        ?>
                            </select>
                            
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-3 control-label">Marks <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $marks; ?>" class="form-control" id="txtmarks1" name="txtmarks1">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Rank <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $rank; ?>" class="form-control" id="txtrank1" name="txtrank1">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Percentag <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $per; ?>" class="form-control" id="txtper1" name="txtper1">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Percentag <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $per; ?>" class="form-control" id="txtper1" name="txtper1">                            
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Image <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="file" id="img" name="img" class="form-control"/>
                                                        
                        </div>
                    </div>
                        
                         <div class="form-group">
                        <label class="col-sm-3 control-label">Year <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $year1; ?>" class="form-control" id="txtyear1" name="txtyear1">                            
                        </div>
                    </div>
                     
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Total Marks <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $tmarks; ?>" class="form-control" id="txttmarks1" name="txttmarks1">                            
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-sm-3 control-label">Class <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $class; ?>" class="form-control" id="txtclass1" name="txtclass1">                            
                        </div>
                    </div>

                     <div class="form-group">
                        <label class="col-sm-3 control-label">Subject <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $sub; ?>" class="form-control" id="txtsub1" name="txtsub1">                            
                        </div>
                    </div>
                    
                         <div class="form-group">
                        <label class="col-sm-3 control-label">Total Marks <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $tmarks; ?>" class="form-control" id="txttmarks1" name="txttmarks1">                            
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label class="col-sm-3 control-label">College <span class="required">*</span></label>
                        <div class="col-sm-5">
                            <input type="text" value = "<?php echo $clg; ?>" class="form-control" id="txtclg1" name="txtclg1">                            
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



