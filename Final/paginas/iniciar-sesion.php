<?php
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['permisos']=='inmobiliario'){
    header("Location: ../backoffice/indexadmin.php");
    }else if ($_SESSION['permisos']=='operador'){
        header("Location: ../backoffice/indexoperador.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Jorge Cabrera</title>
    <meta name="author" content="Coding Black">
    <meta name="description" content="Iniciar sesion">
    <link rel="icon" href="../img/logos/logo_chico.jpg">
    <link rel="stylesheet" href="../css/esqueleto.css">
    <link rel="stylesheet" href="../css/style-iniciar-sesion.css">
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

        <h2 class="frase">INICIAR SESION</h2>
    </header>
    <img class="ir-arriba" src="../img/iconos/arriba.png" alt="">
    <main>
        <section class="iniciar">
            <div class="contenedor">
                <div class="cont-formu">
                    <form action="../php/login.php" method="POST">
                        <input type="text" name="nickname" pattern="[A-Za-z0-9_-]{1,15}" class="info datos"
                            placeholder="Ingrese su Nombre de Usuario" required>
                        <br>
                        <input type="password" name="pass" pattern="[A-Za-z0-9_-]{1,15}" class="info datos"
                            placeholder="Ingrese su Contraseña" required>
                        <br>

                        <br>
                        <a href="../php/restablecer.php" class="olvidar">¿Olvidaste la Contraseña?</a>
                        <br>
                        <p class="text-formu">No soy un robot<input type="checkbox" value="verificar" id="Verificar" required></p>
                        <br>
                        <input type="submit" value="INGRESAR" name="login" class="boton">
                    </form>
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

</html>