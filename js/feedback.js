$(document).ready(function() {  

        $('#btnsubmit').click(function(event) {

         event.preventDefault();

    var feedbackid=$('#feedbackid').val();
    var name = $('#name').val();
    var course = $('#course').val();
    var mobile = $('#mobile').val();
    var email = $('#email').val();
    var date = $('#date').val();
    var comment= $('#comment').val();

    if(name=='') 
    {
      $('.modal-body').html("Please Enter Your Name ");
      $("#myModal").modal();
    }
     else if(course=='Select Course') 
    {
      $('.modal-body').html("Please Select Your Course ");
      $("#myModal").modal();
    }
    else if(mobile=='') 
    {
      $('.modal-body').html("Please Enter Your Mobile No ");
      $("#myModal").modal();
    }
    else if(email=='') 
    {
      $('.modal-body').html("Please Enter Your Email Id ");
      $("#myModal").modal();
    }
    else if (comment=='') 
     {
      $('.modal-body').html("Please Enter Your comment ");
      $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'ajax-load/feedback2.php',
         data: ({feedbackid:feedbackid, name:name, course:course, mobile:mobile, email: email, date: date, comment: comment }),
         success: function(response) 
        {
          if(response == "1" || response == 1)
          {  
            $('.modal-body').html("Thanks For Given Feedback");
              $("#myModal").modal();   
              setTimeout(function(){
                window.location.href='feedback.php';
              }, 1000);
              
          }
          else
          {
             $('.modal-body').html("Give The Feedback");
             $("#myModal").modal();
          }
    }
  });
}
    
 
});
    });
