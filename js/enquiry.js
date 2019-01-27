$(document).ready(function(){
 
        $('#btnEnq').click(function(event) {
          // alert("no function");

          event.preventDefault();

            var name = $('#name').val();
            var phone = $('#phone').val();           
            var email = $('#email').val();
            var c_query = $('#c_query').val();
            var message = $('#message').val();
            
            if($("#democlass").prop('checked') == true)
            {
              var democlass = "democlass needed";
            }
            else
            {
              var democlass = "not needed";
            }

            if (name == '') 
            {
              alert("Please enter your name");
            } 
            else if (phone=='') 
            {
              alert("Please enter phone");
            }
            else if (email =='') 
            {
              alert("Please enter phoneId");
            }
            else if (c_query =='') 
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
                url: 'enquiry.php',
                data: ({ name: name, phone: phone, email: email, c_query: c_query, message: message,democlass: democlass }),
                
                success: function(response) {

                 // alert(response);

                 if(response == "1" || response == 1)
                 {
                  alert("Enquiry submitted Successfully");
                        // $('#reg_nm').val("");
                        // alert(response);
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