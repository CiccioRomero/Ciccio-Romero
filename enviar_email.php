<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    
    // Dirección de correo electrónico a la que se enviará el mensaje
    $destinatario = "ciccioromero@hotmail.com";
    
    // Asunto del correo electrónico
    $asunto = "Mensaje de contacto desde el sitio web";
    
    // Construye el cuerpo del mensaje
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Email: $email\n\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje\n";
    
    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje)) {
        // Redirige a la página de confirmación si el correo se envía correctamente
        header("Location: confirmacion.html");
        exit();
    } else {
        // Si hay un error al enviar el correo, muestra un mensaje de error
        echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
    }
} else {
    // Si no se ha enviado el formulario, redirige a la página de contacto
    header("Location: contacto.html");
    exit();
}
?>
