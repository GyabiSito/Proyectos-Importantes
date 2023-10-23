

<aside id="sidebar">

    <div id="buscador" class="bloque">
		<h3>Buscar</h3>

		<form action="buscar.php" method="POST"> 
			<input type="text" name="busqueda" />
			<input type="submit" value="Buscar" />
		</form>
	</div>


    <?php if (isset($_SESSION['usuario'])) : ?>
        <div id="usuario-logueado" class="bloque">
            <h3>Bienvenido, <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos']; ?></h3>
            <a href="crear-entradas.php" class="boton boton-verde">Crear Entradas</a>
            <a href="crear-categoria.php" class="boton">Crear Categoria</a>
            <a href="mis-datos.php" class="boton boton-naranja">Mis Datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesion</a>
        </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['usuario'])) : ?>
    <div id="login" class="bloque">
        <h3>Identifiquese</h3>

        <?php if (isset($_SESSION['error_login'])) : ?>
            <div id="usuario-logueado" class="alerta alerta-error">
                <?= $_SESSION['error_login'] ?>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="email">email</label>
                <input type="email" name="email">

                <label for="email">password</label>
                <input type="password" name="password">

                <input type="submit" name="submit" value="Entrar">
            </form>
            </div>

            <div id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="registro.php" method="POST">

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
                    <input type="text" name="nombre">
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'nombre') : '';
                    ?>

                    <label for="apellido">apellido</label>
                    <input type="text" name="apellido">
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'apellido') : '';
                    ?>
                    <label for="email">email</label>
                    <input type="email" name="email">
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'email') : '';
                    ?>
                    <label for="password">password</label>
                    <input type="password" name="password">
                    <?php echo isset($_SESSION['errores']) ? mostrarErrores($_SESSION['errores'], 'password') : '';
                    ?>
                    <input type="submit" name="submit" value="Entrar">
                </form>
                <?php borrarErrores();
                ?>
            </div>
            <?php endif;?>
</aside>