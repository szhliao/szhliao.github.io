$("#sub").click( function() {
 $.post( $("#feedForm").attr("action"),
         $("#feedForm :input").serializeArray(),
         function(info){ $("#result").html(info);
   });
clearInput();
});
 
$("#feedForm").submit( function() {
  return false;
});
function clearInput() {
    $("#feedForm :input").each( function() {
       $(this).val('');
    });
}