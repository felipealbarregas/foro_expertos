<?php


include('../includes/dbconnection.php' );
$categoria="";
if(isset($_GET['nickname']) && !empty($_GET['nickname'])){
  $nombre=$_GET['nickname'];
  }

  $consulta = "SELECT ID FROM personas where Nickname='$nombre'";
  $resultado = $conexion->query($consulta);
  $fila = $resultado->fetch_assoc();
  $id_personas =$fila['ID'];
  $consulta = "SELECT ID FROM usuario where ID_Personas='$id_personas'";
  $resultado = $conexion->query($consulta);
  $fila1 = $resultado->fetch_assoc();
  $id =$fila1['ID'];


      $consulta = "SELECT * FROM preguntas where ID_Usuario='$id'";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $mensajes[] =$array=array(
          'tema'=>$data['Tema'],
          'fecha'=>$data['Fecha'],
          'mensaje'=>$data['Mensaje'],
      );
  }

    echo json_encode($subcategoria);

      mysqli_close($conexion);
?>
