
function  obtenersubcategoria(){
  for (let i = document.getElementById('subcategoria').options.length; i >= 0; i--) {
    document.getElementById('subcategoria').remove(i);
};

  var id=document.getElementById('categoria').value;
  var parametros = {"id":id};
$.ajax({
   type: "GET",
   url: '../php/obtenersubcategoria.php',
   dataType: "json",
   data: parametros,

   success: function(data){
          $.each(data,function(i,item) {
          $("#subcategoria").append('<option value='+item.subcategoria_id+'>'+item.subcategoria_nombre+'</option>');
   });
   },
   error: function(data) {
     alert('error');
  
   }
 });

}
