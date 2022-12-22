<?php
session_start();
if (isset($_SESSION['usuario'])) {
    if (isset($_SESSION['usuario'])) {
        if ($_SESSION['permisos'] === 'operador') {
            header('location: indexoperador.php');
        }
        if ($_SESSION['permisos'] === 'inmobiliario') {
            header('location: indexadmin.php');
        }
    }
} else {
    echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
    echo '<br>' . "<center><p style='color: red'>Debe iniciar sesión para poder ingresar a esta página</p></center>" . '<br>';
}
?>
