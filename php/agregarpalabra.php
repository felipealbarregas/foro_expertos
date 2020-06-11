<?php
include('../includes/dbconnection.php' );

$palabra=$_POST['palabra'];


$sql = "INSERT INTO tesauro (Palabra) VALUES ('$palabra')";
mysqli_query($conexion, $sql);

mysqli_close($conexion);
$url ="http://localhost/ingresarpalabra.html"; // aqui pones la url
$tiempo_espera = 0; // Aquí se configura cuántos segundos hasta la actualización.
// Declaramos la funcion apra la redirección
header("refresh: $tiempo_espera; url=$url");
?>
