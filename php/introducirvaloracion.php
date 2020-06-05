<?php
include('../includes/dbconnection.php' );

$rating=$_GET['rating'];
$id=$_GET['idrespuesta'];
$contador=0;
$total=0;


$sql = "UPDATE respuestas SET Valoracion='$rating' where ID='$id'";
if (mysqli_query($conexion, $sql)) {
    echo"se ha actualizado el valor";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
$consulta = "SELECT ID_experto FROM respuestas where ID='$id'";
$resultado = $conexion->query($consulta)or die($conexion->error);
$fila = $resultado->fetch_assoc();
$id1 =$fila['ID_experto'];

$consulta = "SELECT valoracion FROM respuestas where ID_experto='$id1'";
$resultado = $conexion->query($consulta)or die($conexion->error);
while($data = mysqli_fetch_array($resultado)){
      $total=$data['valoracion']+$total;
      $contador++;

}
$valoracionusu=$total/$contador;
$sql = "UPDATE expertos SET puntuacion='$valoracionusu' where ID='$id1'";
mysqli_query($conexion, $sql);

mysqli_close($conexion);

?>
