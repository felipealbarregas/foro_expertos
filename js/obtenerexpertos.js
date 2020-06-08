

$.ajax({
   type: "GET",
   url: '../php/obtenerexpertos.php',

   dataType: "json",

   success: function(data){
          $.each(data,function(i,item) {
          $("#expertos").append('<option value='+item.categoria_id+'>'+item.categoria_nombre+'</option>');
          return item;
   });
   },
   error: function(data) {
     alert('error');
   }
 });
