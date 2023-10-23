<?php
require_once 'includes/redireccion.php';

require_once 'includes/header.php';

require_once 'includes/lateral.php'; 

?>
<div id="principal">
    <h1>Crear Categoria</h1>
    <p>Añade nuevas categorías al Blog para que los Usuarios puedan usarlas para crear sus entradas</p>
    <form action="guardar-categoria.php" method="POST">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <input type="submit" value="Guardar">
    </form>
</div>


<?php 
require_once 'includes/footer.php';
?>