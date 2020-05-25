<?php


include('../includes/dbconnection.php' );


      $consulta = "SELECT ID, Nombre FROM profesiones ";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $profesion[] =$array=array(
          'profesion_id'=>$data['ID'],
          'profesion_nombre'=>$data['Nombre'],
      );
  }

    echo json_encode($profesion);

      mysqli_close($conexion);
?>
