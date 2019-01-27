                          <div class="col-md-12">
                            <!-- process timeline -->
               <div class="col-md-12">
          <div class="col-md-3" align="center">
            <div class="icon-box ">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Creditaintial">
                <i class="fas fa-sign-in-alt"></i>
              </a><br>
              
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="icon-box ">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Personal Information">
                <i class="fas fa-user-tie"></i>
              </a>
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="icon-box">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Qualification">
                <i class="fas fa-users"></i>
              </a>
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="icon-box iconbox-theme-colored2">
              <a class="icon icon-dark icon-circled icon-border-effect effect-circled" title="Parent Information">
                <i class="fas fa-book-open"></i>
              </a><br>
                <i class="fas fa-chevron-down" style="font-size: 20px;"></i>
            </div>
          </div>
          <div class="col-md-3" align="center">
            <div class="icon-box">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Qualification">
                <i class="fas fa-user-graduate"></i>
              </a>
            </div>
          </div>
        </div>

       <!-- end process timeline -->
                            <h2 class="text-theme-colored2 font-25">Course Selection</h2>
                          </div>
                                    <?php
                                     include 'connection.php';
                                     $result = mysqli_query($conn,"SELECT MAX(uid) FROM registration1");
                                     $row = mysqli_fetch_row($result);
                                     $highest_id = $row[0];
                                    ?>
               <form method="post">
                <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" readonly="true" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtuid4" name="txtuid4" value="<?php echo $highest_id; ?>">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="exampattern" name="exampattern"><option value="Select Exam pattern">Select Exam Patten</option>
                         <option value="Semister">Semester</option>
                         <option value="Annual">Annual</option>
                         <option value="Other">Other</option>          
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="coursetype" name="coursetype"><option value="Select Course Type">Select Course Type </option>
                         <option value="Semister">Semester</option>
                         <option value="Regular">Regular</option>
                         <option value="Crash">Crash</option>
                         <option value="BackLog">BackLog</option>     
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                       <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="studymedium" name="studymedium">
                                <option value="Select Preferred Study Medium">Select Preferred Study Medium</option>
                                 <option value="English">English</option>
                                 <option value="Hindi">Hindi</option>
                                 <option value="Gujarati">Gujarati</option>
                                
                       </select>
                     </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group"> 
                      <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="coursename" name="coursename"><option value="Select Course Name">Select Course Name </option>
                         <option value="School">School</option>
                         <option value="HSC">HSC</option>
                         <option value="JEE">JEE</option>
                         <option value="Poly">Poly</option>
                         <option value="Poly">Eng</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtclass" name="txtclass" placeholder="Enter Class">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtsubject" name="txtsubject" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtbranch" name="txtbranch" placeholder="Enter Branch">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtschool" name="txtschool" placeholder="Enter Name Of School / College">
                    </div>
                  </div>
          
                <div class="col-md-12">
                    <div class="form-group"> 
                  <?php
                    $sql = "SELECT Name FROM city";
                    $result = mysqli_query($conn,$sql);

                    echo '<select name="city" id="city" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
                    }
                    echo '</select>';
                  ?>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="branchtime" name="branchtime"><option value="Select Branch Time">Select Branch Time </option>
                         <option value="School">10AM-11AM</option>       
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="studycenter" name="studycenter"><option value="Select Preferred Study Center">Select Preferred Study Center </option>
                         <option value="Gadgenagar">Gadgenagar</option>
                         <option value="RajaPeth">RajaPeth</option>    
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="board" name="board">
                    <option value="Select Board/University">Select Board / University</option>
                    <option value="State Borad">State Borad</option>
                    <option value="RajaPeth">C.B.S.E</option>      
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                 <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtyear" name="txtyear" placeholder="Enter Studying Year">
               </div>
             </div>
             <div class="col-md-12">
                <div class="form-group">
                 <input type="submit" value="Submit" class="btn btn-dark btn-theme-colored2" id="btnsubmit4" name="btnsubmit4">
               </div>
             </div>
</form>