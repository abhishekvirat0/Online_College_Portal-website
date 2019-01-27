<div class="container mt-5 mb-5 pt-30 pb-30">
  <div class="row">
    <div class="col-md-11">
                <form>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="name" name="name" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Mobile Number</label>
                      <input type="phone" id="mobile" name="mobile" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Date of Birth</label>
                      <input type="text" id="dob" name="dob" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Address</label>
                      <input type="text" id="address" name="address" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="email" name="email" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Select Date for Counciling</label>
                      <input type="date" id="doc" name="doc" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;"  placeholder="">
                    </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                      <label>Counciling Time </label>
                        <div class='input-group date' id='datetimepicker3'>
                            <input type='text' id="cot" name="cot" class="form-control" style="border-style: solid; border-color: #828182; border-width:2px;" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-time"></span>
                            </span>
                        </div>
                      </div>
                      <script type="text/javascript">
                          $(function () {
                              $('#datetimepicker3').datetimepicker({
                                  format: 'LT'
                              });
                          });
                      </script>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="phone">Select Counciling Mode</label>
                        <select class="form-control" id="mode" name="mode" style="border-style: solid; border-color: #828182; border-width:2px;">
                            <option disabled selected value="">Select Your Counciling Mode</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Face to Face">Face to Face</option>
                            <option value="Video Councelling">Video Counciling</option>
                            <option value="Other">Other</option>
                          </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Message</label>
                      <textarea name="form_message" id="message" name="message" class="form-control required" rows="5" placeholder="Enter Message" style="border-style: solid; border-color: #828182; border-width:2px;"></textarea>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <div class="form-group">
                      <input name="form_botcheck" class="form-control" type="hidden" value="" />
                      <button type="submit" id="btncoul" name="btncoul" class="btn btn-dark btn-theme-colored2 btn-lg btn-block" data-loading-text="Please wait...">Submit</button>
                    </div>
                  </div>
    </div>
  </div>
</div>