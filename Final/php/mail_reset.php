<?php
// Varios destinatarios
$para = $email; // atención a la coma
//$para .= 'wez@example.com'; se vulve escribir si queremos enviar a varios destinatarios

//fromGestioninmobiliaria@gmail.
$from='com';

// título
$título = 'Restablecer contraseña';
$codigo = rand(1000,9999);

// mensaje
$mensaje = '
<html>
<head>
  <title>Restablecer tu contraseña</title>
</head>
<body>
  <h1>Inmobiliaria</h1>
  <div style="text-align:center; background-color:#ccc">
    <p>Restablecer contrasena</p>
    <h3>'.$codigo.'</h3>
    <p><a href="http://localhost/prueba/php/reset.php?email='.$email.'&token='.$token.'">
    para restablecer da click aqui</a></p>
    <p> <small>Si usted no envio este codigo favor de ignorar </small> </p>
  </div> 
</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Enviarlo
$enviado = false;

if(mail($para,$título,$mensaje,$cabeceras,$from)){
  $enviado = true;
}
?>