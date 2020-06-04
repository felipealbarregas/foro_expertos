<?php
include('../includes/dbconnection.php' );

$id=$_POST['idpregunta'];
$nombre=$_POST['usuario'];
$mensaje=$_POST['mensajeresp'];
$consulta = "SELECT ID FROM Expertos where Nickname='$nombre'";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();
$id_experto =$fila['ID'];
$sql = "INSERT INTO respuestas (ID_pregunta, ID_experto,Mensaje) VALUES ('$id','$id_experto','$mensaje')";
if (mysqli_query($conexion, $sql)) {
      echo "Mensaje enviado correctamente";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}


mysqli_close($conexion);

$url ="http://localhost/mostrarmensaje.html";
$tiempo_espera = 0; // Aquí se configura cuántos segundos hasta la actualización.
// Declaramos la funcion apra la redirección
header("refresh: $tiempo_espera; url=$url");
?>
