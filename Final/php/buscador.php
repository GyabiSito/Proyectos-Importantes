<?php
include_once "conexion.php";
if (isset($_GET['Inicie_busqueda'])) {
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int) $_GET['page'] : 1;
$records_per_page = 12;
$stmt = $pdo->prepare('SELECT  propiedad.id, propiedad.nombre, propiedad.tipo,propiedad.venta_alquilar, propiedad.precio, propiedad.moneda, imagenes.url FROM propiedad JOIN imagenes ON propiedad.id = imagenes.id_propiedades WHERE propiedad.disponibilidad = "si" AND imagenes.destacada = 1  AND propiedad.descripcion LIKE "%":busquedaa"%"  ORDER BY propiedad.id ASC LIMIT :current_page, :records_per_page ');
$stmt->BindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->BindValue('records_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->BindParam(':busquedaa', $_GET['Inicie_busqueda']);
$stmt->execute();
$propiedades = $stmt->fetchall(PDO::FETCH_ASSOC);
$stmt = $pdo->prepare('SELECT url FROM imagenes LIMIT 1');
$stmt->execute();
$imagenes = $stmt->fetchAll();
$num_contacts = $pdo->query('SELECT count(*) FROM propiedad')->fetchColumn();
} else {
    exit('No existen propiedades que coincidan con tu busqueda');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jorge Cabrera - Busqueda</title>
    <meta name="author" content="Coding Black">
    <meta name="description" content="">
    <link rel="icon" href="../img/logos/logo_chico.jpg">
    <link rel="stylesheet" href="style-inicio.css">
    <script src="../js/jquery-latest.js"></script>
    <script src="../js/arriba.js"></script>
    <link rel="stylesheet" href="../css/esqueleto.css">
    <link rel="stylesheet" href="../css/style-filtros.css">
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


        <section class="contenedor-prpiedades-destacadas">
            <div class="contenedor">
                <h2 class="titulos">PROPIEDADES ENCONTRADAS</h2>
                <div class="propiedades-dest-cont">
                    <?php foreach ($propiedades as $propiedad) : ?>
                        <div class="prop-dest">
                            <a id="link-prop" href="../paginas/propiedad-especifica.php?id=<?= $propiedad['id'] ?>">
                                <?php if ($propiedad['venta_alquilar'] == "venta") {
                                    echo "<p class='venta_alquiler'>VENTA</p>";
                                } else {
                                    echo "<p class='venta_alquiler'>ALQUILER</p>";
                                }
                                ?>
                                <img src="../backoffice/crud/agregar/<?= $propiedad['url'] ?>" height="200px" alt="">
                                <p class="texto-prop"><?= $propiedad['nombre'] ?></p>
                                <p class="texto-prop">Tipo: <?= $propiedad['tipo'] ?></p>
                                <p class="texto-prop">
                                    <div class="monedaa">
                                        <?php
                                        if ($propiedad['moneda'] == "dolares") {
                                        ?>
                                            <div class="texto-mon">
                                                <div class="cont-mon">
                                                    <div class="cont-es">
                                                        <p class='moneda texto-prop'>USD $<?= $propiedad['precio'] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        } else {
                                        ?>
                                            <div class="texto-mon">
                                                <div class="cont-mon">
                                                    <div class="cont-es">
                                                        <p class='moneda texto-prop'>UYU $<?= $propiedad['precio'] ?></p>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        }
                                        ?>
                                    </div>
                                </p>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="read">
                    <div class='pagination'>
                        <?php if ($page > 1) : ?>
                            <a href="buscador.php?page=<?= $page - 1 ?>">PÁGINA ANTERIOR</i></a>
                        <?php endif; ?>
                        <?php if ($page * $records_per_page < $num_contacts) : ?>
                            <a href="buscador.php?page=<?= $page + 1 ?>">SIGUIENTE PÁGINA</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

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