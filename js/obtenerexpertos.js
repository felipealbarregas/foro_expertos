
function obtenerexperto(){
$.ajax({
   type: "GET",
   url: '../php/obtenerexpertos.php',

   dataType: "json",

   success: function(data){
          $.each(data,function(i,item) {
          $("#expertos").append('<option value='+item.experto_id+'>'+item.expertos_nickname+'</option>');
          return item;
   });
   },
   error: function(data) {
     alert('error');
   }
 });
}
