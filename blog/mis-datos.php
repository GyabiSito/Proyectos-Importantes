<?php
require_once 'includes/redireccion.php';
require_once 'includes/header.php';
require_once 'includes/lateral.php';
?>

<div id="principal">
    <h1>Mis Datos</h1>

    <form action="actualizar-usuario.php" method="POST">
        <?php  // Mostrar Errores
        if (isset($_SESSION['completado'])) : ?>
            <div class="alerta alerta-exito">
                <?= $_SESSION['completado']; ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class="alerta alerta-error">
                <?= $_SESSION['errores']['general']; ?>
            </div>
        <?php endif; ?>
        <label for="nombre">nombre</label>
        <input type="text" name="nombre" value="<?=$_SESSION['usuario']['nombre']?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '';
        ?>

        <label for="apellido">apellido</label>
        <input type="text" name="apellido" value="<?=$_SESSION['usuario']['apellidos']?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellido') : '';
        ?>
        <label for="email">email</label>
        <input type="email" name="email" value="<?=$_SESSION['usuario']['email']?>">
        <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '';
        ?>

        <input type="submit" name="submit" value="Actualizar">
    </form>
    <?php borrarErrores();
    ?>
</div>

<?php
require_once 'includes/footer.php';
