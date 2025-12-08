<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar datos (PHP)</title>
</head>
<body>

<?php

//Si se ha enviado el formulario por POST
if($_SERVER["REQUEST_METHOD"] == "POST") {
    //Obtenemos los datos del formulario
    $nombre = htmlspecialchars(strip_tags(trim($_POST["name"])));
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])));
    $mensaje = htmlspecialchars(strip_tags(trim($_POST["message"])));


    //Destinatario
    $para = "jesus.garbla@educa.jcyl.es";
    $asunto = "Nuevo mensaje desde tu portafolio";
    $contenido = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";


    //Encabezados
    $cabeceras = "From: $email";

    //Enviar correo
    if(mail($para, $asunto, $contenido, $cabeceras)) {
        echo "<div class='exito'>";
        echo "Mensaje enviado correctamente. Gracias.";
        echo "</div>";
    } else {
        echo "<div class='error'>";
        echo "Error al enviar el mensaje. Intentalo nuevamente.";
        echo "</div>";
    }
} else {
    //Si no se envio por POST, redirigir al formulario
    header("Location: index.html");
    exit();
}


?>
</body>
</html>