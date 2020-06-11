function  obtenerinfousu(nickname){

  var parametros = {"nickname":nickname};
$.ajax({
   type: "GET",
   url: '../php/obtenerinfousu.php',
   dataType: "json",
   data: parametros,

   success: function(data){
          $.each(data,function(i,item) {
          $("#nombre").val(item.nombre);
          $("#apellido").val(item.apellidos);
          $("#provincia").val(item.provincia);
          $("#ciudad").val(item.ciudad);
          $("#usuario").val(item.nickname);
          $("#usu").val(item.nickname);
          $("#password").val(item.password);
          $("#email").val(item.email);
   });
   },
   error: function(data) {
     alert('error');
   }
 });

}
