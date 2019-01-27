<?php 
include '../ck.php';
?>
<section class="">
  <div class="container position-relative p-0 mt-90" style="max-width: 570px;">
    <h2 class="bg-theme-colored2 p-15 pt-10 mt-0 mb-0 text-white" align="center">LOGIN</h2>
    <div class="section-content bg-white p-30">
      <div class="row">
        <div class="col-md-12">
          <!-- Register Form Starts -->
          <form id="login_form_popup" name="login_form_popup" class="reservation-form mb-0 p-30" method="post" action="#" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Enter Your Email" id="txtuname" name="txtuname" class="form-control" required="" aria-required="true" type="text">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-30">
                  <input placeholder="Password" id="txtpass" name="txtpass" required="" class="form-control" aria-required="true" type="password">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group mb-0 mt-0">
                  <input name="form_botcheck" class="form-control" value="" type="hidden">
                  <button type="submit" id="btnlogin" name="btnlogin" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait...">LOGIN</button>
                </div>
              </div>
            </div>
          </form>

          <!-- Appointment Form Validation-->
          <script type="text/javascript" src="js/login.js"></script>
          <script type="text/javascript">
            $("#login_form_popup").validate({
              submitHandler: function(form) {
                var form_btn = $(form).find('button[type="submit"]');
                var form_result_div = '#form-result';
                $(form_result_div).remove();
                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                var form_btn_old_msg = form_btn.html();
                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                $(form).ajaxSubmit({
                  dataType:  'json',
                  success: function(data) {
                    if( data.status == 'true' ) {
                      $(form).find('.form-control').val('');
                    }
                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                    $(form_result_div).html(data.message).fadeIn('slow');
                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                  }
                });
              }
            });
            THEMEMASCOT.initialize.TM_datePicker();
          </script>
        </div>
      </div>
    </div>
    <button title="Close (Esc)" type="button" class="mfp-close font-36">×</button>
  </div>
</section>