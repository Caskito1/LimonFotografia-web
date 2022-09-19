<?php

    $destinatario = "caskito90@gmail.com";
    //correo al que se envía msj
    $nombre = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $marca = $_POST["marca"];
    $mensaje = $_POST["message"];

    $header = "Formulario Enviado desde la página web "
    $mensajeCompleto = "Nombre: " . $nombre . "\nemail: " . $email .  "\nTeléfono: " . $phone  ."\nEmpresa: " . $marca . "\nMensaje: " . $message;

    mail($destinatario, $mensajeCompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout (\"location.href = 'Contacto.html'\",1000)</script>";
    


?>