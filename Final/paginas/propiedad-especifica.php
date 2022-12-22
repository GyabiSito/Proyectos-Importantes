<?php
include_once "../php/conexion.php";

if (isset($_GET['id'])) {
    $stmt = $pdo->prepare('SELECT  id, nombre, tipo, descripcion, mejoras, ascensor, nro_piso,bano, servicios, cocina, saneamiento, habitaciones, m², fecha_publicacion,gastos_comunes,patio, venta_alquilar, precio, moneda, destacado,garaje FROM propiedad WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $propiedades = $stmt->fetchall(PDO::FETCH_ASSOC);

    $llamarimg = $pdo->prepare('SELECT * FROM imagenes WHERE id_propiedades = ? LIMIT 4');
    $llamarimg->execute([$_GET['id']]);
    $imagenes = $llamarimg->fetchAll(PDO::FETCH_ASSOC);

    $llamarvideo = $pdo->prepare('SELECT * FROM videos WHERE id_propiedades = ?');
    $llamarvideo->execute([$_GET['id']]);
    $videos = $llamarvideo->fetchAll(PDO::FETCH_ASSOC);

    $llamarubica = $pdo->prepare('SELECT * FROM ubicacion WHERE id_propiedades = ?');
    $llamarubica->execute([$_GET['id']]);
    $ubicacion = $llamarubica->fetchAll(PDO::FETCH_ASSOC);
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
            <?= $propiedad['nombre'] . '- Gestión Inmobiliaira' ?>
        <?php endforeach; ?>
    </title>
    <meta name="author" content="Coding Black">
    <meta name="description" content="Propiedades Destacadas Acceda a las mejores propuestas del mercado, tanto en San José de Mayo como en el resto del Uruguay">
    <link rel="icon" href="../img/logos/logo_chico.jpg">
    <link rel="stylesheet" href="../css/esqueleto.css">
    <link rel="stylesheet" href="../css/style-propiedad-especifica.css">
    <link rel="stylesheet" href="../css/style-filtros.css">
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
                <a href="propiedades.php">
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
                <li class="hover"><a href="propiedades.php">PROPIEDADES</a>
                    <ul>
                        <li class="hover"><a href="../php/tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                        <li class="hover"><a href="../php/tipos-prop/campos.php">CAMPOS</a></li>
                        <li class="hover"><a href="../php/tipos-prop/casas.php">CASAS</a></li>
                        <li class="hover"><a href="../php/tipos-prop/terrenos.php">TERRENOS</a></li>
                    </ul>
                </li>
                <li class="hover"><a href="mailto:jorcab11@hotmail.com">CONTACTANOS</a></li>
                <li>
                    <a href="iniciar-sesion.php">
                    <input type="submit" value="Iniciar Sesion" class="boton" style="margin-top: -10px;">
                    </a>
                </li>
            </ul>
        </nav>

        <section class="filtros">
            <div id="generalbuscador">
                <h2 class="frase">FILTROS</h2>
                <div class="cont-formu">
                    <form action="../php/buscadorfiltros.php" method="get">
                        <input type="number" min="0" name="precio" placeholder="PRECIO MÁXIMO" class="filtrobuscar otro">
                        <label class="text" for="">Propiedad:</label>
                        <select name="tipopropiedad" class="filtrobuscar">
                            <option value="casa">CASA</option>
                            <option value="apartamento">APARTAMENTO</option>
                            <option value="terreno">TERRENO</option>
                            <option value="campo">CAMPOS</option>
                        </select>
                        <label class="text" for="">Tipo:</label>
                        <select name="ventaalquiler" id="" class="filtrobuscar">
                            <option value="venta">VENTA</option>
                            <option value="alquiler">ALQUILER</option>
                        </select>
                        <input type="submit" value="BUSCAR" class="filtrobuscar boton">
                    </form>
                </div>
            </div>
        </section>
    </header>

    <img class="ir-arriba" src="../img/iconos/arriba.png" alt="">

    <main>
        <section class="contenedor-encabezado">
            <div class="contenedor">
                <?php foreach ($propiedades as $propiedad) : ?>
                    <h1 class="titulo"><?= $propiedad['nombre'] ?>
                        <?php
                        if ($propiedad['moneda'] == "dolares") {
                        ?>
                            <div class="texto-mon">
                                <div class="cont-mon">
                                    <div class="cont-es">
                                        <p class='moneda'>US $<?= $propiedad['precio'] ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php
                        } else {
                        ?>
                            <div class="texto-mon">
                                <p class='moneda'>UYU $<?= $propiedad['precio'] ?></p>
                            </div>

                        <?php
                        }
                        ?>
                    </h1>
                    <div class="encabezado-contenido">
                        <div class="etiquetas">
                            <?php
                            if ($propiedad['destacado'] == "si") { ?>
                                <div class="cont-etiqueta">
                                    <p class="mostrar">DESTACADA</p>
                                </div>
                            <?php
                            } else { ?>
                                <p class="mostrar">NO DESTACADA</p>
                            <?php
                            }
                            ?>
                            <?php if ($propiedad['venta_alquilar'] == "venta") { ?>
                                <div class="cont-etiqueta">
                                    <p class="mostrar">VENTA</p>
                                </div>
                            <?php
                            } else { ?>
                                <p class="mostrar">ALQUILER</p>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="enca-ubica">
                            <div class="img-eti ubica">
                                <img src="../img/iconos/ubicacion.png" alt="">
                            </div>
                            <div class="text-ubica">
                                <?php foreach ($ubicacion as $ubica) : ?>
                                    <p><?= $ubica['calle'] ?> <?= $ubica['nro_puerta'] ?>, <?= $ubica['ciudad'] ?> Departamento de <?= $ubica['departamento'] ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php foreach ($videos as $video) : ?>
                            <?php
                            if ($video['id_propiedades'] != 0) { ?>
                                <div class="propiedad-video">
                                    <iframe src="../backoffice/crud/agregar/<?= $video['url'] ?>" width="100%" height="100%"></iframe>
                                </div>
                            <?php
                            } else {
                                echo "";
                            }
                            ?>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php foreach ($propiedades as $propiedad) : ?>
            <div class="contenedor">
            <h2 class="titulos titulo-barra">GALERIA</h2>
                <div class="galeria">
                    <?php foreach ($imagenes as $img) : ?>
                        <a class="galeria-img" href="#../backoffice/crud/agregar/<?= $img['url'] ?>">
                            <img src="../backoffice/crud/agregar/<?= $img['url'] ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>
                <div>
                    <br>
                    <a style="margin: 30px;" class="subtitulo" href="../php/galeria.php?id=<?= $propiedad['id'] ?>">MÁS IMÁGENES</a>
                </div>
                <?php foreach ($imagenes as $img) : ?>
                    <artticle class="light-box" id="../backoffice/crud/agregar/<?= $img['url'] ?>">
                        <img class="img-galeria" src="../backoffice/crud/agregar/<?= $img['url'] ?>" alt="">
                        <a href="#" class="close"><img src="../img/iconos/cerrar.png" alt=""></a>
                    </artticle>
                <?php endforeach; ?>
            </div>

            <section class="descripcion">
                <div class="contenedor">
                    <h2 class="titulos titulo-barra">DESCRIPCIÓN</h2>
                    <div class="texto-descripcion">
                        <p><?= $propiedad['descripcion'] ?></p>
                    </div>
                </div>
            </section>

            <section class="direccion">
                <div class="contenedor">
                    <h2 class="titulos titulo-barra">DIRECCIÓN</h2>
                    <?php foreach ($ubicacion as $ubica) : ?>
                        <div class="info-toda-ubica">
                            <div class="info-ubica">
                                <p><span>Dirección</span> <?= $ubica['calle'] ?> <?= $ubica['nro_puerta'] ?></p>
                            </div>
                            <div class="info-ubica">
                                <p><span>Ciudad</span> <?= $ubica['ciudad'] ?></p>
                            </div>
                            <div class="info-ubica">
                                <p><span>Departamento</span> <?= $ubica['departamento'] ?></p>
                            </div>
                            <div class="info-ubica">
                                <p><span>Barrio</span> <?= $ubica['calle'] ?></p>
                            </div>
                            <?php
                            if ($ubica['ruta'] == "no") {
                                echo "<p></p>";
                            } else {
                            ?>
                                <div class="info-ubica">
                                    <p>Ruta:<?= $ubica['ruta'] ?></p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="propiedad-ubica">
                            <iframe src="http://maps.google.com/maps?q=<?php echo $ubica['latitud']; ?>,<?php echo $ubica['longitud'] ?>&z=15&output=embed"></iframe>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <section class="detalles">
                <div class="contenedor">
                    <h2 class="titulos titulo-barra">DETALLES</h2>
                    <div class="contenedor-detalles">
                        <div class="fecha">
                            <div class="info-fecha">
                                <img src="../img/iconos/calendario.png" alt="">
                                <p class="text-fecha">Publicada el <?= $propiedad['fecha_publicacion'] ?></p>
                            </div>
                        </div>
                        <?php if ($propiedad['tipo'] == "casa") { ?>
                            <div class="detalless">
                                <div class="detalles-info">
                                    <p><span>ID Propiedad:</span> <?= $propiedad['id'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Superficie:</span> <?= $propiedad['m²'] ?> m²</p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Tipo:</span> <?= $propiedad['tipo'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Precio:</span>
                                        <?php
                                        if ($propiedad['moneda'] == "dolares") {
                                            echo "US $$propiedad[precio]";
                                        } else {
                                            echo "UYU $$propiedad[precio]";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Dormitorios:</span> <?= $propiedad['habitaciones'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Operación:</span> <?= $propiedad['venta_alquilar'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Baño:</span> <?= $propiedad['bano'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Cocina:</span> <?= $propiedad['cocina'] ?></p>
                                </div>

                                <?php
                                if ($propiedad['nro_piso'] == 0) {
                                    echo "<p></p>";
                                } else {
                                ?>
                                    <div class="detalles-info">
                                        <p>Pisos:<?= $propiedad['nro_piso'] ?></p>
                                    </div>
                                <?php
                                }
                                ?>

                                <div class="detalles-info">
                                    <p><span>Patio:</span> <?= $propiedad['patio'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Saneamiento:</span> <?= $propiedad['saneamiento'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Garaje:</span> <?= $propiedad['garaje'] ?></p>
                                </div>
                            </div>
                        <?php } elseif ($propiedad['tipo'] == "apartamento") { ?>
                            <div class="detalless">
                                <div class="detalles-info">
                                    <p><span>ID Propiedad:</span> <?= $propiedad['id'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Superficie:</span> <?= $propiedad['m²'] ?> m²</p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Tipo:</span> <?= $propiedad['tipo'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Precio:</span>
                                        <?php
                                        if ($propiedad['moneda'] == "dolares") {
                                            echo "US $$propiedad[precio]";
                                        } else {
                                            echo "UYU $$propiedad[precio]";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Dormitorios:</span> <?= $propiedad['habitaciones'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Opración:</span> <?= $propiedad['venta_alquilar'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Baño:</span> <?= $propiedad['bano'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Cocina:</span> <?= $propiedad['cocina'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Pisos:</span> <?= $propiedad['nro_piso'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Patio:</span> <?= $propiedad['patio'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Gastos Comunes:</span> <?= $propiedad['gastos_comunes'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Garaje:</span> <?= $propiedad['garaje'] ?></p>
                                </div>
                            </div>
                        <?php } elseif ($propiedad['tipo'] == "campo") { ?>
                            <div class="detalless">
                                <div class="detalles-info">
                                    <p><span>ID Propiedad:</span> <?= $propiedad['id'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Superficie:</span> <?= $propiedad['m²'] ?> m²</p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Tipo:</span> <?= $propiedad['tipo'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Precio:</span>
                                        <?php
                                        if ($propiedad['moneda'] == "dolares") {
                                            echo "US $$propiedad[precio]";
                                        } else {
                                            echo "UYU $$propiedad[precio]";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Servicios:</span> <?= $propiedad['servicios'] ?></p>
                                </div>
                                <?php if ($propiedad['mejoras'] == "no") { ?>
                                    <div class="detalles-info">
                                        <p><span>Mejoras:</span> <?= $propiedad['mejoras'] ?></p>
                                    </div>
                                <?php } else { ?>
                                    <div class="detalles-info">
                                        <p><span>Mejoras:</span> <?= $propiedad['mejoras'] ?></p>
                                    </div>
                                    <div class="detalles-info">
                                        <p><span>Dormitorios:</span> <?= $propiedad['habitaciones'] ?></p>
                                    </div>
                                    <div class="detalles-info">
                                        <p><span>Operación:</span> <?= $propiedad['venta_alquilar'] ?></p>
                                    </div>
                                    <div class="detalles-info">
                                        <p><span>Baño:</span> <?= $propiedad['bano'] ?></p>
                                    </div>
                                    <div class="detalles-info">
                                        <p><span>Cocina:</span> <?= $propiedad['cocina'] ?></p>
                                    </div>

                                    <?php
                                    if ($propiedad['nro_piso'] == 0) {
                                        echo "<p></p>";
                                    } else {
                                    ?>
                                        <div class="detalles-info">
                                            <p>Pisos:<?= $propiedad['nro_piso'] ?></p>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <div class="detalles-info">
                                        <p><span>Patio:</span> <?= $propiedad['patio'] ?></p>
                                    </div>
                                    <div class="detalles-info">
                                        <p><span>Saneamiento:</span> <?= $propiedad['saneamiento'] ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <div class="detalless">
                                <div class="detalles-info">
                                    <p><span>ID Propiedad:</span> <?= $propiedad['id'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Superficie:</span> <?= $propiedad['m²'] ?> m²</p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Tipo:</span> <?= $propiedad['tipo'] ?></p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Precio:</span>
                                        <?php
                                        if ($propiedad['moneda'] == "dolares") {
                                            echo "US $$propiedad[precio]";
                                        } else {
                                            echo "UYU $$propiedad[precio]";
                                        }
                                        ?>
                                    </p>
                                </div>
                                <div class="detalles-info">
                                    <p><span>Servicios:</span> <?= $propiedad['servicios'] ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>

        <?php endforeach; ?>

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

</body>
<script src="../js/arriba.js"></script>
<script src="../js/app2.js"></script>

</html>