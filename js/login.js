$(document).ready(function() 
{  

 $('#btnlogin').click(function(event) {

    event.preventDefault();

    
    var uname = $('#txtuname').val();
    var pass = $('#txtpass').val();
			
	if (uname=='') 
    {
      alert("Please Enter User Name");
    }
    else if (pass=='') 
    {
      alert("Please Enter Your Password");
    }
	else
    {
        $.ajax({
        type: 'POST',
        url: 'ajax-load/login2.php',
        data: ({ uname: uname, pass: pass }),
        success: function(response) {
        	
            if(response == "1")
            {
                 window.location.href = 'account/index.php';
            }
            else
            {
                alert("Invalid User ID or Password");
            }
        }
      });
    }
  });
 
});

