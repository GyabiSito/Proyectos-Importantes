<?php 
    $pdo = new mysqli('localhost','root','','gestion_inmobiliaria');
    if($pdo-> connect_error){
        die('No se pudo conectar al servidor');
    }

?>