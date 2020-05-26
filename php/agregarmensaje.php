<?php
include('../includes/dbconnection.php' );


$nombre=$_POST['usuario'];
$tema=$_POST['tema'];
$mensaje=$_POST['mensaje'];
$Subcategoria=$_POST['Subcategoria'];
$consulta = "SELECT ID FROM personas where Nickname='$nombre'";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();
$id_personas =$fila['ID'];
$consulta = "SELECT ID FROM usuario where ID_Personas='$id_personas'";
$resultado = $conexion->query($consulta);
$fila1 = $resultado->fetch_assoc();
$id =$fila1['ID'];
$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO preguntas (ID_Usuario, ID_Subcategoria,Tema,Fecha,Mensaje) VALUES ('$id', '$Subcategoria','$tema','$date','$mensaje')";
if (mysqli_query($conexion, $sql)) {
      echo "Mensaje enviado correctamente";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}



mysqli_close($conexion);

?>
