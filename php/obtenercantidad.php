<?php


include('../includes/dbconnection.php' );
if(isset($_GET['tablas']) && !empty($_GET['tablas'])){
  // Verify data
  $tablas = $_GET['tablas']; // Set email variable
  $dia = $_GET['dia'];
  }

      $consulta = "SELECT DISTINCT COUNT(*) FROM $tablas WHERE day(fecha)=$dia  " ;
      $resultado = $conexion->query($consulta)or die($conexion->error);
      while($data = mysqli_fetch_array($resultado)){
            $cantdia[] =$array=array(
              'dia'=>$data['COUNT(*)'],
            );
        }

    echo json_encode($cantdia);




      mysqli_close($conexion);
?>
