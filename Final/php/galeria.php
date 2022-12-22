<?php
include_once "../php/conexion.php";
if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT  id, nombre FROM propiedad WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $propiedades = $stmt->fetchall(PDO::FETCH_ASSOC);
    $llamarimg = $pdo->prepare('SELECT url FROM imagenes WHERE id_propiedades = ?');
    $llamarimg->execute([$_GET['id']]);
    $imagenes = $llamarimg->fetchAll(PDO::FETCH_ASSOC);
} else {
    exit('La propiedad seleccionada no existe');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php foreach ($propiedades as $propiedad) : ?>
            <?= $propiedad['nombre'] . '- Galeria' ?>
        <?php endforeach; ?>
    </title>
    <meta name="author" content="Coding Black">
    <meta name="description" content="Propiedades Destacadas Acceda a las mejores propuestas del mercado, tanto en San José de Mayo como en el resto del Uruguay">
    <link rel="icon" href="../img/logos/logo_chico.jpg">
    <link rel="stylesheet" href="../css/esqueleto.css">
    <link rel="stylesheet" href="../css/style-propiedad-especifica.css">
    <script src="../js/jquery-latest.js"></script>
</head>

<body>
    <header>
        <div class="icono-menu">
            <img src="../img/iconos/menu.png" id="icono-menu">
        </div>

        <div class="cont-menu active" id="menu">
            <ul>
                <a href="../index.php">
                    <li> INICIO </li>
                </a>
                <a href="../paginas/propiedades.php">
                    <li> PROPIEDADES </li>
                </a>
                <a href="mailto:jorcab11@hotmail.com">
                    <li> CONTACTANOS </li>
                </a>
            </ul>
        </div>

        <nav>
            <ul class="ul-nav">
            <li><a href="#"><img src="../img/iconos/globo.png"></a></li>
                <li class="hover"><a href="../index.php">INICIO</a></li>
                <li class="hover"><a href="../paginas/propiedades.php">PROPIEDADES</a>
                <ul>
                        <li class="hover"><a href="tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                        <li class="hover"><a href="tipos-prop/campos.php">CAMPOS</a></li>
                        <li class="hover"><a href="tipos-prop/casas.php">CASAS</a></li>
                        <li class="hover"><a href="tipos-prop/terrenos.php">TERRENOS</a></li>
                    </ul>
                </li>
                <li class="hover"><a href="mailto:jorcab11@hotmail.com">CONTACTANOS</a></li>
                <li class="otro">
                    <a href="../paginas/iniciar-sesion.php">
                    <input type="submit" value="Iniciar Sesion" class="boton" style="margin-top: -10px;">
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <img class="ir-arriba" src="../img/iconos/arriba.png" alt="">
    <main>
        <div class="nucleo">
        <h1 class="galeria-h1">Galeria de Imágenes</h1>
        <div class="contenedor">
        <div class="galeria">
            <?php foreach ($imagenes as $img) : ?>
                <a class="galeria-img" href="#../backoffice/crud/agregar/<?= $img['url'] ?>">
                    <img src="../backoffice/crud/agregar/<?= $img['url'] ?>" alt="">
                </a>
            <?php endforeach; ?>
        </div>
        <div class="etiquetas">
            <a href="../paginas/propiedad-especifica.php?id=<?= $propiedad['id'] ?>">VOLVER</a>
        </div>
        <?php foreach ($imagenes as $img) : ?>
            <artticle class="light-box" id="../backoffice/crud/agregar/<?= $img['url'] ?>">
                <img class="img-galeria" src="../backoffice/crud/agregar/<?= $img['url'] ?>" alt="">
                <a href="#" class="close"><img src="../img/iconos/cerrar.png" alt=""></a>
            </artticle>
        <?php endforeach; ?>
        </div>
        </div>
     
        
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Contactanos</h4>
                <img src="../img/iconos/ubicacion.png">
                <p class="textos-foo">Ubicación: Colonia, Uruguay.<br> Av Mihanovich 166 b </p>
                <img src="../img/iconos/open.png">
                <p class="textos-foo">Horario:</p>
                <img src="../img/iconos/whatsapp.png">
                <p class="textos-foo">Whatsapp: 092 029175</p>
            </div>
            <div class="content-foo">
                <h4>Contactanos</h4>
                <img src="../img/iconos/instagram.png">
                <a href="http://www.instagram.com">
                    <p class="textos-foo">Instagram</p>
                </a>
                <img src="../img/iconos/gmail.png">
                <a href="http://www.jorcab11@hotmail.com">
                    <p class="textos-foo">Gmail</p>
                </a>
                <img src="../img/iconos/facebook.png">
                <a href="http://www.facebook.com">
                    <p class="textos-foo">Facebook</p>
                </a>
            </div>
            <div class="content-foo">
                <div id="empresa">
                    <h4>Empresas</h4>
                    <p class="textos-foo">Inmobiliaria</p>
                    <img src="../img/logos/logo.jpg">
                    <p class="textos-foo">Empresa desarrolladora</p>
                    <img src="../img/logos/codingblack.png" alt="">
                </div>
            </div>
        </div>
        <h2 class="titulo-final">&copy; Coding Black | Ana Reyes, José Luis García, José Hernández, Matías González</h2>
    </footer>


    <style>
        .nucleo{
            margin-bottom: 10%;
        }
        .galeria-h1 {
            font-weight: 400;
            text-align: center;
            padding: 20px 0;
            font-size: 40px;
            color: #0b5285;
        }

        .etiquetas {
            padding: 10px 10px;
            font-size: 20px;
            margin: 10px 10px;
            background-color: #0b5285;
        }

        .etiquetas a {
            color: #fff;
        }
    </style>
</body>
<script src="../js/arriba.js"></script>
<script src="../js/app2.js"></script>
</html>