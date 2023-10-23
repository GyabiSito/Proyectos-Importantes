<?php
require 'includes/conexion.php';
if (isset($_POST['submit'])) {


    if(!isset($_SESSION)){
        session_start();
    }
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Verificar y eliminar comillas de las variables
    $nombre = str_replace(array("'", "\""), '', trim($nombre));
    $apellido = str_replace(array("'", "\""), '', trim($apellido));
    $email = str_replace(array("'", "\""), '', trim($email));
    $password = str_replace(array("'", "\""), '', trim($password));

    $errores = array();

    // Validate data
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_valido = true;
    } else {
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es valido";
    }

    // Validate apellido
    if (!empty($apellido) && !is_numeric($apellido) && !preg_match("/[0-9]/", $apellido)) {
        $apellido_valido = true;
    } else {
        $apellido_valido = false;
        $errores['apellido'] = "El apellido no es valido";
    }

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valido = false;
        $errores['email'] = "El email no es valido";
    }

    // Validate password
    if (empty($password)) {
        $password_valido = false;
        $errores['password'] = "La contraseña esta vacia";
    }

    $guardar_usuario = false;

    // Insert users
    if (count($errores) == 0) {
        $guardar_usuario = true;

        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

        $query = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, email, password, fecha) VALUES (?, ?, ?, ?, CURDATE())");
            
        if ($query->execute([$nombre, $apellido, $email, $hash])) {
            $_SESSION['completado'] = "El registro se ha completado con éxito";
        } else {
            $_SESSION['errores']['general'] = "Fallo al guardar el usuario";
        }
    } else {
        $_SESSION['errores'] = $errores;
        header('Location: index.php');
    }
}
header('Location: index.php');
?>
