<?php
$servidor="mysql:dbname="."gestion_inmobiliaria".";host="."localhost";

try{

$pdo=new PDO($servidor,"root","",
                   array(PDO :: MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")
               );

   }catch(PDOException $e){
       echo"<script>alert('Error al conectarala base de datos!')</script>";
   }

?>