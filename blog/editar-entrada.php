<?php require_once 'includes/redireccion.php'; ?>
<?php require_once 'includes/conexion.php'; ?>
<?php require_once 'includes/helpers.php'; ?>
<?php
	$entrada_actual = conseguirEntrada($_GET['id']);

	if(!isset($entrada_actual['id'])){
		header("Location: index.php");
	}
?>
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/lateral.php'; ?>

<!-- CAJA PRINCIPAL -->
<div id="principal">
	<h1>Editar entrada</h1>
	<p>
		Edita tu entrada <?=$entrada_actual['titulo']?>
	</p>
	<br/>
	<form action="guardar-entrada.php?editar=<?=$entrada_actual['id']?>" method="POST">
		<label for="titulo">Titulo:</label>
		<input type="text" name="titulo" value="<?=$entrada_actual['titulo']?>"/>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'titulo') : ''; ?>
		
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"><?=$entrada_actual['descripcion']?></textarea>
		<?php echo isset($_SESSION['errores_entrada']) ? mostrarErrores($_SESSION['errores_entrada'], 'descripcion') : ''; ?>
		
		<label for="categoria">Categoría</label>
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
		
		<input type="submit" value="Guardar" />
	</form>
	<?php borrarErrores(); ?>
</div> <!--fin principal-->

<?php require_once 'includes/footer.php'; ?>