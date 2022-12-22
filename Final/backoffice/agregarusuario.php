<?php
session_start();
include '../php/conexion.php';
if (isset($_SESSION['usuario'])) {
    if (isset($_POST['register'])) {
        $gmail = isset($_POST["gmail"]) ? $_POST["gmail"] : NULL;
        $nickname = isset($_POST["nickname"]) ? $_POST["nickname"] : NULL;
        $pass = isset($_POST["pass"]) ? $_POST["pass"] : NULL;
        $pass2 = isset($_POST["passr"]) ? $_POST["passr"] : NULL;
        $permisos = isset($_POST["permiso"]) ? $_POST["permiso"] : NULL;

        $ci = isset($_POST["ci"]) ? $_POST["ci"] : NULL;
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : NULL;
        $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : NULL;
        $contacto = isset($_POST["contacto"]) ? $_POST["contacto"] : NULL;

        $query3 = $pdo->prepare("SELECT ci FROM inmobiliario WHERE ci=?");
        $query3->execute([$ci]);
        $registros = $query3->rowCount();

        $query4 = $pdo->prepare("SELECT gmail  FROM cuenta WHERE gmail =?");
        $query4->execute([$gmail]);
        $registros2 = $query4->rowCount();
        $query5 = $pdo->prepare("SELECT nickname FROM cuenta WHERE  nickname=?");
        $query5->execute([$nickname]);
        $registros3 = $query5->rowCount();

        if ($registros > 0 || $registros2 > 0 || $registros3 > 0 ) {
?>
            <script>
                alert("Esta Cédula, Gmail o Nickname ya existe en el sistema");
            </script>
            <?php
        } else {
            if ($pass == $pass2) {
                // Validar Pass Encriptada

                $hash = password_hash("$pass", PASSWORD_DEFAULT, [15]);

                if (password_verify($pass, $hash)) {

                    //Ingreso de datos
                    $query2 = $pdo->prepare("INSERT INTO inmobiliario (ci, nombre, apellido, contacto) VALUES(:ci,:nombre,:apellido,:contacto)");
                    $query2->bindParam(':ci', $ci);
                    $query2->bindParam(':nombre', $nombre);
                    $query2->bindParam(':apellido', $apellido);
                    $query2->bindParam(':contacto', $contacto);

                    $query2->execute();

                    if ($query2 = true) { //Aca valida si se ejecuto correctamente la query de mysql
                        $query = $pdo->prepare("INSERT INTO cuenta (gmail, nickname, pass,permisos,id_ci) VALUES(:gmail,:nickname,:pass,:permisos,:ci)");
                        $query->bindParam(':ci', $ci);
                        $query->bindParam(':gmail', $gmail);
                        $query->bindParam(':nickname', $nickname);
                        $query->bindParam(':pass', $hash);
                        $query->bindParam(':permisos', $permisos);
                        $query->execute();
                    } else {
            ?>
                        <script>
                            alert("Datos Incorrectos");
                        </script>
                    <?Php
                    }
                    $ciuser = $_SESSION['id_ci'];
                    $datos = $pdo->prepare("INSERT INTO sesion (id_ci, accion) VALUES($ciuser, 'Agregó un usuario con CI: $ci')");
                    $datos->execute();
                    ?>
                    <script>
                        alert("Usuario Agregado");
                    </script>
                <?php
                } else {
                ?>
                    <script>
                        alert("Datos Incorrectos");
                    </script>
    <?Php
                }
            }
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar un Usuario - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../css/esqueleto.css">
        <link rel="stylesheet" href="css/agregarusu.css">
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

        <img class="ir-arriba" src="../img/iconos/arriba.png">

        <main>
            <form method="POST" action=''>
                <section class="informacion">
                    <h2 class="titulo">AGREGAR USUARIO</h2>
                    <center>
                        <div class="contenedor">
                            <div class="formu-info">
                                <div class="cont-formu">
                                    <input type="text" name="ci" placeholder="Ingresa tu CI" pattern="[0-9]{8}" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <input type="text" name="nombre" placeholder="Ingrese su Nombre" pattern="[A-Za-z]{1,15}" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <input type="text" name="apellido" placeholder="Ingrese su Apellido" pattern="[A-Za-z]{1,15}" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <input class="campos" type="text" name="contacto" placeholder="Ingresa su Método de Contacto" pattern="[0-9]{9}" required>
                                </div>
                                <div class="cont-formu">
                                    <input class="campos" type="email" name="gmail" placeholder="Ingresa su Gmail" required>
                                </div>
                                <div class="cont-formu">
                                    <input class="campos" type="text" name="nickname" placeholder="Ingresa tu usuario" required>
                                </div>
                                <div class="cont-formu">
                                    <input class="campos" type="password" name="pass" placeholder="Ingresa tu Contraseña" required>
                                </div>
                                <div class="cont-formu">
                                    <input class="campos" type="password" name="passr" placeholder="Escribe la contraseña de nuevo" required>
                                </div>
                                <div class="cont-formu">
                                    <select class="campos" name="permiso" id="permisos">
                                        <option value=""></option>
                                        <option name="permiso" value="inmobiliario">Inmobiliario</option>
                                        <option name="permiso" value="operador">Operador</option>
                                    </select>
                                </div>

                                <div class="cont-formu">
                                    <input type="submit" name="register" value="Agregar Usuario" class="campos botones">
                                </div>
                                <a class="subtitulo" href="../paginas/iniciar-sesion.php">Ingresar Sesión Con Nuevo Usuario</a>
                            </div>
                        </div>
                    </center>

                </section>

            </form>
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