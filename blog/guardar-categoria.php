<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'includes/conexion.php';

    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $nombre = str_replace(array("'", "\""), '', trim($nombre));

    $errores = array();

    // Validate data
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_valido = true;

        // Si los datos son válidos, realiza la inserción en la base de datos
        $query = $pdo->prepare("INSERT INTO categorias (nombre) VALUES (?)");
        $query->execute([$nombre]);
    } else {
        $nombre_valido = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    header('Location: index.php');
}