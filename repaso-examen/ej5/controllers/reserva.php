

<?php
session_start();
if($_SERVER["REQUEST_METHOD"]==="POST"){


$nombre = $_POST["texto"];
$email= $_POST["email"];
$date= $_POST["date"];
$number= $_POST["number"];
$opciones= $_POST["opciones"];



if(empty($nombre)||empty($email)||empty($date)||empty($number)||empty($opciones)){
header("Location:../index.php?error=campos");
exit();
}

elseif ($number<0 && $number>10) {
    header("Location:../index.php?error=personas");
exit();
}

elseif ($opciones!="terraza") {
    header("Location:../index.php?error=preferencia");
exit();
}
else {

    $_SESSION["usuario"]=$usuario;
    $_SESSION["texto"]=$nombre;
    $_SESSION["email"]=$email;
    $_SESSION["date"]=$date;
    $_SESSION["number"]=$number;
    $_SESSION["opciones"]=$opciones;
}




}



?> 