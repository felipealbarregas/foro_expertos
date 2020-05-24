<?php
$to = "felipegarba2011@hotmail.es";
$subject = "Asunto del email";
$message = "Este es mi primer envío de email con PHP";
$headers = "From: foroexpertofelipe@gmail.com";

mail($to, $subject, $message, $headers);
?>
