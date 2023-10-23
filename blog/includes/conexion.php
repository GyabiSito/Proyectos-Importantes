<?php
if(!isset($_SESSION)){
        session_start();
    }
$servidor="mysql:dbname=blog;host=localhost";
try{
    $pdo= new PDO($servidor, "root","", array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));
}catch(PDOException $e){
    echo "<script>alert('Error al conectara la base de datos')</script>";
}

