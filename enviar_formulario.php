<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtiene los datos del formulario
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $mensaje = $_POST['mensaje'];

  // Configura el destinatario del correo
  $destinatario = "ciccioromero@hotmail.com";
  $asunto = "Nuevo mensaje de contacto";

  // Construye el cuerpo del correo
  $cuerpoCorreo = "Nombre: $nombre\n";
  $cuerpoCorreo .= "Email: $email\n\n";
  $cuerpoCorreo .= "Mensaje:\n$mensaje\n";

  // Envía el correo electrónico
  mail($destinatario, $asunto, $cuerpoCorreo);

  // Redirecciona a una página de confirmación
  header("Location: confirmacion.html");
}
?>
