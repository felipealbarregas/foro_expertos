function parametroURL(_par) {
var _p = null;
if (location.search) location.search.substr(1).split("&").forEach(function(pllv) {
  var s = pllv.split("="), //separamos llave/valor
    ll = s[0],
    v = s[1] && decodeURIComponent(s[1]); //valor hacemos encode para prevenir url encode
  if (ll == _par) { //solo nos interesa si es el nombre del parametro a buscar
    if(_p==null){
    _p=v; //si es nula, quiere decir que no tiene valor, solo textual
    }else if(Array.isArray(_p)){
    _p.push(v); //si ya es arreglo, agregamos este valor
    }else{
    _p=[_p,v]; //si no es arreglo, lo convertimos y agregamos este valor
    }
  }
});
return _p;
}
function vervaloracion(){
var nickname=sessionStorage.getItem("usuario");
var parametros = {"nickname":nickname};
$.ajax({
 type: "GET",
 url: '../php/vermisvaloraciones.php',
 dataType: "json",
 data: parametros,

 success: function(data){
        $.each(data,function(i,item) {
          $("#valoraciones").append('<h2><strong> valoracion media:</strong><h2> <div id="media"></div>');
        $("#media").append(item);

 });
 },
 error: function (request, status, error) {
      alert(error);
  }
});
  setTimeout(function(){eliminarmedia()}, 3000);
}

function eliminarmedia(){
  $('#valoraciones').remove();
}


function comprobarusuario(proceso){
  var nickname =sessionStorage.getItem("usuario");
  $.ajax({
      url:'http://localhost/php/comprobarexperto.php',
      data: {"nickname": nickname},
        type : 'POST',
      success: function(respuesta){
        if(proceso==1){
        if (respuesta==1){
            // Obtenemos la referencia del elemento body
            var body = document.getElementsByTagName("body")[0];
            // Creamos un elemento <table> y un elemento <tbody>
            var tabla = document.createElement("table");
            var tblBody = document.createElement("tbody");
            // Creamos las celdas
            for (var i = 0; i < 1; i++){
              // Creamos las hileras de la tabla
              var fila = document.createElement("tr");
              for (var j = 0; j < 1 ; j++) {
                // Crea un elemento <td> y un nodo de texto, hace que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                var url = "<a href='verperfil.html'  onmouseout='eliminartabla()'>Mi perfil</a>";
                celda.innerHTML=url;
                fila.appendChild(celda);

              }
              // agregamos la hilera al final de la tabla (al final del elemento tblbody)
              tblBody.appendChild(fila);
            }
              // Creamos las celdas
              for (var i = 0; i < 1; i++){
                // Creamos las hileras de la tabla
                var fila = document.createElement("tr");
                for (var j = 0; j < 1 ; j++) {
                  // Crea un elemento <td> y un nodo de texto, hace que el nodo de
                  // texto sea el contenido de <td>, ubica el elemento <td> al final
                  // de la hilera de la tabla
                  var celda = document.createElement("td");
                    var nickname = parametroURL("nickname");
                  var url = "<a href='completarperfil.html?nickname="+nickname+"'  onmouseout='eliminartabla()'>Completar Perfil</a>";
                  celda.innerHTML=url;
                  fila.appendChild(celda);

                }
            // agregamos la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(fila);
            }

            for (var i = 0; i < 1; i++) {
              // Creamos las hileras de la tabla
              var fila = document.createElement("tr");
              for (var j = 0; j < 1 ; j++) {
                // Crea un elemento <td> y un nodo de texto, hace que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                var url = "<a href='cerrarsesion.html'  onmouseout='eliminartabla()'>Cerrar Sesion</a>";
                celda.innerHTML=url;
                fila.appendChild(celda);
              }
            // agregamos la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(fila);
            }
            // posicionamos el <tbody> debajo del elemento <table>
            tabla.appendChild(tblBody);
            // appends <table> into <body>
            body.appendChild(tabla);
            // modifica el atributo "border" de la tabla y lo fija a "2";

            tabla.setAttribute("id", "tabla");

            var result = document.getElementById("menubar");
            result.appendChild(tabla);

        }else if(respuesta!=1){
            // Obtenemos la referencia del elemento body
            var body = document.getElementsByTagName("body")[0];
            // Creamos un elemento <table> y un elemento <tbody>
            var tabla = document.createElement("table");
            var tblBody = document.createElement("tbody");

            // Creamos las celdas
            for (var i = 0; i < 1; i++){
              // Creamos las hileras de la tabla
              var fila = document.createElement("tr");
              for (var j = 0; j < 1 ; j++) {
                // Crea un elemento <td> y un nodo de texto, hace que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                var url = "<a href='completarperfil.html' onmouseout='eliminartabla()'>Mi perfil</a>";
                celda.innerHTML=url;
                fila.appendChild(celda);

              }

            // agregamos la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(fila);
            }
            for (var i = 0; i < 1; i++) {
              // Creamos las hileras de la tabla
              var fila = document.createElement("tr");
              for (var j = 0; j < 1 ; j++) {
                // Crea un elemento <td> y un nodo de texto, hace que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                var url = "<a href='cerrarsesion.html' onmouseout='eliminartabla()'>Cerrar Sesion</a>";
                celda.innerHTML=url;
                fila.appendChild(celda);
              }
            // agregamos la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(fila);
            }
            // posicionamos el <tbody> debajo del elemento <table>
            tabla.appendChild(tblBody);
            // appends <table> into <body>
            body.appendChild(tabla);
            // modifica el atributo "border" de la tabla y lo fija a "2";

            tabla.setAttribute("id", "tabla");

            var result = document.getElementById("menubar");
            result.appendChild(tabla);


        }
      }else if (proceso==2) {
        if(respuesta!=1){
          var body = document.getElementsByTagName("body")[0];
        var result = document.getElementById("menubar");
        var li=document.createElement('li');
          li.innerHTML="<li><a href='preguntascategoria.html'>Preguntas</a></li>";
          result.appendChild(li);
          var li=document.createElement('li');
            li.innerHTML="<li><a href='vermirespuestas.html'>Respuestas</a></li>";
            result.appendChild(li);
          var li=document.createElement('li');
            li.innerHTML="<li><a href='vermisvaloraciones.html'>valoraciones</a></li>";
            result.appendChild(li);
      }
    }else if(proceso==3){
          // Obtenemos la referencia del elemento body
          var body = document.getElementsByTagName("body")[0];
          // Creamos un elemento <table> y un elemento <tbody>
          var tabla = document.createElement("table");
          var tblBody = document.createElement("tbody");
          // Creamos las celdas
          for (var i = 0; i < 1; i++){
            // Creamos las hileras de la tabla
            var fila = document.createElement("tr");
            for (var j = 0; j < 1 ; j++) {
              // Crea un elemento <td> y un nodo de texto, hace que el nodo de
              // texto sea el contenido de <td>, ubica el elemento <td> al final
              // de la hilera de la tabla
              var celda = document.createElement("td");
              var url = "<a href='verperfil.html'  onmouseout='eliminartabla()'>Mi perfil</a>";
              celda.innerHTML=url;
              fila.appendChild(celda);

            }
            // agregamos la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(fila);
          }
          for (var i = 0; i < 1; i++) {
            // Creamos las hileras de la tabla
            var fila = document.createElement("tr");
            for (var j = 0; j < 1 ; j++) {
              // Crea un elemento <td> y un nodo de texto, hace que el nodo de
              // texto sea el contenido de <td>, ubica el elemento <td> al final
              // de la hilera de la tabla
              var celda = document.createElement("td");
              var url = "<a href='cerrarsesion.html'  onmouseout='eliminartabla()'>Cerrar Sesion</a>";
              celda.innerHTML=url;
              fila.appendChild(celda);
            }
          // agregamos la hilera al final de la tabla (al final del elemento tblbody)
          tblBody.appendChild(fila);
          }
          // posicionamos el <tbody> debajo del elemento <table>
          tabla.appendChild(tblBody);
          // appends <table> into <body>
          body.appendChild(tabla);
          // modifica el atributo "border" de la tabla y lo fija a "2";

          tabla.setAttribute("id", "tabla");

          var result = document.getElementById("menubar");
          result.appendChild(tabla);


    }
      },
      error: function(){
        alert("no se puede");
      },

  });

}

function eliminartabla(){
$("#tabla").remove();

}
