<?php

function mostrarErrores($errores, $campo){
    $alert='';
    if(isset($errores[$campo]) && !empty($campo)){
        $alert="<div class='alerta alerta-error'>".$errores[$campo].'</div>';
    }
    return $alert;
}

function borrarErrores(){
    
    if(isset($_SESSION['errores'])){ 
        unset($_SESSION['errores']); 
    }    
    if(isset($_SESSION['errores_entrada'])){ 
        unset($_SESSION['errores_entrada']); 
    }
    if(isset($_SESSION['completado'])){ 
        unset($_SESSION['completado']); 
    }

}

function conseguirCategorias(){
    include 'conexion.php';
    $query = $pdo->prepare('SELECT id, nombre FROM categorias');
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
}
function conseguirCategoria($id){
    include 'conexion.php';
    $query = $pdo->prepare('SELECT id, nombre FROM categorias WHERE id=?');
    $query->execute([$id]);

    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    return $result;
}

function conseguirEntradas($limit=null, $categoria=null, $busqueda=null){
    include 'conexion.php';

    $query = $pdo->prepare('SELECT e.id, e.usuario_id, e.categoria_id, e.titulo, e.descripcion, e.fecha, c.nombre, borrar AS categoria FROM entradas e 
    INNER JOIN categorias c ON e.categoria_id=c.id WHERE borrar=0 ORDER BY e.id DESC');

    if(!empty($categoria)){
        $query = $pdo->prepare('SELECT e.id, e.usuario_id, e.categoria_id, e.titulo, e.descripcion, e.fecha, c.nombre, borrar AS categoria FROM entradas e 
        INNER JOIN categorias c ON e.categoria_id=c.id WHERE e.categoria_id=? AND borrar=0 ORDER BY e.id DESC');
        $query->execute([$categoria]);  
    }
    if (!empty($busqueda)) {
        $busqueda = '%' . $busqueda . '%'; // Agregamos los comodines a la cadena de búsqueda
        $query = $pdo->prepare('SELECT e.id, e.usuario_id, e.categoria_id, e.titulo, e.descripcion, e.fecha, c.nombre, borrar AS categoria FROM entradas e 
        INNER JOIN categorias c ON e.categoria_id=c.id WHERE e.titulo LIKE :busqueda AND borrar = 0 ORDER BY e.id DESC');
        
        $query->bindParam(':busqueda', $busqueda, PDO::PARAM_STR);
        $query->execute();  
    }

    /*En esta consulta, agregue los comodines % antes y después de la variable $busqueda, y
    he usado el marcador de posición :busqueda en la consulta preparada en lugar de "?".
    Luego, usamos bindParam() para vincular el valor de $busqueda con el marcador de posición :busqueda como una cadena (PDO::PARAM_STR). */
    if($limit==true){
        $query=$pdo->prepare('SELECT e.id, e.usuario_id, e.categoria_id, e.titulo, e.descripcion, e.fecha, c.nombre, borrar AS categoria FROM entradas e
         INNER JOIN categorias c ON e.categoria_id=c.id WHERE borrar=0 ORDER BY e.id DESC LIMIT 4');
    }
    $query->execute();
    $entradas = $query->fetchAll(PDO::FETCH_ASSOC);
    return $entradas;
}

function conseguirEntrada($id){
    include 'conexion.php';

    $query = $pdo->prepare('SELECT e.id, e.usuario_id, e.categoria_id, e.titulo, e.descripcion, e.fecha, c.nombre AS categoria, CONCAT(u.nombre, " ", u.apellidos) AS usuario FROM entradas e 
    INNER JOIN categorias c ON e.categoria_id = c.id 
    INNER JOIN usuarios u ON e.usuario_id = u.id
    WHERE e.id = ?');
    $resultado=array();
    $query->execute([$id]);
    if($query && $query->rowCount() >= 1){
        $resultado = $query->fetch(PDO::FETCH_ASSOC);
    }
    return $resultado;
}

function validar(){
    include 'conexion.php';

    $query=$pdo->prepare('SELECT borrar FROM entradas');
    $query->execute();
    $resultado = $query->fetch(PDO::FETCH_ASSOC);
    if($resultado === 1){

    }
}


