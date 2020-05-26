<?php
include('../includes/dbconnection.php' );

if($_POST['roles']=='Expertos'){
  $rol=3;
}else{
  $rol=2;
}

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$provincia=$_POST['provincia'];
$ciudad=$_POST['ciudad'];
$nickname=$_POST['Nickname'];
$contrasena=$_POST['password'];
$email=$_POST['email'];
$hash = md5( rand(0,1000) );

$sql = "INSERT INTO personas (ID_Roles, Nombre,Apellidos,Provincia,Ciudad,Nickname,Password, Email,hash,activo) VALUES ('$rol', '$nombre','$apellidos','$provincia','$ciudad','$nickname','$contrasena','$email','$hash','0')";
if (mysqli_query($conexion, $sql)) {
      echo "Usuario creado correctamente";
      echo "<br>";
      echo "Debera verificar su correo electronico que ha sido enviado";

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
$consulta = "SELECT ID FROM personas where Nickname='$nickname'";
$resultado = $conexion->query($consulta);
$fila = $resultado->fetch_assoc();

if($rol==2){
      $id=$fila['ID'];
        $sql = "INSERT INTO usuario (ID_Personas) VALUES ('$id')";
          if (mysqli_query($conexion, $sql)) {
              echo "Usuario agregado a la tabla usuario";
            }
          }

mysqli_close($conexion);


$to      = $email; // Send email to our user
$subject = 'Verificacion en foro_expertos'; // Give the email a subject
$message = '

Gracias por registrarse!
Acaba de registrarse en foro_expertos, Usted se acaba de registrar con las siguiente credenciales, pulse en el siguiente enlace para verificar su cuenta.

------------------------
Username: '.$nickname.'
Password: '.$contrasena.'
------------------------

Please click this link to activate your account:
http://localhost/php/verify.php?email='.$email.'&hash='.$hash.'

'; // Our message above including the link

$headers = 'From:noreply@foro_expertos.com' . "\r\n"; // Set from headers
mail($to, $subject, $message, $headers); // Send our email

sleep(10);
header('Location:http://localhost/index.html');
?>
