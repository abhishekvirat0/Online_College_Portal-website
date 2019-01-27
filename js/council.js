$(document).ready(function(){
 
        $('#btncoul').click(function(event) {
          // alert("no function");

          event.preventDefault();

            var name = $('#name').val();
            var mobile = $('#mobile').val();           
            var dob = $('#dob').val();
            var address = $('#address').val();
            var email = $('#email').val();
            var doc = $('#doc').val();
            var cot = $('#cot').val();
            var mode = $('#mode').val();
            var message = $('#message').val();
            
            if (name == '') 
            {
              alert("Please enter your name");
            } 
            else if (mobile=='') 
            {
              alert("Please enter mobile");
            }
            else if (email =='') 
            {
              alert("Please enter Email");
            }
            else if (doc =='') 
            {
              alert("Please enter skills required");
            }

            else if (message =='') 
            {
              alert("Please enter Minimum number of Experience");
            }

            else
            {
              $.ajax({
                type: 'post',
                url: 'counciling2.php',
                data: ({ name: name, mobile: mobile, dob: dob, address :address, email: email, doc: doc, cot:cot, mode: mode, message: message,}),
                
                success: function(response) {

                 // alert(response);

                 if(response == "1" || response == 1)
                 {
                  alert("You will be contacted soon!");
                        window.location="index.php";
                      }
                      else
                      {
                        alert("Please fill all details!");
                      }
                    }

                  });
            }
            
          });


      });