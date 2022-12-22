<?php
include '../../php/conexion.php';
session_start();
if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {

        $stmt = $pdo->prepare('SELECT  id, nombre, tipo, descripcion, mejoras, ascensor, nro_piso,bano, servicios, cocina, saneamiento, habitaciones, m², fecha_publicacion,gastos_comunes,patio, venta_alquilar, precio, moneda, destacado,garaje,disponibilidad FROM propiedad WHERE id = ?');
        $stmt->execute([$_GET['id']]);
        $propiedades = $stmt->fetchall(PDO::FETCH_ASSOC);

        $llamarimg = $pdo->prepare('SELECT url,id_img FROM imagenes WHERE id_propiedades = ?');
        $llamarimg->execute([$_GET['id']]);
        $imagenes = $llamarimg->fetchAll(PDO::FETCH_ASSOC);

        $llamarvideo = $pdo->prepare('SELECT url,id_video FROM videos WHERE id_propiedades = ?');
        $llamarvideo->execute([$_GET['id']]);
        $videos = $llamarvideo->fetchAll(PDO::FETCH_ASSOC);
    } else {
        exit('La propiedad seleccionada no existe');
    }

?>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?php foreach ($propiedades as $propiedad) : ?>
                <?= $propiedad['nombre'] . '- Gestión Inmobiliaira' ?>
            <?php endforeach; ?>
        </title>
        <script src="https://kit.fontawesome.com/1878ede693.js" crossorigin="anonymous"></script>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../../css/esqueleto.css">
        <link rel="stylesheet" href="../css/buscador.css">
        <link rel="stylesheet" href="../css/verpropiedad.css">
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

        <img class="ir-arriba" src="../../img/iconos/arriba.png" alt="">
        <main>
        <section class="registros">
            <div class="contenedor">
                <div class="read">
                    <table>
                        <tr>
                            <td>ID</td>
                            <td>IMAGENES</td>
                            <td>ELIMINAR IMAGEN</td>
                        </tr>
                        <?php foreach ($imagenes as $img) : ?>
                            <tr>
                                <td><?= $img['id_img'] ?></td>
                                <td> <img class="img" src="../crud/agregar/<?= $img['url'] ?>" alt=""></td>
                                <td class="actions">
                                    <a href="eliminarimg.php?id=<?= $img['id_img'] ?>" class="trash">
                                        <img src="../../img/iconos/compartimiento.png" alt="">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </section>
        <section class="registros">
            <div class="contenedor">
                <div class="read">
                    <table id="videos">
                        <tr>
                            <td>ID</td>
                            <td>Videos</td>
                            <td>Eliminar video</td>
                        </tr>
                        <?php foreach ($videos as $vid) : ?>
                            <tr>
                                <td><?= $vid['id_video'] ?></td>
                                <td><iframe src="../crud/agregar/<?= $vid['url'] ?>" width="100%" height="100%"></iframe></td>
                                <td class="actions">
                                    <a href="eliminarvid.php?id=<?= $img['id_img'] ?>" class="trash">
                                        <img src="../../img/iconos/compartimiento.png" alt="">
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
        </section>
        </main>



        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Contactanos</h4>
                    <img src="../../img/iconos/ubicacion.png">
                    <p class="textos-foo">Ubicación: Colonia, Uruguay.<br> Av Mihanovich 166 b </p>
                    <img src="../../img/iconos/open.png">
                    <p class="textos-foo">Horario:</p>
                    <img src="../../img/iconos/whatsapp.png">
                    <p class="textos-foo">Whatsapp: 092 029175</p>
                </div>
                <div class="content-foo">
                    <h4>Contactanos</h4>
                    <img src="../../img/iconos/instagram.png">
                    <a href="http://www.instagram.com">
                        <p class="textos-foo">Instagram</p>
                    </a>
                    <img src="../../img/iconos/gmail.png">
                    <a href="http://www.jorcab11@hotmail.com">
                        <p class="textos-foo">Gmail</p>
                    </a>
                    <img src="../../img/iconos/facebook.png">
                    <a href="http://www.facebook.com">
                        <p class="textos-foo">Facebook</p>
                    </a>
                </div>
                <div class="content-foo">
                    <div id="empresa">
                        <h4>Empresas</h4>
                        <p class="textos-foo">Inmobiliaria</p>
                        <img src="../../img/logos/logo.jpg">
                        <p class="textos-foo">Empresa desarrolladora</p>
                        <img src="../../img/logos/codingblack.png" alt="">
                    </div>
                </div>
            </div>
            <h2 class="titulo-final">&copy; Coding Black | Ana Reyes, José Luis García, José Hernández, Matías González</h2>
        </footer>

    </body>

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

<style>
    .img {
        width: 200px;
        height: 200px;
    }


    iframe {
        width: 200px;
        height: 200px;
    }
</style>