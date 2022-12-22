<?php
include '../../php/conexion.php';
session_start();
$msg = '';
$stmt = $pdo->prepare('SELECT  id, nombre, tipo, descripcion, mejoras, ascensor, nro_piso,bano, servicios, cocina, saneamiento, habitaciones, m², fecha_publicacion,gastos_comunes,patio, venta_alquilar, precio, moneda, destacado,garaje,disponibilidad FROM propiedad WHERE id = ?');
$stmt->execute([$_GET['id']]);
$propiedades = $stmt->fetchall(PDO::FETCH_ASSOC);

if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {
        $stmt = $pdo->prepare('SELECT * FROM videos WHERE id_video=?');
        $stmt->execute([$_GET['id']]);
        $vid = $stmt->FETCH(PDO::FETCH_ASSOC);
        if (!$vid) {
            exit('el video seleccionado no existe');
        }
        if (isset($_GET['confirm'])) {
            if ($_GET['confirm'] == 'yes') {
                $stmt = $pdo->prepare("DELETE FROM videos WHERE id_video=?");
                $stmt->execute([$_GET['id']]);
                $msg = '<p class="subtitulo">Video ELiminado</p>';
            }
        }
    } else {
        exit('No existe este video');
    }

?>
 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ELIMINAR VIDEO - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../../css/esqueleto.css">
        <script src="../../js/jquery-latest.js"></script>
    </head>

    <body>
    <header>
            <div class="icono-menu">
                <img src="../../img/iconos/menu.png" id="icono-menu">
            </div>

            <div class="cont-menu active" id="menu">
                <ul>
                    <a href="../../index.php">
                        <li> INICIO </li>
                    </a>
                    <a href="../../paginas/propiedades.php">
                        <li> PROPIEDADES

                        </li>
                    </a>
                    <a href="mailto:jorcab11@hotmail.com">
                        <li> CONTACTANOS </li>
                    </a>
                </ul>
            </div>

            <nav>
                <ul class="ul-nav">
                    <li class="hover"><a href="#"><img src="../../img/iconos/globo.png"></a></li>
                    <li class="hover"><a href="../../index.php">INICIO</a></li>
                    <li class="hover"><a href="../../paginas/propiedades.php">PROPIEDADES</a>
                        <ul>
                            <li class="hover"><a href="../../php/tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                            <li class="hover"><a href="../../php/tipos-prop/campos.php">CAMPOS</a></li>
                            <li class="hover"><a href="../../php/tipos-prop/casas.php">CASAS</a></li>
                            <li class="hover"><a href="../../php/tipos-prop/terrenos.php">TERRENOS</a></li>
                        </ul>
                    </li>
                    <li><a href="mailto:jorcab11@hotmail.com">CONTACTANOS</a></li>
                    <li>
                        <a href="../redirect.php">
                            <input type="submit" value="BACKOFFICE" style="padding: 15px 50px;background-color: var(--color-uno); font-weight: 600; border:1px solid #e6e6e6; border-radius:40px; color: var(--blanco); cursor: pointer; margin-top: -20vw;" class="iniciar">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>
    <script src="../../js/arriba.js"></script>
    <script src="../../js/app2.js"></script>

    </html>

    <?php

} else {
    echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
    echo '<br>' . "<center><p style='color: red'>Debe iniciar sesión para poder ingresar a esta página</p></center>" . '<br>';
?>
    <br>
    <center>
        <a href="../../" style='color: red'>Volver a página principal</a>
    </center>
    <br>
<?php } ?>