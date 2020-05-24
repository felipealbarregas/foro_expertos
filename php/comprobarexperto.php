<?php
include('../includes/dbconnection.php' );
  $mensaje=0;

    if(isset($_POST['nickname']) && !empty($_POST['nickname'])){
      // Verify data
      $usuario = $_POST['nickname']; // Set email variable

      }
      $consulta = "SELECT ID FROM expertos where Nickname='$usuario' and activo='0'";
      $resultado = $conexion->query($consulta)or die($conexion->error);
      echo $resultado->num_rows;

      mysqli_close($conexion);
?>
