<?php
include "conexion2.php";
$email = $_POST['email'];
$pass = $_POST['p1'];
$pass2 = $_POST['p2'];
if($pass == $pass2){
    $hash = password_hash("$pass", PASSWORD_DEFAULT, [15]);
    $pdo->query("UPDATE cuenta set pass='$hash' WHERE gmail = '$email'") or die($pdo->error);
    echo "<script>alert('Contraseña cambiada correctamente puede cerrar esta pestaña')</script>";
}else{
    echo "<script>alert('Has ingresado un dato mal intenta de nuevo')</script>";
}


?>