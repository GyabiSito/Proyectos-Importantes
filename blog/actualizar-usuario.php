<?php

require_once 'includes/conexion.php';

if (isset($_POST['submit'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $email = str_replace(array("'", "\""), '', trim($email));


    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';


    // Verificar y eliminar comillas de las variables
    $nombre = str_replace(array("'", "\""), '', trim($nombre));
    $apellido = str_replace(array("'", "\""), '', trim($apellido));


    $verificar = $pdo->prepare("SELECT id, email FROM usuarios WHERE email=?");
    $verificar->execute([$email]);

    if ($verificar->rowCount() === 1) {
        $_SESSION['errores']['general'] = "El usuario ya existe";
        header('Location: mis-datos.php');
    } else if ($verificar->rowCount() === 0) {




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



        $guardar_usuario = false;

        // Insert users
        if (count($errores) == 0) {
            $guardar_usuario = true;
            $id = $_SESSION['usuario']['id'];
            $query = $pdo->prepare("UPDATE usuarios SET nombre=?, apellidos=?, email=? WHERE id=?");

            if ($query->execute([$nombre, $apellido, $email, $id])) {
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellido;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
            } else {
                $_SESSION['errores']['general'] = "Fallo al guardar tus datos";
            }
        } else {
            $_SESSION['errores'] = $errores;
            header('Location: mis-datos.php');
        }
    }
}
header('Location: mis-datos.php');
