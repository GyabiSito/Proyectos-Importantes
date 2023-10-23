<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/lateral.php'; 
?>
<div id="principal">
    <h1>Crear Entrada</h1>
    <p>Añade nuevas categorías al Blog para que los Usuarios puedan leerlas y disfrutar su contenido</p>
    <form action="guardar-entrada.php" method="POST">
        <label for="Titulo">Titulo</label>
        <input type="text" name="titulo">
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : ''; ?>

        <label for="Descripcion">Descripcion</label>
        <textarea name="descripcion"></textarea>
        <?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : '';?>

        <label for="categoria">Categoria</label>
        <select name="categoria" id="">
            <?php $categorias=conseguirCategorias();
                    $categorias=conseguirCategorias();
                        if ($categorias) {
                            foreach ($categorias as $categoria){
                                ?>
                                <option value="<?=$categoria['id']?>">
                                    <?=$categoria['nombre'];?>
                                </option>
                                <?php
                            }
                        }
                ?>
        </select>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'categoria') : ''; ?>

        <input type="submit" value="Guardar">
    </form> 
    <?php borrarErrores();?>
</div>


<?php 
require_once 'includes/footer.php';
?>