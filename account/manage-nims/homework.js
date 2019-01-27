  $(document).ready(function() { 

    $('#Course').change(function(event) {

      var course=$('#Course').val();

      $("#divClass").load("add-subject-combo-box.php?course="+course).fadeIn("fast");

    });


    $('#btnsubmit').click(function(event) {

    event.preventDefault();

    var Id=$('#Id').val();  
    var Course=$('#Course').val();  
    var Class=$('#Class').val();
    var Subject=$('#Subject').val();
    var State=$('#State').val();
    var City=$('#City').val();  
    var Branch=$('#Branch').val();
    var Batchtime=$('#Batchtime').val();
    var txthwquestion=$('#txthwquestion').val();
    var txthwdes=$('#txthwdes').val();
    var txtadded=$('#txtadded').val();  
    

    if(Course=='0') 
    {
      $('.modal-body').html("Please Select Course ");
      $("#myModal").modal();
    }
    else if(Class=='0')
    {
       $('.modal-body').html("Please Select Class ");
       $("#myModal").modal();
    }
     else if(Subject=='')
    {
       $('.modal-body').html("Please Enter Subject ");
       $("#myModal").modal();
    }
     else if(State=='')
    {
       $('.modal-body').html("Please Enter State ");
       $("#myModal").modal();
    }
     else if(City=='')
    {
       $('.modal-body').html("Please Enter City ");
       $("#myModal").modal();
    }
    else if(Branch=='0')
    {
       $('.modal-body').html("Please Select Branch ");
       $("#myModal").modal();
    }
     else if(Batchtime=='')
    {
       $('.modal-body').html("Please Enter BatchTime ");
       $("#myModal").modal();
    } 
    else if(txthwquestion=='')
    {
       $('.modal-body').html("Please Enter Question ");
       $("#myModal").modal();
    }
     else if(txthwdes=='')
    {
       $('.modal-body').html("Please Enter Description ");
       $("#myModal").modal();
    }
     else if(txtadded=='')
    {
       $('.modal-body').html("Please Enter Added By ");
       $("#myModal").modal();
    }
  else
  {
    $.ajax({
         type: 'POST',
         url: 'homework2.php',
         data: ({Id:Id,Course:Course ,Class:Class , Subject:Subject , State:State , City:City , Branch:Branch , Batchtime:Batchtime , txthwquestion:txthwquestion , txthwdes:txthwdes ,txtadded:txtadded }),
         success: function(response3) 
     {
             if(response3 == "1")
            {  
              $('.modal-body').html("Homework Added Successfully");
                 $("#myModal").modal();   
                 setTimeout(function(){
                  window.location.href='homework.php';
                  }, 1000);  
                 
          }
             else
             {
                 $('.modal-body').html("Homework Not Added");
                 $("#myModal").modal();
             }
         }
      });
  }
    
 
  });
    });
