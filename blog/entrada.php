<?php
require_once 'includes/header.php';
require_once 'includes/lateral.php'; 

$entradaActual=conseguirEntrada($_GET['id']);

?>

    <div id="principal">
        <h1><?=$entradaActual['titulo'];?></h1>
        <a href="categoria.php?id=<?=$entradaActual['categoria_id']?>">
        <h2><?=$entradaActual['categoria'];?></h2>
        </a>
        <h4><?=$entradaActual['fecha'];?> | <?=$entradaActual['usuario'];?></h4> 
        <p>
            <?=$entradaActual['descripcion'];?>
        </p>
        <?php if(isset($_SESSION['usuario']) && $_SESSION['usuario']['id'] === $entradaActual['usuario_id']) :         ?>
            <a href="editar-entrada.php?id=<?=$entradaActual['id']?>" class="boton boton-verde">Editar Entrada</a>
            <a href="borrar-entrada.php?id=<?=$entradaActual['id']?>" class="boton">Borrar Entrada</a>
        <?php endif; ?>
<?php 
require_once 'includes/footer.php';
?>