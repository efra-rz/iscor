<?php

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "efrain.rmz1985@gmail.com"; //Direcciones a las que se enviara el correo
$email_subject = "Formulario desde sitio web ISCOR"; //Asunto
$email_from ="info@efrix.net"; //Direccion que quieras que le aparezca al cliente
$email_bcc = "info@efrix.net,"; //Direcciones copias ocultas

// Variables del mensaje
$nombre = $_POST['nombre'];
$correo =  $_POST['correo'];
$mensaje =  $_POST['mensaje'];
$contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

$headers =
'From: '.$email_from."\r\n".
'Bcc: ' .$email_bcc. "\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $contenido, $headers);

header("Location:http://google.com");

?>
