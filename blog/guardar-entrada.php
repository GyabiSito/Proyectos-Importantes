<?php

if (isset($_POST)) {
    require_once 'includes/conexion.php';

    $titulo = isset($_POST['titulo']) ? $_POST['titulo'] : '';
    $titulo = str_replace(array("'", "\""), '', trim($titulo));
    $desc = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
    $desc = str_replace(array("'", "\""), '', trim($desc));
    $categoria = isset($_POST['categoria']) ? (int)$_POST['categoria'] : false;
    $usuario = $_SESSION['usuario']['id'];
    $errores = array();

    if (empty($titulo)) {
        $errores['titulo'] = 'El titulo no es valido';
    }
    if (empty($desc)) {
        $errores['descripcion'] = 'La descripcion no es valida';
    }
    if (empty($categoria) && !is_numeric($categoria)) {
        $errores['categoria'] = 'La categoria no es valida';
    }

    if (count($errores) == 0) {
        if (isset($_GET['editar'])) {
            $entrada_id=$_GET['editar'];
            $usuario_id=$_SESSION['usuario']['id'];
            $query = $pdo->prepare("UPDATE entradas SET categoria_id=?, titulo=?, descripcion=? WHERE id=? AND usuario_id=?");
            $query->execute([$categoria, $titulo, $desc, $entrada_id, $usuario_id]);
        } else {
            $query = $pdo->prepare("INSERT INTO entradas(usuario_id, categoria_id, titulo, descripcion, fecha) VALUES (?, ?, ?, ?, CURDATE())");
            $query->execute([$usuario, $categoria, $titulo, $desc]);
        }
    } else {
        $_SESSION['errores_entrada'] = $errores;
        if(isset($_GET['editar'])){
            header('Location: editar-entrada.php?id='.$_GET['editar']);
        }
        header('Location: crear-entradas.php');
    }
    header('Location: index.php');
}
