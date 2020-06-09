<?php


include('../includes/dbconnection.php' );
$subcategoria="";


      $consulta = "SELECT ID, nickname FROM expertos  ";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $experto[] =$array=array(
          'experto_id'=>$data['ID'],
          'expertos_nickname'=>$data['nickname'],
      );
  }

    echo json_encode($experto);

      mysqli_close($conexion);
?>
