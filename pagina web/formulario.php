<?php
    $destinatario = 'inversioncrypto@hotmail.com';
    // es el correo a donde se envia el msj
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $motivo = $_POST['motivo'];
    $mensaje = $_POST['mensaje'];

    $header = "Enviado desde la pagina de inversioncrypto";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $motivo, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script> setTimeiout(\"location.href='index.html'\",1000)<script>";
?>