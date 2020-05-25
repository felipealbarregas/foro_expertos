<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>foro_expertos > alta</title>
</head>
<body>
    <!-- start header div -->
    <div id="header">
        <h3>Bienvenidos a foro expertos tiene usted su cuenta activada</h3>
    </div>
    <!-- end header div -->

    <!-- start wrap div -->
    <div id="wrap">
        <!-- start PHP code -->
        <?php
        include('../includes/dbconnection.php' );

            if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
              // Verify data
              $email = $_GET['email']; // Set email variable
              $hash = $_GET['hash']; // Set hash variable
              }

              $consulta = "SELECT hash FROM personas where Email='$email' and activo='0'";
              $resultado = $conexion->query($consulta);
              $fila = $resultado->fetch_assoc();
              if($fila['hash']==$hash){
                $sql="UPDATE personas SET activo='1' WHERE Email='$email' AND hash='$hash' AND activo='0'";
                $conexion->query($sql);
                echo '<div class="statusmsg">Tu cuenta ha sido activada, ahora puedes loguearte</div>';
              }else{
                echo '<div class="statusmsg">No se ha encontrado el usuario o el usuario ya esta activo</div>';
              }

              // We have a match, activate the account
        ?>
        <!-- stop PHP Code -->


    </div>
    <!-- end wrap div -->

</body>
</html>
