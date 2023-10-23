<?php
require_once 'includes/header.php';
require_once 'includes/lateral.php'; 

$categoriaActual=conseguirCategoria($_GET['id']);

if(!isset($categoriaActual['id'])){
    header('Location: index.php');
}
?>

    <div id="principal">

        <h1>Entradas de <?=$categoriaActual['nombre'];?></h1>

        <?php 
                $entradas=conseguirEntradas(false, $categoriaActual['id']);
                    if ($entradas) {
                        foreach ($entradas as $entrada){
                            ?>
                                <article class="entrada">
                                    <?php // var_dump($entrada); ?>
                                    <a href="entrada.php?id=<?=$entrada['id']?>">
                                        <h2><?=$entrada['titulo']?></h2>
                                        <span class="fecha"><?=$entrada['categoria']." | ".$entrada['fecha'];?></span>
                                        <p><?=substr($entrada['descripcion'],0, 200)."...";?></p>
                                    </a>
                                </article>
                            <?php
                        }
                    }else{
                        ?> <div class="alerta">No hay entradas en esta categoria</div> <?php
                    }
                    
                ?>

    </div>


<?php 
require_once 'includes/footer.php';
?>