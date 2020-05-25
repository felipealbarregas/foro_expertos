<?php


include('../includes/dbconnection.php' );
$categoria="";
if(isset($_GET['id']) && !empty($_GET['id'])){
  // Verify data
  $categoria = $_GET['id']; // Set email variable
  }
      $consulta = "SELECT ID, Nombre FROM subcategoria where ID_categoria='$categoria'";
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
