<?php

include('../includes/dbconnection.php' );
if(isset($_GET['id']) && !empty($_GET['id'])){
  $idusuario = $_GET['id'];
  }

      $consulta = "SELECT ID_Personas FROM usuario where ID='$idusuario'";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
    $id=$data['ID_Personas'];
    $consulta = "SELECT ID, Nickname FROM personas where ID='$id'";
    $resultado = $conexion->query($consulta)or die($conexion->error);
while($data1 = mysqli_fetch_array($resultado)){
      $usuario =$array=array(
          'nickname'=>$data1['Nickname'],
      );
    }
  }

    echo json_encode($usuario);

      mysqli_close($conexion);
?>
