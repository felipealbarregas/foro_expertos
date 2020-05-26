<?php
include('../includes/dbconnection.php' );
if(isset($_POST['nickname']) && !empty($_POST['nickname']) AND isset($_POST['password']) && !empty($_POST['password'])){
  // Verify data
  $nickname=$_POST['nickname'];
  $contrasena=$_POST['password'];
  }
  $consulta = "SELECT password , ID_Roles FROM personas where Nickname='$nickname' and activo='1'";
  $resultado = $conexion->query($consulta);
  $fila = $resultado->fetch_assoc();
  if($fila==null){
    echo "Lo sentimos su usuario no existe o su cuenta no esta activada";
    $url ="http://localhost/index.html"; // aqui pones la url
    $tiempo_espera = 10; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");

  }else{
  if($fila['password']==$contrasena){
    echo "usuario logueado correctamente";
  }else{
    echo "el usuario no se ha podido loguear";
  }
  if($fila['ID_Roles']==1){
    $url ="http://localhost/inicioadmin.html"; // aqui pones la url
    $tiempo_espera = 3; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");
  }elseif ($fila['ID_Roles']==2) {
    $url ="http://localhost/iniciousuarios.html"; // aqui pones la url
    $tiempo_espera = 3; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");

  }else {
    $url ="http://localhost/inicioexpertos.html?nickname=$nickname"; // aqui pones la url
    $tiempo_espera = 3; // Aquí se configura cuántos segundos hasta la actualización.
    // Declaramos la funcion apra la redirección
    header("refresh: $tiempo_espera; url=$url");

  }
}
?>
