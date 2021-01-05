<?php

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre o Razón social: ". $nombre . "<br> Correo electrónico: " . $email . "<br> Teléfono: " . $telefono . "<br> Mensaje: " . $mensaje;

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail("contacto@semconstruccionessrl.com","SEM CONSTRUCCIONES SRL",$contenido,$headers)

?>
