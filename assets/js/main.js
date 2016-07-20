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

        var val = $(this).val();

        switch(val.substring(val.lastIndexOf('.') + 1).toLowerCase()){
            case 'gif': case 'jpg': case 'png': case 'jpeg':
                break;
            default:
                $(this).val('');
                // error message here
                alert("Formato invalido. Suba una foto en formato jpg, jpeg, png o gif");
                break;
        } 
    });
    $("#fileToUpload"+numeroInput).click(function(){
        $(".input-imagen").show();
    });
    $("#submit"+numeroInput).click(function(){
        // $(this).prop( "disabled", true );
        $(".input-imagen").hide();
    });
}



