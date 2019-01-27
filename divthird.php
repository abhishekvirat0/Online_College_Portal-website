             
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
            <div class="icon-box iconbox-theme-colored2">
              <a class="icon icon-dark icon-circled icon-border-effect effect-circled" title="Parent Information">
                <i class="fas fa-users"></i>
              </a><br>
                <i class="fas fa-chevron-down" style="font-size: 20px;"></i>
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
                <h2 class="text-theme-colored2 font-25">Parent Information</h2>
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
                      <input type="text" readonly="true" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtuid3" name="txtuid3" value="<?php echo $highest_id; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfathername" name="txtfathername" placeholder="Enter Father Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmothername" name="txtmothername" placeholder="Enter Mother Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfmno" name="txtfmno" placeholder="Enter Father Mobile Number"> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmmno" name="txtmmno" placeholder="Enter Mother Mobile Number"> 
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="email" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfemail" name="txtfemail" placeholder="Enter Father Email Id">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="email" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmemail" name="txtmemail" placeholder="Enter Mother Email Id">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfoccu" name="txtfoccu" placeholder="Enter Father Occupation">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmoccu" name="txtmoccu" placeholder="Enter Mother Occupation">
                    </div>
                  </div>
                  
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfdesi" name="txtfdesi" placeholder="Enter Father Designation">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group"> 
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmdesi" name="txtmdesi" placeholder="Enter Mother Designation">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtaincome" name="txtaincome" placeholder="Total Annual Income"> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtecno" name="txtecno" placeholder="Enter Emergency Contact No"> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <textarea class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" cols="30" rows="10" id="txtadd" name="txtadd" placeholder="Enter Address"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                      <?php
                          $sql = "SELECT Name FROM city";
                          $result = mysqli_query($conn,$sql);

                          echo '<select name="city" id="city" style="margin-top:20px" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;">';
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
                          }
                          echo "</select>";

                      ?>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group"> 
                        <?php
                          $sql = "SELECT Name FROM states";
                          $result = mysqli_query($conn,$sql);

                          echo '<select name="state" id="state" style="margin-top:20px" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;">';
                          while ($row = mysqli_fetch_array($result)) {
                              echo "<option value='" . $row['Name'] ."'>" . $row['Name'] ."</option>";
                          }
                          echo "</select>";
                        ?>
                      </div>
                    </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="country" name="country">
                        <option value="Select Country">Select Country</option>
                        <option value="India">India</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="number" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtpcode" name="txtpcode" placeholder="Enter Pincode"> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtfsignature" name="txtfsignature" placeholder="Enter Father Signature">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtmsignature" name="txtmsignature" placeholder="Enter Mother Signature"> 
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label> Family Background</label>
              <table class="table" width="100%">
                <tr>
                  <th>Relatives</th>
                  <th cellpadding="50px">Name</th>
                  <th>Age</th>
                   <th cellpadding="75px">Eduction</th>
                </tr>
                <tr>
                  <td>Brother 1</td>
                  <td cellpadding="50px"><input type="text" class="form-control" id="txtb1name" name="txtb1name" placeholder="Enter Details (Optional)"></td>
                  <td><input type="text" class="form-control" placeholder="Enter Details (Optional)" id="txtb1age" name="txtb1age"></td>
                   <td cellpadding="75px"><input type="text" class="form-control" id="txtb1edu" name="txtb1edu" placeholder="Enter Details (Optional)"></td>
                </tr>
              <tr>
                  <td>Sister 1</td>
                  <td cellpadding="50px"><input type="text" class="form-control" id="txtsis1name" name="txtsis1name" placeholder="Enter Details (Optional)"></td>
                  <td><input type="text" class="form-control" placeholder="Enter Details (Optional)" id="txtsis1age" name="txtsis1age"></td>
                   <td cellpadding="75px"><input type="text" id="txtsis1edu" name="txtsis1edu" class="form-control" placeholder="Enter Details (Optional)"></td>
                </tr>
               <tr>
                  <td>Brother 2</td>
                  <td cellpadding="50px"><input type="text" class="form-control" id="txtbro2name" name="txtbro2name" placeholder="Enter Details (Optional)"></td>
                  <td><input type="text" class="form-control" id="txtbro2age" name="txtbro2age" placeholder="Enter Details (Optional)"></td>
                   <td cellpadding="75px"><input type="text" class="form-control" id="txtbro2edu" name="txtbro2edu" placeholder="Enter Details (Optional)"></td>
                </tr>
                <tr>
                  <td>Sister 2</td>
                  <td cellpadding="50px"><input type="text" class="form-control" placeholder="Enter Details (Optional)" id="txtsis2name" name="txtsis2name"></td>
                  <td><input type="text" class="form-control" id="txtsis2age" name="txtsis2age" placeholder="Enter Details (Optional)"></td>
                   <td cellpadding="75px"><input type="text" class="form-control" id="txtsis2edu" name="txtsis2edu" placeholder="Enter Details (Optional)"></td>
                </tr>
              </table>


                <input type="submit" value="Submit" class="btn btn-dark btn-theme-colored2" id="btnsubmit3" name="btnsubmit3" >
              </form>
       