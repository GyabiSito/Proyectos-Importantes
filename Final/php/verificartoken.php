<?php
include "conexion2.php";
$email = $_POST['email'];
$token = $_POST['token'];
$codigo = $_POST['codigo'];

$res=$pdo->query("SELECT * from cuenta where gmail='$email' and token='$token' and codigo=$codigo")or die($conexion->error);

$correcto = false;

if(mysqli_num_rows($res) > 0){
        $correcto = true;

}else{
   

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar Contraseña</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center" style="margin-top:15%">
        <?php if($correcto) {?>
            <form class="col-3" action="./cambiarContra.php" method="POST">
                <h2>Restablecer Contraseña</h2>
                <div class="mb-3">
                    <label for="c" class="form-label">Nueva contraseña</label>
                    <input type="password" class="form-control" id="c" name="p1">
                </div>

                <div class="mb-3">
                    <label for="c" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="c" name="p2">
                    <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">
                </div>
               
                <button type="submit" class="btn btn-primary">Restablecer</button>
            </form>
            <?php }else{ ?>
            <div class="alert alert-danger">Códogo incorrecto o vencido</div>
            <?php } ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>