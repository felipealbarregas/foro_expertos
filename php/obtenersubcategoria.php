<?php


include('../includes/dbconnection.php' );


      $consulta = "SELECT ID, Nombre FROM subcategoria ";
      $resultado = $conexion->query($consulta)or die($conexion->error);
  while($data = mysqli_fetch_array($resultado)){
      $subcategoria[] =$array=array(
          'subcategoria_id'=>$data['ID'],
          'subcategoria_nombre'=>$data['Nombre'],
      );
  }

    echo json_encode($subcategoria);

      mysqli_close($conexion);
?>
