<?php
	if(!isset($_POST['busqueda'])){
		header("Location: index.php");
	}
?>
<?php
require_once 'includes/header.php';
require_once 'includes/lateral.php'; 

$entradas=conseguirEntradas(false, false, $_POST['busqueda']);

?>

    <div id="principal">
	        <h1>Busqueda: <?=$_POST['busqueda']?></h1>

        <?php 

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
                    }
                    
                ?>

        <div id="ver-todas">
            <a href="">Ver todas las Entradas</a>
        </div>
    </div>


<?php 
require_once 'includes/footer.php';
?>