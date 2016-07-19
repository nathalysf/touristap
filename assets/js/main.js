//countdown

 $("#clockdiv")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

 $("#clockdiv-1")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

 $("#clockdiv-2")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

 $("#clockdiv-3")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

 $("#clockmovil")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

$("#clockmovil-1")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

$("#clockmovil-2")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });

$("#clockmovil-3")
   .countdown("2016/07/21", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });


//upload selfie 

function selfie(numeroInput) {
    $("#fileToUpload"+numeroInput).change(function(){
        $("#file"+numeroInput).val($("#fileToUpload"+numeroInput).val()); 
    });
    $("#fileToUpload"+numeroInput).click(function(){
          $(".input-imagen").show();
    });
}

