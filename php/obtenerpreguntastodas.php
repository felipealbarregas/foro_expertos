<?php


include('../includes/dbconnection.php' );

      $consulta = "SELECT Tema, Fecha,  Mensaje  FROM preguntas ORDER BY Fecha ASC LIMIT 10 ";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $mensajes[] =$array=array(
          'tema'=>$data['Tema'],
          'fecha'=>$data['Fecha'],
          'mensaje'=>$data['Mensaje'],
      );
  }

    echo json_encode($mensajes);

      mysqli_close($conexion);
?>
