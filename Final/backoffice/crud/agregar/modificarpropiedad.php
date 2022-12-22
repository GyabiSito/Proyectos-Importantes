<?php
include 'conexion.php';
include 'config.php';
session_start();
if (isset($_SESSION['usuario'])) {
    $msg = '';
    if (isset($_GET['id'])) {
        $stmt = $pdo->prepare('SELECT * FROM propiedad WHERE id=?');
        $stmt2 = $pdo->prepare('SELECT * FROM ubicacion WHERE id_propiedades=?');
        $stmt->execute([$_GET['id']]);
        $stmt2->execute([$_GET['id']]);
        $propiedad = $stmt->FETCH(PDO::FETCH_ASSOC);
        $ubicacion = $stmt2->FETCH(PDO::FETCH_ASSOC);
        if (!$propiedad) {
            exit('la propiedad no existe');
        } elseif (isset($_POST['submit'])) {
            $query2 = $pdo->prepare("UPDATE propiedad SET nombre=?,bano=?,descripcion=?,venta_alquilar=?,tipo=?,mejoras=?,ascensor=?,nro_piso=?,m²=?,gastos_comunes=?,cocina=?, habitaciones=?,servicios=?,fecha_publicacion=?,saneamiento=?,precio=?,moneda=?,garaje=?,destacado=?,patio=?  WHERE id=?");

            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
            $bano = isset($_POST['banoup']) ? $_POST['banoup'] : NULL;
            $desc = isset($_POST['descripionup']) ? $_POST['descripionup'] : NULL;
            $venta_alquiler = isset($_POST['ventalquiup']) ? $_POST['ventalquiup'] : NULL;
            $tipo = isset($_POST['tipoup']) ? $_POST['tipoup'] : NULL;
            $mejoras = isset($_POST['mejorasup']) ? $_POST['mejorasup'] : NULL;
            $destacado = isset($_POST['destacarup']) ? $_POST['destacarup'] : NULL;
            $ascensor = isset($_POST['ascensorup']) ? $_POST['ascensorup'] : NULL;
            $piso = isset($_POST['nro_pisoup']) ? $_POST['nro_pisoup'] : NULL;
            $metro = isset($_POST['mcuadraup']) ? $_POST['mcuadraup'] : NULL;
            $gastos = isset($_POST['gastosup']) ? $_POST['gastosup'] : NULL;
            $cocina = isset($_POST['cosinaup']) ? $_POST['cosinaup'] : NULL;
            $habitaciones = isset($_POST['habitacionesup']) ? $_POST['habitacionesup'] : NULL;
            $serv = isset($_POST['serviciosup']) ? $_POST['serviciosup'] : NULL;
            $fecha = isset($_POST['fechaup']) ? $_POST['fechaup'] : NULL;
            $sane = isset($_POST['saneamientoup']) ? $_POST['saneamientoup'] : NULL;
            $precio = isset($_POST['precioup']) ? $_POST['precioup'] : NULL;
            $moneda = isset($_POST['monedaup']) ? $_POST['monedaup'] : NULL;
            $garaje = isset($_POST['garaje']) ? $_POST['garaje'] : NULL;
            $patio = isset($_POST['patio']) ? $_POST['patio'] : NULL;

            $query2->execute([$nombre, $bano, $desc, $venta_alquiler, $tipo, $mejoras, $ascensor, $piso, $metro, $gastos, $cocina, $habitaciones, $serv, $fecha, $sane, $precio, $moneda, $garaje, $destacado, $patio, $_GET['id']]);

            $lastInsertId = $pdo->lastInsertId();

            $ubica = $pdo->prepare("UPDATE ubicacion SET latitud=?,longitud=?,calle=?,departamento=?,ruta=?,barrio=?,nro_puerta=?,ciudad=? WHERE id_propiedades=?");

            $lat = isset($_POST['txtLat']) ? $_POST['txtLat'] : NULL;
            $lon = isset($_POST['txtLng']) ? $_POST['txtLng'] : NULL;
            $calle = isset($_POST['Calle']) ? $_POST['Calle'] : NULL;
            $depto = isset($_POST['Dpto']) ? $_POST['Dpto'] : NULL;
            $ruta = isset($_POST['Ruta']) ? $_POST['Ruta'] : NULL;
            $barrio = isset($_POST['Barrio']) ? $_POST['Barrio'] : NULL;
            $Npuerta = isset($_POST['Npuerta']) ? $_POST['Npuerta'] : NULL;
            $ciudad = isset($_POST['Ciudad']) ? $_POST['Ciudad'] : NULL;

            $ubica->execute([$lat, $lon, $calle, $depto, $ruta, $barrio, $Npuerta, $ciudad, $_GET['id']]);

            $id = $_GET['id'];
            $maxsize = 52428800; // 5MB

            $name = $_FILES['file']['name'];
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
                    echo "Archivo demasiado grande. El archivo debe tener menos de 5 MB.";
                } else {
                    //Subir
                    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
                        // Insertar registro
                        $query = "INSERT INTO videos (id_propiedades,nombre,url) VALUES('" . $id . "','" . $name . "','" . $target_file . "')";

                        mysqli_query($con, $query);
                        echo "Subido con éxito.";
                    }
                }
            } else {
                echo "Extensión de archivo inválida.";
            }

            //----------SUBIR IMÁGENES----------

            $id = $_GET['id'];
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
                        $statment->execute(array($_GET['id'], $target_file, $filename));
                    }
                }
            }
            //----------SUBIR IMAGEN DESTACADA----------


            $query4 = "INSERT INTO imagenes (id_propiedades,url, nombre,destacada) VALUES (?, ?, ?,1)";
            $statment4 = $pdo->prepare($query4);


            for ($i = 0; $i < $countfiles; $i++) {
                $filename = $_FILES['filess']['name'][$i]; //var donde gaurda el nombre del archivo
                $target_file = 'uploads/' . $filename; //lugar donde se sube el archivo
                $file_extension = pathinfo($target_file, PATHINFO_EXTENSION); //devuelve informacion de la ruta de un archivo / PATHINFO_EXTENSION guarda la extension del archivo
                $file_extension = strtolower($file_extension); //convierte strings a minusculas
                $valid_extension = array("png", "jpeg", "jpg");

                //in_array comprueba si un valor existe en un array
                if (in_array($file_extension, $valid_extension)) {
                    //move_uploaded_file mueve un archivo subido a una nueva ubicación
                    if (move_uploaded_file($_FILES['filess']['tmp_name'][$i], $target_file)) {
                        $statment4->execute(array($_GET['id'], $target_file, $filename));
                    }
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
        <title>Listado de Propiedades - Gestión Inmobiliaria</title>
        <meta name="author" content="Coding Black">
        <meta name="description" content="Gestión Inmobiliaria">
        <link rel="icon" href="../../../img/logos/logo_chico.jpg">
        <link rel="stylesheet" href="../../../css/esqueleto.css">
        <link rel="stylesheet" href="../../css/agregarpropiedad.css">
        <script src="../../../js/jquery-latest.js"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-dFHYjTqEVLndbN2gdvXsx09jfJHmNc8&callback=initMap"></script>
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
                <h2 class="titulo">MODIFICAR LA PROPIEDAD "<?= $propiedad['nombre'] ?>"</h2>
                <section class="informacion">
                    <div class="contenedor">
                        <h2 class="titulos">Sobre la Propiedad</h2>
                        <div class="formulario">
                            <div class="formu-info">
                                <div class="cont-formu">
                                    <label class="text-formu">Nombre de la Propiedad</label>
                                    <input type="text" name="nombre"  required class="campos" value="<?= $propiedad['nombre'] ?>">
                                </div>

                                <div class="cont-formu">
                                    <label class="text-formu">Publicar como:</label>
                                    <select name="ventalquiup" class="campos">
                                        <option name="ventalquiup" value="<?= $propiedad['venta_alquilar'] ?>" selected hidden><?= $propiedad['venta_alquilar'] ?></option>
                                        <option name="ventalquiup" value="vender">VENTA</option>
                                        <option name="ventalquiup" value="alquilar">ALQUILER</option>
                                    </select>
                                </div>

                                <div class="cont-formu">
                                    <label class="text-formu">Tipo de Moneda</label>
                                    <select name="monedaup" class="campos">
                                        <option value="<?= $propiedad['moneda'] ?>" selected hidden><?= $propiedad['moneda'] ?></option>
                                        <option name="monedaup" value="dolares">DOLAR</option>
                                        <option name="monedaup" value="pesos">PESOS</option>
                                    </select>
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Precio</label>
                                    <input type="number" name="precioup" min="1" pattern="[0-9]" required class="campos" value="<?= $propiedad['precio'] ?>">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Tipo de Propiedad</label>
                                    <select name="tipoup" class="campos">
                                        <option value="<?= $propiedad['tipo'] ?>" selected hidden><?= $propiedad['tipo'] ?></option>
                                        <option name="tipoup" value="casa">CASA</option>
                                        <option name="tipoup" value="apartamento">APARTAMENTO</option>
                                        <option name="tipoup" value="terreno">TERRENO</option>
                                        <option name="tipoup" value="campo">CAMPO</option>
                                    </select>
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Número de piso</label>
                                    <input type="number" name="nro_pisoup" min="0" pattern="[0-9]" value="<?= $propiedad['nro_piso'] ?>" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Metros cuadrado</label>
                                    <input type="number" name="mcuadraup" min="1" pattern="[0-9]" value="<?= $propiedad['m²'] ?>" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Baño</label>
                                    <input type="number" name="banoup" min="0" pattern="[0-9]" value="<?= $propiedad['bano'] ?>" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Cocina</label>
                                    <input type="number" name="cosinaup" min="0" pattern="[0-9]" value="<?= $propiedad['cocina'] ?>" required class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Número de habitaciones</label>
                                    <input type="number" min="0" pattern="[0-9]" name="habitacionesup" value="<?= $propiedad['habitaciones'] ?>" class="campos">
                                </div>
                                <div class="cont-formu">
                                    <label class="text-formu">Fecha de publicación</label>
                                    <input type="date" name="fechaup" value="<?= $propiedad['fecha_publicacion'] ?>" class="campos">
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
                                    <?php if ($propiedad['mejoras'] == "si") : ?>
                                        <input type="radio" name="mejorasup" value="si" checked class="boolean">
                                        <label class="text-radio">Si</label>
                                        <input type="radio" name="mejorasup" value="no" class="boolean">
                                        <label class="text-radio">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['mejoras'] == "no") : ?>
                                        <input type="radio" name="mejorasup" value="si" class="boolean">
                                        <label class="text-radio">Si</label>
                                        <input type="radio" name="mejorasup" value="no" checked class="boolean">
                                        <label class="text-radio">No</label>
                                    <?php endif; ?>
                                </div>

                                <div class="cont-bolean">
                                    <label class="text-formu">Ascensor</label>
                                    <?php if ($propiedad['ascensor'] == "si") : ?>
                                        <input type="radio" name="ascensorup" value="si" checked class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="ascensorup" value="no" class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['ascensor'] == "no") : ?>
                                        <input type="radio" name="ascensorup" value="si" class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="ascensorup" value="no" checked class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Gastos Comunes</label>
                                    <?php if ($propiedad['gastos_comunes'] == "si") : ?>
                                        <input type="radio" name="gastosup" value="si" checked class="boolean">
                                        <label for="">Si</label>
                                        <input type="radio" name="gastosup" value="no" class="boolean">
                                        <label for="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['gastos_comunes'] == "no") : ?>
                                        <input type="radio" name="gastosup" value="si" class="boolean">
                                        <label for="">Si</label>
                                        <input type="radio" name="gastosup" value="no" checked class="boolean">
                                        <label for="">No</label>
                                    <?php endif; ?>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Servicios</label>
                                    <?php if ($propiedad['servicios'] == "si") : ?>
                                        <input type="radio" name="serviciosup" value="si" checked class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="serviciosup" value="no" class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['servicios'] == "no") : ?>
                                        <input type="radio" name="serviciosup" value="si" class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="serviciosup" value="no" checked class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Saneamiento</label>
                                    <?php if ($propiedad['saneamiento'] == "si") : ?>
                                        <input type="radio" name="saneamientoup" value="si" checked class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="saneamientoup" value="no" class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['saneamiento'] == "no") : ?>
                                        <input type="radio" name="saneamientoup" value="si" class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="saneamientoup" value="no" checked class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>
                                </div>
                                <div class=" cont-bolean">
                                    <label class="text-formu">Garaje</label>
                                    <?php if ($propiedad['garaje'] == "si") : ?>
                                        <input type="radio" name="garaje" value="si" checked class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="garaje" value="no" class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['garaje'] == "no") : ?>
                                        <input type="radio" name="garaje" value="si" class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="garaje" value="no" checked class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>
                                </div>

                                <div class=" cont-bolean">
                                    <label class="text-formu">Patio</label>
                                    <?php if ($propiedad['patio'] == "si") : ?>
                                        <input type="radio" name="patio" value="si" checked class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="patio" value="no" class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>

                                    <?php if ($propiedad['patio'] == "no") : ?>
                                        <input type="radio" name="patio" value="si" class="boolean">
                                        <label class="">Si</label>
                                        <input type="radio" name="patio" value="no" checked class="boolean">
                                        <label class="">No</label>
                                    <?php endif; ?>
                                </div>

                            </div>
                            <div class="descri">
                                <div class="cont-formu">
                                    <label class="text-formu">Descripción</label>
                                    <textarea type="text" name="descripionup" class=" dato2" value="<?= $propiedad['descripcion'] ?>" required><?= $propiedad['descripcion'] ?></textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="multimedia">
                    <div class="contenedor">
                        <h2 class="titulos">Archivos de Multimedia</h2>

                        <a href="../mostrarimgModi.php?id=<?= $propiedad['id'] ?>"><input type="" value="Ver imagenes y videos" name="" style=" margin-left: 30vw;  width: 25%;" class="boton"></a>

                        <div class="cont-multi">
                            <div class="multimedia-info">
                                <h3 class="subtitulo">Imágenes</h3>
                                <input type='file' name='files[]' id="verImg" multiple />
                                <a id="fileInput" onclick='$("#verImg").click()'> </a>
                                <!--"$" por el JQuery y el # por ID-->
                                <div id="frames"></div>
                                <!-- Este div esta vacio, el script agarra las imagenes que seleccionamos en el INPUT y las INSERTA dentro del DIV. Puede insertar muchas. Falta arreglar el CSS-->
                                <!--onchange="this.form.submit() Esto significa que al cambiar la opción del selector se enviará el formulario con la opción seleccionada. En este caso es el file input para enviar imágenes en este caso-->
                                <a onclick="fileInput.click();"> </a>
                                <!--onclick="fileInput.click() Acá justamente clickea el input, siendo representado el "+" como si de un input se tratase-->
                            </div>
                            <div class="multimedia-info">
                                <h3 class="subtitulo">Imágenes Destacada</h3>
                                <input type='file' name='filess[]' id="verImgdesc" multiple />
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
                                <input class="campos" type="text" style="color:red" id="txtLat" name="txtLat" value="<?= $ubicacion['latitud'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Longitud</label>
                                <input class="campos" type="text" style="color:red" id="txtLng" name="txtLng" value="<?= $ubicacion['longitud'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Departamento</label>
                                <input class="campos" type="text" name="Dpto" value="<?= $ubicacion['departamento'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Ciudad</label>
                                <input class="campos" type="text" name="Ciudad" value="<?= $ubicacion['ciudad'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Calle</label>
                                <input class="campos" type="text" name="Calle" value="<?= $ubicacion['calle'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Ruta</label>
                                <input class="campos" type="text" name="Ruta" value="<?= $ubicacion['ruta'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">Barrio</label>
                                <input class="campos" type="text" name="Barrio" value="<?= $ubicacion['barrio'] ?>" />
                            </div>

                            <div class="cont-ubica">
                                <label class="text-formu">N° Puerta</label>
                                <input class="campos" type="number" min="0" name="Npuerta" value="<?= $ubicacion['nro_puerta'] ?>" />
                            </div>
                        </div>
                        <p class="subtitulo">Arrastre el marcador para seleccionar su ubicacion</p>

                        <div id="ubica" style=" height: 500px;">

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
                <input type="submit" value="SUBIR PROPIEDAD" name="submit" class="boton">
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
<?php } ?>

<style>
    .info-toda-ubica {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
    }

    .info-ubica {
        width: 40%;
        height: 50px;
        text-align: center;
        font-size: 16px;
        border-bottom: 1px solid var(--gris);
    }

    .propiedad-ubica {
        padding: 30px 20px;
        width: 70%;
        height: 400px;
        max-width: 1000px;
        margin: 0 auto;
        overflow: hidden;
    }

    .propiedad-ubica iframe {
        width: 100%;
        height: 100%;
    }
</style>
<script>
    function initialize() {
        // Creating map object
        var map = new google.maps.Map(document.getElementById('ubica'), {
            zoom: 16,
            center: new google.maps.LatLng(<?= $ubicacion['latitud'] ?>, <?= $ubicacion['longitud'] ?>),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // creates a draggable marker to the given coords
        var vMarker = new google.maps.Marker({
            position: new google.maps.LatLng(<?= $ubicacion['latitud'] ?>, <?= $ubicacion['longitud'] ?>),
            draggable: true
        });

        // adds a listener to the marker
        // gets the coords when drag event ends
        // then updates the input with the new coords
        google.maps.event.addListener(vMarker, 'dragend', function(evt) {
            $("#txtLat").val(evt.latLng.lat().toFixed(6));
            $("#txtLng").val(evt.latLng.lng().toFixed(6));

            map.panTo(evt.latLng);
        });

        // centers the map on markers coords
        map.setCenter(vMarker.position);

        // adds the marker on the map
        vMarker.setMap(map);
    }
</script>