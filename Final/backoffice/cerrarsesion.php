<?php
require '../php/conexion.php';
session_start();

if(isset($_SESSION['usuario'])){
    $ci=$_SESSION['id_ci'];
    $datos=$pdo->prepare("INSERT INTO sesion (id_ci, accion) VALUES($ci, 'Finalizó la sesión')");
    $datos->execute();    
    session_destroy();
    header ('location: ../index.php');
} else {
    echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
    echo '<br>' . "<center><p style='color: red'>Debe iniciar sesión para poder ingresar a esta página</p></center>" . '<br>';
    ?>
    <br>
    <center>
        <a href="../../../" style='color: red'>Volver a página principal</a>
    </center>
    <br>
    <?php } 
?>

