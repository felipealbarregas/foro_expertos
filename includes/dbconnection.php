<?php

$usuario = "felipe";
$contrasena = "cendrero2811";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "foro_expertos";

$conexion = mysqli_connect( $servidor, $usuario,$contrasena,$basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");




?>
