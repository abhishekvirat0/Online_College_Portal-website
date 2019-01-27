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
            <div class="icon-box ">
              <a class="icon icon-gray icon-circled icon-border-effect effect-circled" title="Parent Information">
                <i class="fas fa-book-open"></i>
              </a>
            </div>
          </div>
          <div class="col-md-3" align="center">
            <div class="icon-box iconbox-theme-colored2">
              <a class="icon icon-dark icon-circled icon-border-effect effect-circled" title="Qualification">
                <i class="fas fa-user-graduate"></i>
              </a><br>
                <i class="fas fa-chevron-down" style="font-size: 20px;"></i>
            </div>
          </div>
        </div>

       <!-- end process timeline -->
                                    <h2 class="text-theme-colored2 font-25">Qualification</h2>
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
                <input type="text" readonly="true" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtuid5" name="txtuid5" value="<?php echo $highest_id; ?>">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group"> 
                <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtlexam" name="txtlexam" placeholder="Name of Last Exam Appeared">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group"> 
                <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtlscl" name="txtlscl" placeholder="Enter Name Of School/ College Studied in Last Class"> 
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">   
                <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtlclass" name="txtlclass" placeholder="Enter Of City You Have Studied in Last Class">
              </div>
            </div> 
            <div class="col-md-12">
              <div class="form-group">  
                <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txteborad" name="txteborad" placeholder="Enter Education Board">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="lresult" name="lresult"><option value="Last Exam Result">Last Exam Result</option>
                         <option value="Pass">Pass</option>
                         <option value="Fail">Fail</option>    
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                 <select class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="attempt" name="attempt">
                 <option value="No.of Attempt for Last Exam">No.of Attempt for Last Exam</option>
                         <option value="01">01</option>
                         <option value="02">02</option>   
                         <option value="03">03</option> 
                         <option value="More">More</option>
                </select>
              </div>
            </div>
                <div class="col-md-12">
                 <table class="table" width="100%">
                  <h3>Marks Detalis</h3>
                  <thead>
                    <tr>
                      <th>Subject </th>
                      <th>Grade </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Maths</td>
                      <th><input type="text" class="form-control" id="maths" name="maths" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>M1</td>
                      <th><input type="text" class="form-control" id="m1" name="m1" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>M2</td>
                      <th><input type="text" class="form-control" id="m2" name="m2" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>M3</td>
                      <th><input type="text" class="form-control" id="m3" name="m3" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>Science</td>
                      <th><input type="text" class="form-control" id="science" name="science" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                   <tbody>
                    <tr>
                      <td>English</td>
                      <th><input type="text" class="form-control" id="english" name="english" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div class="col-md-12">
                <table class="table" width="100%">
                  <h3>Academic Record</h3>
                  <thead>
                    <tr>
                     <th>Class</th>
                      <th>Aggregate </th>
                      <th>Passing Year</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>X</td>
                      <th><input type="text" class="form-control" id="xag" name="xag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="xpa" name="xpa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>XI</td>
                      <th><input type="text" class="form-control" id="xiag" name="xiag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="xipa" name="xipa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>XII</td>
                      <th><input type="text" class="form-control" id="xiiag" name="xiiag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="xiipa" name="xiipa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>Poly-I Sem</td>
                      <th><input type="text" class="form-control" id="poag" name="poag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="popa" name="popa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>Poly- II Sem</td>
                      <th><input type="text" class="form-control" id="po2ag" name="po2ag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="po2pa" name="po2pa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                   <tbody>
                    <tr>
                      <td>B.E</td>
                      <th><input type="text" class="form-control" id="beag" name="beag" placeholder="Enter Details (Optional)"></th>
                      <th><input type="text" class="form-control" id="bepa" name="bepa" placeholder="Enter Details (Optional)"></th>
                    </tr>
                  </tbody>
                </table>
              </div>

            <div class="col-md-12">
              <table class="table" width="100%">
                  <caption></caption>
                  <thead>
                    <tr>
                      <th>Marks </th>
                      <th>Grade </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>91-100</td>
                      <th>A1</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>81-90</td>
                      <th>A2</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>71-80</td>
                      <th>B1</th>
                    </tr>
                  </tbody>
                   <tbody>
                    <tr>
                      <td>61-70</td>
                      <th>B2</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>51-60</td>
                      <th>C1</th>
                    </tr>
                  </tbody>
                  <tbody>
                    <tr>
                      <td>41-50</td>
                      <th>C2</th>
                    </tr>
                  </tbody>
                   <tbody>
                    <tr>
                      <td>31-40</td>
                      <th>D</th>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtex" name="txtex" placeholder="Are You Ex-Candidate Of Nim's?">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtreference" name="txtreference" placeholder="How Did You Come To Kwon About Nim's?? ">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                 <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtpersonname" name="txtpersonname" placeholder="Name Of Person Who Suggested you About Nim's?? ">
               </div>
             </div>
             <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" id="txtrelative" name="txtrelative" placeholder="Why any relative of Your's Relative ">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-dark btn-theme-colored2" id="btnsubmit5" name="btnsubmit5">
              </div>
            </div>
              </form>