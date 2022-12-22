<?php
include_once 'conexion.php';
//Para iniciar sesión
if (isset($_REQUEST['login'])) { //El "login" se refiere a si el boton Submit con el name "Login" fue apretado 

    if ($query = $pdo->prepare("SELECT * FROM cuenta WHERE nickname=:nickname")) {
        $query->bindParam(':nickname', $_POST['nickname']);
        $query->execute();
        $renglones = $query->rowCount();

        if ($renglones > 0) {
            $registros = $query->fetchAll();
            $passEncriptada = $registros[0][1]; // Sirve para tomar la constraseña del array creado por fetchAll(), el 0 indica la primera tupla de la base de datos y el 2 el campo tomado, en este caso la contraseña encriptada.

            if (password_verify($_POST["pass"], $passEncriptada)) {
                session_start();
                $_SESSION['usuario'] = $registros;
                $gmail = $registros[0][8];
                $_SESSION['mail'] = $gmail;
                $permiso = $registros[0][2]; //Agarra la tercera tupla de la base de datos que son los privilegios (permisos)
                //print_r($_SESSION['usuario']);
                $_SESSION['permisos']=$permiso;
                $_SESSION['id_ci'] = $registros[0][3];
		
                if (isset($_SESSION['usuario'])) {
                    if ($permiso == "inmobiliario") {
                        $ci=$_SESSION['id_ci'];
                        $datos=$pdo->prepare("INSERT INTO sesion(id_ci, accion) VALUES($ci, 'Comenzó la sesión')");
                      $datos->execute();
                        header("Location: ../backoffice/indexadmin.php");
                    } else if (isset($_SESSION['usuario']) == 'operador') {
                        $ci=$_SESSION['id_ci'];   
                        $datos=$pdo->prepare("INSERT INTO sesion (id_ci, accion) VALUES($ci, 'Comenzó la sesión')");
                        $datos->execute(); 
                        header("Location: ../backoffice/indexoperador.php");
                    }
                }
            } else {
                echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
                echo '<br>' . "<center><p style='color: red'>Has ingresado mal algún dato</p></center>" . '<br>';
            }
        } else {
            echo '<br>' . "<center><p style='color: red'>LOGIN INCORRECTO</p></center>" . '<br>';
            echo '<br>' . "<center><p style='color: red'>Has ingresado mal algún dato</p></center>";
        }
    }
} else {
    echo '<br>' . "<center><p style='color: red'>Por favor; rellene todos los campos</p></center>";
}