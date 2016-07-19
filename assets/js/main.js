//countdown
function clock(numeroID) {
 $("#clockdiv"+numeroID)
   .countdown("2016/07/24", function(event) {
     $(this).text(
       event.strftime('%D d %H:%M:%S')
     );
   });
  $("#clockmovil"+numeroID)
     .countdown("2016/07/24", function(event) {
       $(this).text(
         event.strftime('%D d %H:%M:%S')
       );
     });
}

//upload selfie 

function selfie(numeroInput) {
    $("#fileToUpload"+numeroInput).change(function(){
        $("#file"+numeroInput).val($("#fileToUpload"+numeroInput).val()); 
    });
    $("#fileToUpload"+numeroInput).click(function(){
        $(".input-imagen").show();
    });
    $("#submit"+numeroInput).click(function(){
        // $(this).prop( "disabled", true );
        $(".input-imagen").hide();
    });
}



