<?php
include '../php/conexion.php';
session_start();
$msg = '';
$ci=$_GET['id'];
if($ci==$_SESSION['id_ci']){
?><center>
<a href="redirect.php" style='color: red'>Volver al backoffice</a>
</center>
<?php
    echo '<br>' . "<center><p style='color: red'>No te podes borrar a vos mismo</p></center>" . '<br>';    exit();
}
if (isset($_SESSION['usuario'])) {
    if (isset($_GET['id'])) {
        if (!$ci) {
            exit('El usuario seleccionado');
        }
        if (isset($_GET['confirm'])) {
            if ($_GET['confirm'] == 'yes') {
                $stmt = $pdo->prepare("DELETE FROM inmobiliario WHERE ci=$ci");
                $stmt2=$pdo->prepare("DELETE FROM cuenta WHERE id_ci=$ci");
                $stmt->execute();
                $stmt2->execute();
                $ciuser = $_SESSION['id_ci'];
                $datos = $pdo->prepare("INSERT INTO sesion (id_ci, accion) VALUES($ciuser, 'Eliminó un usuario con CI: $ci')");
                $datos->execute();
                header ('location: usuarios.php');

            }
        }

    } else {
        exit('No existe el usuario');
    }

?>
 <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ELIMINAR VIDEO - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../css/esqueleto.css">
        <script src="../js/jquery-latest.js"></script>
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
                <div class="contenedor-logo">
                    <a href="../../index.php"><img class="logo" src="../../img/logos/logo.jpg"></a>
                </div>
                <ul class="ul-nav">
                    <li><a href="../../index.php">INICIO</a></li>
                    <li><a href="../../paginas/propiedades.php">PROPIEDADES</a>
                        <ul>
                            <li><a href="../../php/tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                            <li><a href="../../php/tipos-prop/campos.php">CAMPOS</a></li>
                            <li><a href="../../php/tipos-prop/casas.php">CASAS</a></li>
                            <li><a href="../../php/tipos-prop/terrenos.php">TERRENOS</a></li>
                        </ul>
                    </li>
                    <li><a href="mailto:jorcab11@hotmail.com ">CONTACTANOS</a></li>
                </ul>
                <div class="contenedor-iniciar inpu">
                    <a href="redirect.php"><input type="submit" value="BACKOFFICE" id="iniciar"></a>
                </div>
                <div class="contenedor-idioma inpu">
                    <a href="#"><img src="../../img/iconos/globo.png"></a>
                </div>
            </nav>
        </header>
        <img class="ir-arriba" src="../../img/iconos/arriba.png" alt="">
        <main>
            <section>
                <h2 class="titulo">Eliminar "CI:<?= $ci ?>"</h2>
                <div class="contenedor">
                    <div class="ocultar">
                        <?php if ($msg) : ?>
                            <p><?= $msg ?></p>
                            
                        <?php else : ?>
                            <p class="subtitulo">¿Confirma que desea eliminar el Usuario?</p>
                            <div class="yesno">
                                <a href="eliminarusu.php?id=<?= $ci?>&confirm=yes">Si</a>
                                <a href="usuarios.php"?>No</a>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            </section>
            <style>
                .titulo {
                    text-align: center;
                    padding: 20px 0;
                    font-size: 40px;
                    color: var(--color-cuatro);
                }

                .ocultar .yesno {
                    justify-content: center;
                    display: flex;
                }
                .ocultar a{
                    padding: 10px 40px;
                    background: var(--color-cinco);
                    color: var(--negro);
                    border: 1px solid var(--color-tres);
                    cursor: pointer;
                    font-size: 20px;
                    margin: 10px;
                    font-weight: 800;
                    align-items: center;
                    border-radius: 20px;
                }
                .ocultar a:hover {
                    background-color: var(--verde1);
                }
                .ocultar .yesno a {
                    padding: 10px 20px;
                    background: var(--color-cinco);
                    color: var(--negro);
                    border: 1px solid var(--color-tres);
                    cursor: pointer;
                    font-size: 20px;
                    margin: 10px;
                    font-weight: 800;
                    align-items: center;
                    border-radius: 20px;
                }

                .ocultar .yesno a:hover {
                    background-color: var(--verde1);
                }
                
            </style>
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