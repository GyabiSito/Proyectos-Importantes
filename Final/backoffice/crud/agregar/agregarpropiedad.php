<?php
session_start();
include_once "conexion.php";
include_once "config.php";
if (isset($_SESSION['usuario'])) {
    if (isset($_POST['submitt'])) {
        if (isset($_REQUEST['back'])) {
            if (isset($_SESSION['usuario'])) {
                if ($_SESSION['permisos'] === 'operador') {
                    header('location: ../../indexoperador.php');
                }
                else if ($_SESSION['permisos'] === 'inmobiliario') {
                    header('location: ../../indexadmin.php');
                }
            }
        }
        
        //-----SUBIR DATOS A LA TABLA "PROPIEDAD"-----------

        $query2 = $pdo->prepare("INSERT INTO propiedad (moneda,precio, venta_alquilar,nombre,descripcion,tipo,mejoras,ascensor,nro_piso,bano,servicios,cocina,saneamiento,habitaciones,m²,fecha_publicacion,gastos_comunes, destacado,disponibilidad,garaje) VALUES(:moneda,:precio, :venta_alquilar,:nombre,:descripcion,:tipo,:mejoras,:ascensor,:nro_piso,:bano,:servicios,:cocina,:saneamiento,:habitaciones,:metros,:fecha,:gastos,:destacado,'si',:garaje)");
        $query2->bindParam(':moneda', $_POST["monedaup"]);
        $query2->bindParam(':precio', $_POST["precioup"]);
        $query2->bindParam(':venta_alquilar', $_POST["ventalquiup"]);
        $query2->bindParam(':nombre', $_POST["nombre"]);
        $query2->bindParam(':descripcion', $_POST["descripionup"]);
        $query2->bindParam(':tipo', $_POST["tipoup"]);
        $query2->bindParam(':mejoras', $_POST["mejorasup"]);
        $query2->bindParam(':ascensor', $_POST["ascensorup"]);
        $query2->bindParam(':nro_piso', $_POST["nro_pisoup"]);
        $query2->bindParam(':bano', $_POST["banoup"]);
        $query2->bindParam(':servicios', $_POST["serviciosup"]);
        $query2->bindParam(':cocina', $_POST["cosinaup"]);
        $query2->bindParam(':saneamiento', $_POST["saneamientoup"]);
        $query2->bindParam(':habitaciones', $_POST["habitacionesup"]);
        $query2->bindParam(':metros', $_POST["mcuadraup"]);
        $query2->bindParam(':fecha', $_POST["fechaup"]);
        $query2->bindParam(':gastos', $_POST["gastosup"]);
        $query2->bindParam(':destacado', $_POST["destacarup"]);
        $query2->bindParam(':garaje', $_POST["garaje"]);
        $query2->execute();
        $lastInsertId = $pdo->lastInsertId();

        //------SUBIR VIDEOS -------
        $name = $_FILES['file']['name'];
        if ($name == true) {
            $maxsize = 52428800; // 5MB


            $target_dir = "videos/";
            $target_file = $target_dir . $_FILES["file"]["name"];

            // Seleccionar tipo de archivo
            $videoFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Extensiones de archivo válidas
            $extensions_arr = array("mp4", "avi", "3gp", "mov", "mpeg");

            // Comprobar extensión
            if (in_array($videoFileType, $extensions_arr)) {

                // Comprobar el tamaño del archivo
                if (($_FILES['file']['size'] >= $maxsize) || ($_FILES["file"]["size"] == 0)) {
                    echo '<br>' . "<center><p style='color: red'>Archivo demasiado grande. El archivo debe tener menos de 50 MB.</p></center>" . '<br>';
?>
                    <br>
                    <center>
                        <a href="agregarpropiedad.php" style='color: red'>Volver a Agregar</a>
                    </center>
                    <br>
                <?php
                } else {
                    //Subir
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                        // Insertar registro
                        $query = "INSERT INTO videos (id_propiedades,nombre,url) VALUES('" . $lastInsertId . "','" . $name . "','" . $target_file . "')";

                        mysqli_query($con, $query);
                    }
                }
            } else {
                ?>
                <script>
                    alert("Extensión de archivo inválida.");
                </script>
        <?php
            }
        }

        //----------SUBIR IMÁGENES----------


        //count cuenta todos los elementos de un array
        //$_FILES es un array asociativo con elementos subidos al script en curso a traves del metodo POST
        $countfiles = count($_FILES['files']['name']);
        $query = "INSERT INTO imagenes (id_propiedades,url, nombre) VALUES (?, ?, ?)";
        $statment = $pdo->prepare($query);


        for ($i = 0; $i < $countfiles; $i++) {
            $filename = $_FILES['files']['name'][$i]; //var donde gaurda el nombre del archivo
            $target_file = 'uploads/' . $filename; //lugar donde se sube el archivo
            $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); //devuelve informacion de la ruta de un archivo / PATHINFO_EXTENSION guarda la extension del archivo
            $file_extension = strtolower($file_extension); //convierte strings a minusculas
            $valid_extension = array("png", "jpeg", "jpg");

            //in_array comprueba si un valor existe en un array
            if (in_array($file_extension, $valid_extension)) {
                //move_uploaded_file mueve un archivo subido a una nueva ubicación
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)) {
                    $statment->execute(array($lastInsertId, $target_file, $filename));
                }
            }
        }
        //----------SUBIR IMAGEN DESTACADA----------
        if (isset($_FILES['filess']['name'])) {
            $countfiless = count($_FILES['filess']['name']);
            $query4 = "INSERT INTO imagenes (id_propiedades,url, nombre,destacada) VALUES (?, ?, ?,1)";
            $statment4 = $pdo->prepare($query4);
            for ($i = 0; $i < $countfiless; $i++) {
                if (isset($_FILES['filess']['name'][$i])) {
                    $filename = $_FILES['filess']['name'][$i]; //var donde gaurda el nombre del archivo
                    $target_file = 'uploads/' . $filename; //lugar donde se sube el archivo
                    $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); //devuelve informacion de la ruta de un archivo / PATHINFO_EXTENSION guarda la extension del archivo
                    $file_extension = strtolower($file_extension); //convierte strings a minusculas
                    $valid_extension = array("png", "jpeg", "jpg");

                    //in_array comprueba si un valor existe en un array
                    if (in_array($file_extension, $valid_extension)) {
                        //move_uploaded_file mueve un archivo subido a una nueva ubicación
                        if (move_uploaded_file($_FILES['filess']['tmp_name'][$i], $target_file)) {
                            $statment4->execute(array($lastInsertId, $target_file, $filename));
                        }
                    }
                }
            }
        }


        //--SUBIR UBICACION--

        $ubica = $pdo->prepare("INSERT INTO ubicacion(latitud, longitud, calle, departamento, ruta, barrio, nro_puerta, ciudad, id_propiedades) VALUES(:latitud, :longitud, :calle, :departamento, :ruta, :barrio, :nro_puerta, :ciudad, :id_propiedades)");
        $ubica->bindParam(':id_propiedades', $lastInsertId);
        $ubica->bindParam(':latitud', $_POST["txtLat"]);
        $ubica->bindParam(':longitud', $_POST["txtLng"]);
        $ubica->bindParam(':calle', $_POST["Calle"]);
        $ubica->bindParam(':departamento', $_POST["Dpto"]);
        $ubica->bindParam(':ruta', $_POST["Ruta"]);
        $ubica->bindParam(':barrio', $_POST["Barrio"]);
        $ubica->bindParam(':nro_puerta', $_POST["Npuerta"]);
        $ubica->bindParam(':ciudad', $_POST["Ciudad"]);

        $ubica->execute();

        //--SUBIR ACCION--
        $ci = $_SESSION['id_ci'];
        $datos = $pdo->prepare("INSERT INTO sesion (id_propiedad, id_ci, accion) VALUES($lastInsertId, $ci, 'Subió una propiedad')");
        $datos->execute();
        ?>
        <script>
            alert("¡Propiedad Subida con Éxito!");
        </script>
    <?php
    }

    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar Propiedad - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../../../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../../../css/esqueleto.css">
        <link rel="stylesheet" href="../../css/agregarpropiedad.css">
        <script src="../../../js/jquery-latest.js"></script>
        <script src="https://kit.fontawesome.com/1878ede693.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
        <script src="script.js"> </script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
        <script src="scriptmapa.js"> </script>
    </head>

    <body onload="initialize();">
        <header>
            <div class="icono-menu">
                <img src="../../../img/iconos/menu.png" id="icono-menu">
            </div>

            <div class="cont-menu active" id="menu">
                <ul>
                    <a href="../../../index.php">
                        <li> INICIO </li>
                    </a>
                    <a href="../../../paginas/propiedades.php">
                        <li> PROPIEDADES

                        </li>
                    </a>
                    <a href="../../../paginas/contactanos.html">
                        <li> CONTACTANOS </li>
                    </a>
                </ul>
            </div>

            <nav>
                <ul class="ul-nav">
                    <li class="hover"><a href="#"><img src="../../../img/iconos/globo.png"></a></li>
                    <li class="hover"><a href="../../../index.php">INICIO</a></li>
                    <li class="hover"><a href="../../../paginas/propiedades.php">PROPIEDADES</a>
                        <ul>
                            <li class="hover"><a href="../../../php/tipos-prop/apartamento.php">APARTAMENTOS</a></li>
                            <li class="hover"><a href="../../../php/tipos-prop/campos.php">CAMPOS</a></li>
                            <li class="hover"><a href="../../../php/tipos-prop/casas.php">CASAS</a></li>
                            <li class="hover"><a href="../../../php/tipos-prop/terrenos.php">TERRENOS</a></li>
                        </ul>
                    </li>
                    <li><a href="../../../paginas/contactanos.html">CONTACTANOS</a></li>
                    <li>
                        <a href="../../redirect.php">
                            <input type="submit" value="BACKOFFICE" name="back" style="padding: 15px 50px;background-color: var(--color-uno); font-weight: 600; border:1px solid #e6e6e6; border-radius:40px; color: var(--blanco); cursor: pointer; margin-top: -20vw;" class="iniciar">
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <img class="ir-arriba" src="../../../img/iconos/arriba.png" alt="">

        <main>

            <form method='post' action='' enctype="multipart/form-data">
                <h2 class="titulo">AGREGAR PROPIEDADES</h2>
                <section class="informacion">
                    <div class="contenedor">
                        <h2 class="titulos">Sobre la Propiedad</h2>
                        <div class="formulario">
                            <div class="formu-info">
                                <div class="cont-formu">
                                    <label class="text-formu">Nombre de la Propiedad</label>
                                    <input type="text" name="nombre" required class="campos">
                                </div>

                                <div class="cont-formu">
                                    <label class="text-formu">Publicar como:</label>
                                    <select name="ventalquiup" class="campos">
                                        <option value=""></option>
                                        <option name="ventalquiup" value="venta">VENTA</option>
                                        <option name="ventalquiup" value="alquiler">ALQUILER</option>
                                    </select>
                                </div>

                                <div class="cont-formu">
                                    <label class="text-formu">Tipo de Moneda</label>
                                    <select name="monedaup" class="campos">
                                        <option value=""></option>
                                        <option name="monedaup" value="dolares">DOLAR</option>
                                        <option name="monedaup" value="pesos">PESOS</option>
                                    </select>
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Precio</label>
                                    <input type="number" name="precioup" min="1" pattern="[0-9]" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Tipo de Propiedad</label>
                                    <select name="tipoup" class="campos">
                                        <option value=""></option>
                                        <option name="tipoup" value="casa">CASA</option>
                                        <option name="tipoup" value="apartamento">APARTAMENTO</option>
                                        <option name="tipoup" value="terreno">TERRENO</option>
                                        <option name="tipoup" value="campo">CAMPO</option>
                                    </select>
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Número de piso</label>
                                    <input type="number" name="nro_pisoup" min="0" pattern="[0-9]" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Metros cuadrado</label>
                                    <input type="number" name="mcuadraup" min="1" pattern="[0-9]" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Baño</label>
                                    <input type="number" name="banoup" min="0" pattern="[0-9]" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Cocina</label>
                                    <input type="number" name="cosinaup" min="0" pattern="[0-9]" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Número de habitaciones</label>
                                    <input type="number" min="0" pattern="[0-9]" name="habitacionesup" class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Fecha de publicación</label>
                                    <input type="date" name="fechaup" class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">¿Desea destacar la propiedad?</label>
                                    <input type="radio" name="destacarup" value="si" checked class="boolean otro">
                                    <label for="">Si</label>
                                    <input type="radio" name="destacarup" value="no" class="boolean otro">
                                    <label for="">No</label>
                                </div>
                            </div>
                            <div class="formu-boolean">
                                <div class="cont-bolean">
                                    <label class="text-formu">Mejoras de la Propiedad</label>
                                    <input type="radio" name="mejorasup" value="si" checked class="boolean">
                                    <label class="text-radio">Si</label>
                                    <input type="radio" name="mejorasup" value="no" class="boolean">
                                    <label class="text-radio">No</label>
                                </div>

                                <div class="cont-bolean">
                                    <label class="text-formu">Ascensor</label>
                                    <input type="radio" name="ascensorup" value="si" checked class="boolean">
                                    <label class="">Si</label>
                                    <input type="radio" name="ascensorup" value="no" class="boolean">
                                    <label class="">No</label>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Gastos Comunes</label>
                                    <input type="radio" name="gastosup" value="si" checked class="boolean">
                                    <label for="">Si</label>
                                    <input type="radio" name="gastosup" value="no" class="boolean">
                                    <label for="">No</label>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Servicios</label>
                                    <input type="radio" name="serviciosup" value="si" checked class="boolean">
                                    <label class="">Si</label>
                                    <input type="radio" name="serviciosup" value="no" class="boolean">
                                    <label class="">No</label>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Saneamiento</label>
                                    <input type="radio" name="saneamientoup" value="si" checked class="boolean">
                                    <label class="">Si</label>
                                    <input type="radio" name="saneamientoup" value="no" class="boolean">
                                    <label class="">No</label>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Garaje</label>
                                    <input type="radio" name="garaje" value="si" checked class="boolean">
                                    <label class="">Si</label>
                                    <input type="radio" name="garaje" value="no" class="boolean">
                                    <label class="">No</label>
                                </div>

                            </div>
                            <div class="descri">
                                <div class="cont-formu">
                                    <label class="text-formu">Descripción</label>
                                    <textarea type="text" name="descripionup" class=" dato2" pattern="[A-Za-z]{1,300}" required></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="multimedia">
                    <div class="contenedor">
                        <h2 class="titulos">Archivos de Multimedia</h2>
                        <div class="cont-multi">
                            <div class="multimedia-info">
                                <h3 class="subtitulo">Imágenes</h3>
                                <input type='file' name='files[]' id="verImg" required multiple />
                                <a id="fileInput" onclick='$("#verImg").click()'> </a>
                                <!--"$" por el JQuery y el # por ID-->
                                <div id="frames"></div>
                                <!-- Este div esta vacio, el script agarra las imagenes que seleccionamos en el INPUT y las INSERTA dentro del DIV. Puede insertar muchas. Falta arreglar el CSS-->
                                <!--onchange="this.form.submit() Esto significa que al cambiar la opción del selector se enviará el formulario con la opción seleccionada. En este caso es el file input para enviar imágenes en este caso-->
                                <a onclick="fileInput.click();"> </a>
                                <!--onclick="fileInput.click() Acá justamente clickea el input, siendo representado el "+" como si de un input se tratase-->
                            </div>
                            <div class="multimedia-info">
                                <h3 class="subtitulo">Imágen Destacada</h3>
                                <input type='file' name='filess[]' id="verImgdesc" required multiple />
                                <a id="fileInputdes" onclick='$("#verImgdesc").click()'> </a>
                                <div id="framesdesc"></div>
                                <a onclick="fileInputdes.click();"> </a>
                            </div>
                            <div class="multimedia-info">
                                <h3 class="subtitulo">Videos</h3>
                                <!--Tengo que ver para que en el momento que seleccione el video, saque el iframe-->
                                <input type='file' id='videoUpload' name='file' multiple />
                                <div id="videoframes"></div>
                                <!--Arreglar estilos este div-->
                                <a name="videos[]" id="videoInput" onclick='$("#videoUpload").click()'> </a>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="ubicacion">
                    <div class="contenedor">
                        <h2 class="titulos">Ubicación de la Propiedad</h2>
                        <div class="ubica-info">
                            <div class="cont-ubica">
                                <label class="text-formu">Latitud</label>
                                <input class="campos" type="text" style="color:red" required id="txtLat" name="txtLat" value="-34.340215" readonly />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Longitud</label>
                                <input class="campos" type="text" style="color:red" required id="txtLng" name="txtLng" value="-56.711669" readonly />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Departamento</label>
                                <input class="campos" type="text" required name="Dpto" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Ciudad</label>
                                <input class="campos" type="text" required name="Ciudad" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Calle</label>
                                <input class="campos" type="text" required name="Calle" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Ruta</label>
                                <input class="campos" type="text" required name="Ruta" placeholder="en caso de no tener ruta poner 'no'" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Barrio</label>
                                <input class="campos" type="text" required name="Barrio" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">N° Puerta</label>
                                <input class="campos" type="number" min="0" required pattern="[0-9]" name="Npuerta" />
                            </div>
                        </div>
                        <p class="subtitulo">Arrastre el marcador para seleccionar su ubicacion</p>
                        <div id="ubica" style="width: auto; height: 500px;">
                        </div>
                    </div>

                    <!--
                        Los elementos que tienen el atributo "readonly" no se pueden modificar, 
                        pero su contenido SÍ se envía cuando el usuario envía el formulario.
                        Por contra, los elementos con el atributo "disabled" no sólo no se pueden modificar 
                        sino que NO se envían junto con el resto de campos del formulario. Por esta misma razón
                        apliqué un "readonly" en vez de un "disable", ya que a pesar de ser similares, al momento
                        de enviar el formulario los datos sí se enviarán en caso del "readonly", cosa que
                        con el "disabled" no pasa. Esto para que no se puedan modificar los campos por si
                        ocaciona algun error.
                    !-->
                </section>
                <input type="submit" value="SUBIR PROPIEDAD" name="submitt" class="boton">
            </form>
        </main>

        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Contactanos</h4>
                    <img src="../../../img/iconos/ubicacion.png">
                    <p class="textos-foo">Ubicación: Colonia, Uruguay.<br> Av Mihanovich 166 b </p>
                    <img src="../../../img/iconos/open.png">
                    <p class="textos-foo">Horario:</p>
                    <img src="../../../img/iconos/whatsapp.png">
                    <p class="textos-foo">Whatsapp: 092 029175</p>
                </div>
                <div class="content-foo">
                    <h4>Contactanos</h4>
                    <img src="../../../img/iconos/instagram.png">
                    <a href="http://www.instagram.com">
                        <p class="textos-foo">Instagram</p>
                    </a>
                    <img src="../../../img/iconos/gmail.png">
                    <a href="http://www.jorcab11@hotmail.com">
                        <p class="textos-foo">Gmail</p>
                    </a>
                    <img src="../../../img/iconos/facebook.png">
                    <a href="http://www.facebook.com">
                        <p class="textos-foo">Facebook</p>
                    </a>
                </div>
                <div class="content-foo">
                    <div id="empresa">
                        <h4>Empresas</h4>
                        <p class="textos-foo">Inmobiliaria</p>
                        <img src="../../../img/logos/logo.jpg">
                        <p class="textos-foo">Empresa desarrolladora</p>
                        <img src="../../../img/logos/codingblack.png" alt="">
                    </div>
                </div>
            </div>
            <h2 class="titulo-final">&copy; Coding Black | Ana Reyes, José Luis García, José Hernández, Matías González</h2>
        </footer>
    </body>

    <script src="../../../js/arriba.js"></script>
    <script src="../../../js/app2.js"></script>

    </html>

<?php

} else {
    echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
    echo '<br>' . "<center><p style='color: red'>Debe iniciar sesión para poder ingresar a esta página</p></center>" . '<br>';
?>
    <br>
    <center>
        <a href="../../../" style='color: red'>Volver a página principal</a>
    </center>
    <br>
<?php }
?>