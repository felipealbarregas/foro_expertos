

$.ajax({
   type: "GET",
   url: '../php/obtenercategoria.php',

   dataType: "json",

   success: function(data){
          $.each(data,function(i,item) {
          $("#categoria").append('<option value='+item.categoria_id+'>'+item.categoria_nombre+'</option>');
          return item;
   });
   },
   error: function(data) {
     alert('error');
   }
 });
