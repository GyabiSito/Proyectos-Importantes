<?php

require_once 'includes/conexion.php';

if(isset($_SESSION['usuario']) && isset($_GET['id'])){
    $entrada_id = $_GET['id'];
    $usuario_id = $_SESSION['usuario']['id'];
    $query = $pdo->prepare('UPDATE entradas SET borrar=true WHERE usuario_id=? AND id=?');
    $query->execute([$usuario_id, $entrada_id]);
}

header('Location: index.php');