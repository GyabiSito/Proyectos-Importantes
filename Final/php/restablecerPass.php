<?php
include "conexion2.php";
$email = $_POST['email'];
$bytes = random_bytes(5);
$token = bin2hex($bytes);
include "mail_reset.php";
$res=$pdo->query("SELECT * from cuenta where gmail='$email'")or die($conexion->error);
if(mysqli_num_rows($res) > 0){
if ($enviado){
    $pdo->query("update cuenta set token='$token',codigo=$codigo where gmail='$email'") or die($pdo->error);
    echo "<script>alert('Verifica tu mail para restablecer tu cuenta')</script>";
}
}else{
    echo "<script>alert('No existe un mail registrado con esa cuenta')</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logos/logo_chico.jpg">
    <title>Restablece tu contraseña</title>
</head>
<body>
    
</body>
</html>