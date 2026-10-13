<?php


require_once("./config.php");

session_destroy();
if(isset($_SESSION["usuario_logged"])){
    header("Location: ./dashboard.php");
    exit();
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    link</head>
<body>

<form action="./controllers/middleware.php" method="post" >


    <label for="usuario">Usuario</label>
    <input type="text" name ="usuario">
    <label for="contraseña">Contraseña</label>
    <input type="text" name ="contraseña">
    <input type="submit" value="Iniciar sesion">
    <button type="button">iniciar sesion mas tarde</button>
</form>








    
</body>
</html>