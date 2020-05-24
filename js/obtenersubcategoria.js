
$.ajax({
   type: "GET",
   url: '../php/obtenersubcategoria.php',
   dataType: "json",

   success: function(data){
          $.each(data,function(i,item) {
          $("#subcategoria").append('<option value='+item.subcategoria_id+'>'+item.subcategoria_nombre+'</option>');
   });
   },
   error: function(data) {
     alert('error');
   }
 });
