<?php 
    $destinatario= 'jeftikas@gmail.com';
    //esto es donde se va a mandar el correo
    $nombre= $_POST['nombre'];
    $mensaje= $_POST['mensaje'];
    $email= $_POST['email'];

    $header= "Enviado desde la pagina de Ezequiel Flores";
    $mensajecompleto= $mensaje , "\nAtentamente: ", $nombre;

    mail($destinatario , $mensajecompleto, $header);
    echo "<script>alert('Correo enviado exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";