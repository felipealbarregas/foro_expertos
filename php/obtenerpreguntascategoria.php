<?php

include('../includes/dbconnection.php' );
$id=0;
if(isset($_GET['nickname']) && !empty($_GET['nickname'])){
  $nombre=$_GET['nickname'];
  }
  $consulta = "SELECT ID_Subcategoria FROM expertos where Nickname='$nombre'";
  $resultado = $conexion->query($consulta)or die($conexion->error);
  $fila = $resultado->fetch_assoc();
  $id =$fila['ID_Subcategoria'];
      $consulta = "SELECT ID,ID_Usuario,ID_Subcategoria,Tema, Fecha,  Mensaje  FROM preguntas where ID_Subcategoria='$id'";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $mensajes[] =$array=array(
          'id'=>$data['ID'],
          'idusuario'=>$data['ID_Usuario'],
          'idsubcategoria'=>$data['ID_Subcategoria'],
          'tema'=>$data['Tema'],
          'fecha'=>$data['Fecha'],
          'mensaje'=>$data['Mensaje'],
      );
  }

    echo json_encode($mensajes);

      mysqli_close($conexion);
?>
