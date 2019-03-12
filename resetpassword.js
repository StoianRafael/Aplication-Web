var request;
function resetpassword(){
  
    $("#resetpassword").submit(function(event){
        event.preventDefault();
        if(request){
            request.abort();
        }

        // setup some local variables
        var $form = $(this);

        var $inputs = $form.find("input, select, button, textarea");
        
        // Serialize the data in the form
         var serializedData = $form.serialize();

         // Let's disable the inputs for the duration of the Ajax request.
         // Note: we disable elements AFTER the form data has been serialized.
         // Disabled form elements will not be serialized.
         $inputs.prop("disabled", true);

         // Fire off the request to /form.php
         request = $.ajax({
             url: "resetpassword.php",
             type: "post",
             data: serializedData
         });
     
         // Callback handler that will be called on success
         request.done(function (response, textStatus, jqXHR){
             // Log a message to the console
             console.log("Hooray, it worked!");
             console.log(response);
             console.log(textStatus);
         });
     
         // Callback handler that will be called on failure
         request.fail(function (jqXHR, textStatus, errorThrown){
             // Log the error to the console
             console.error(
                 "The following error occurred: "+
                 textStatus, errorThrown
             );
         });
     
         // Callback handler that will be called regardless
         // if the request failed or succeeded
         request.always(function () {
             // Reenable the inputs
             $inputs.prop("disabled", false);
         });
         })
}