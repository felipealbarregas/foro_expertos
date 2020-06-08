<?php


include('../includes/dbconnection.php' );
if(isset($_GET['tablas']) && !empty($_GET['tablas'])){
  // Verify data
  $tablas = $_GET['tablas']; // Set email variable
  $tiempo = $_GET['tiempo'];
  }

      $consulta = "SELECT day(fecha),count(*) FROM $tablas WHERE fecha >= NOW() - INTERVAL 1 $tiempo group BY day(fecha) " ;
      $resultado = $conexion->query($consulta)or die($conexion->error);
      while($data = mysqli_fetch_array($resultado)){
            $fechas[] =$array=array(
              'fecha'=>$data['day(fecha)'],
              'cantidad'=>$data['count(*)'],
            );
        }

    echo json_encode($fechas);




      mysqli_close($conexion);
?>
