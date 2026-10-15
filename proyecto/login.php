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
    <link rel="stylesheet" href="./style.css">
    </head>
<body class = "inicio">

<form action="./controllers/middleware.php" method="post" class="inicioSesion" >

    <img src="./imgs/image.png" alt="" class="logo1">
    <H2>Iniciar sesion en Anime-CB</H2>
    <input type="text" name ="usuario" placeholder="Usuario">
   
    <input type="text" name ="contraseña" placeholder="Contraseña">
    <input type="submit" value="Iniciar sesion" id="botoncito">
    
    <button type="submit" name="invitado">Iniciar sesión más tarde</button>
</form>



</body> 
</html>