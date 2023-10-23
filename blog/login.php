<?php
include 'includes/conexion.php';

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare('SELECT * FROM usuarios WHERE email = ?');
    $query->execute([$email]);

    // Verificar si se encontró una fila
    if ($query->rowCount() === 1) {
        // Se encontró una fila en la base de datos
        $usuario = $query->fetch(PDO::FETCH_ASSOC);
        $hash = $usuario['password'];

        if (password_verify($password, $hash)) {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['error_login'] = null; // Limpiar el error de inicio de sesión

            // Redirigir al usuario a la página de inicio o a otra página relevante
            header('Location: index.php');
            exit();
        } else {
            $_SESSION['error_login'] = "Login Incorrecto";
            header('Location: index.php');
        }
    } else {
        $_SESSION['error_login'] = "Login Incorrecto";
        header('Location: index.php');
    }
}
