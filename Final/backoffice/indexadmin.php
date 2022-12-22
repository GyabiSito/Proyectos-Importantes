<?php
session_start();
if (isset($_SESSION['usuario'])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Backoffice - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../css/esqueleto.css">
        <link rel="stylesheet" href="css/index.css">
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
                        <li> PROPIEDADES

                        </li>
                    </a>
                    <a href="../paginas/enviar-solicitud.html">
                        <li> ENVIAR SOLICITUD </li>
                    </a>
                    <a href="mailto:jorcab11@hotmail.com">
                        <li> CONTACTANOS </li>
                    </a>
                </ul>
            </div>

            <nav>
                <ul class="ul-nav">
                    <li class="hover"><a href="#"><img src="../img/iconos/globo.png"></a></li>
                    <li class="hover"><a href="../index.php">INICIO</a></li>
                    <li class="hover"><a href="../paginas/propiedades.php">PROPIEDADES</a>
                        <ul>
                            <li class="hover"><a href="../php/tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                            <li class="hover"><a href="../php/tipos-prop/campos.php">CAMPOS</a></li>
                            <li class="hover"><a href="../php/tipos-prop/casas.php">CASAS</a></li>
                            <li class="hover"><a href="../php/tipos-prop/terrenos.php">TERRENOS</a></li>
                        </ul>
                    </li>
                    <li><a href="mailto:jorcab11@hotmail.com">CONTACTANOS</a></li>
                    <li>
                        <a href="redirect.php">
                            <input type="submit" value="BACKOFFICE" style="padding: 15px 50px;background-color: var(--color-uno); font-weight: 600; border:1px solid #e6e6e6; border-radius:40px; color: var(--blanco); cursor: pointer; margin-top: -20vw;" class="iniciar">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <img class="ir-arriba" src="../img/iconos/arriba.png" alt="">

        <main>
            <br>
            <center>
                <section class="backoffice">
                    <div class="contenedor">
                        <div class="cont-formu">
                            <h1 class="titulos">Bienvenido</h1>
                            <a href="crud/agregar/agregarpropiedad.php"><input class="boton" type="submit" value="Agregar Propiedad"></a>
                            <a href="crud/verpropiedad.php"><input type="submit" class="boton" value="Ver Propiedades"></a>
                            <a href="agregarusuario.php"><input type="submit" class="boton" value="Registrar Usuario"></a>
                            <a href="verusuario.php"><input type="submit" class="boton" value="Ver Registros"></a>
                            <a href="usuarios.php"><input type="submit" value="Usuarios del Sistema" class="boton" id=""></a>
                            <a href="cerrarsesion.php"><input type="submit" value="Cerrar Sesion" class="boton" id=""></a>
                        </div>
                    </div>
                </section>
            </center>


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
<?php

} else {
    echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
    echo '<br>' . "<center><p style='color: red'>Debe iniciar sesión para poder ingresar a esta página</p></center>" . '<br>';
?>
    <br>
    <center>
        <a href="../" style='color: red'>Volver a página principal</a>
    </center>
    <br>
<?php } ?>