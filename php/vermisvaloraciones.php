<?php


include('../includes/dbconnection.php' );
if(isset($_GET['nickname']) && !empty($_GET['nickname'])){
  $nickname = $_GET['nickname'];
  }

      $consulta = "SELECT Puntuacion FROM expertos where nickname='$nickname'";
      $resultado = $conexion->query($consulta)or die($conexion->error);
      while($data1 = mysqli_fetch_array($resultado)){
            $puntuacion =$array=array(
                'puntuacion'=>$data1['Puntuacion'],
            );
          }

              echo json_encode($puntuacion);
      mysqli_close($conexion);
?>
