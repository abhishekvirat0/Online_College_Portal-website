               
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
            <div class="icon-box iconbox-theme-colored2">
              <a class="icon icon-dark icon-circled icon-border-effect effect-circled" title="Personal Information">
                <i class="fas fa-user-tie"></i>
              </a><br>
                <i class="fas fa-chevron-down" style="font-size: 20px;"></i>
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="icon-box">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Parent Information">
                <i class="fas fa-users"></i>
              </a>
            </div>
          </div>
          <div class="col-md-2" align="center">
            <div class="icon-box">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled"title="Course Selection">
                <i class="fas fa-book-open"></i>
              </a>
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
                <h2 class="text-theme-colored2 font-25">Personal Information</h2>
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
                      <input type="text" readonly="true" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtuid2" name="txtuid2" value="<?php echo $highest_id; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfname" name="txtfname" placeholder="Enter First Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  id="txtmname" name="txtmname" placeholder="Enter Last Name">
                    </div>
                  </div>
                <!-- <p>Enter Your D.O.B</p> -->
                <div class="col-md-12">
                  <label>Date of Birth</label>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <select id="txtdate" name="txtdate" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;">
                        <option value="01">1</option>
                        <option value="02">2</option>
                        <option value="03">3</option>
                        <option value="04">4</option>
                        <option value="05">5</option>
                        <option value="06">6</option>
                        <option value="07">7</option>
                        <option value="08">8</option>
                        <option value="09">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <select id="txtmonth" name="txtmonth" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">03</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="form-group">
                      <?php
                        echo '<select name="txtyear" id="txtyear" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"';
                        $starting_year  =date('Y', strtotime('-30 year'));
                        $ending_year = date('Y', strtotime('+0 year'));
                        $current_year = date('Y');
                        for($starting_year; $starting_year <= $ending_year; $starting_year++) {
                         echo '<option value="'.$starting_year.'"';
                         if( $starting_year ==  $current_year ) {
                          echo ' selected="selected"';
                        }
                        echo ' >'.$starting_year.'</option>';
                        }               
                        echo '<select>';
                      ?>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group">
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtsmno" name="txtsmno" placeholder="Enter Student Mobile Number"> 
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="gender" name="gender"><option value="Gender">Gender</option>
                              <option value="Male">Male</option>
                              <option value="Male">Female</option>
                     </select>
                   </div>
                 </div>
                 <div class="col-md-4">
                    <div class="form-group">
                       <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="bloodgroup" name="bloodgroup"><option value="Select Blood Group">Select Blood Group</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B-">B-</option>
                                  <option value="B+">B+</option>
                                  <option value="Others">Others</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-md-4">
                    <div class="form-group">
                       <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="category" name="category"><option value="Select Category">Select Category</option>
                                 <option value="GEN">GEN</option>
                                  <option value="OBC">OBC</option>
                                  <option value="SC">SC</option>
                                  <option value="ST">ST</option>
                                  <option value="PH">PH</option>
                       </select>
                     </div>
                   </div>
                   <div class="col-md-4">
                    <div class="form-group">
                       <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="nationality" name="nationality"><option value="Select Category">Select Nationality</option>
                                 <option value="Indian">Indian</option>
                                  <option value="Other">Other</option> 
                       </select>
                     </div>
                   </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="submit" value="Submit" class="btn btn-dark btn-theme-colored2" id="btnsubmit2" name="btnsubmit2" >
                    </div>
                  </div>
              </form>
           