
$.ajax({
   type: "GET",
   url: '../php/obtenerprofesion.php',
   dataType: "json",

   success: function(data){
          $.each(data,function(i,item) {
          $("#profesion").append('<option value='+item.profesion_id+'>'+item.profesion_nombre+'</option>');
   });
   },
   error: function(data) {
     alert('error');
   }
 });
