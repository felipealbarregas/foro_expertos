<?php


include('../includes/dbconnection.php' );
$subcategoria="";
if(isset($_GET['id']) && !empty($_GET['id'])){
  // Verify data
  $subcategoria = $_GET['id']; // Set email variable
  }

      $consulta = "SELECT ID, Nombre FROM profesiones where ID_Subcategoria='$subcategoria' ";
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
