<?php
require_once 'conexion.php';
require_once 'includes/helpers.php'; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Blog</title>
</head>
<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>
        <!--Menu-->

        <nav id="menu">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <?php 
                $categorias=conseguirCategorias();
                    if ($categorias) {
                        foreach ($categorias as $categoria){
                            ?>
                            <li>
                                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a>
                            </li>
                            <?php
                        }
                    }
                    
                ?>
                <li>
                    <a href="index.php">Sobre mi</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="contenedor">