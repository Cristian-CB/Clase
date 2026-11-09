<?php

require "../config.php";



if ($_SERVER["REQUEST_METHOD"]=="POST") {
    
$tipo = $_POST["tipo"];
$importe = $_POST["importe"];
$concepto = $_POST["concepto"];


if (empty($tipo) || empty($importe)|| empty($concepto)) {
    header("Location:../index.php?error=vacio");
    exit();
    # code...
}
elseif($tipo!="ingreso" && $tipo!="retirada"){
    header("Location:../index.php?error=tipoIncorrecto");
    exit();
}
elseif(!is_numeric($importe)  || $importe<0){
 header("Location:../index.php?error=importe");
    exit();
}
elseif(strlen(trim($concepto))<3){
 header("Location:../index.php?error=concepto");
    exit();
}
elseif($tipo=="retirada" && $_SESSION["saldo"] - $importe < DESCUBIERTO_MAXIMO ){
 header("Location:../index.php?error=fondosInsuficientes");
    exit();
}
else {
    if ($tipo =="retirada") {
        
        $_SESSION["saldo"]-=$importe;
        $_SESSION["movimiento"][]="retirada de " . $importe;
        header("Location:../index.php");
        exit();
    }

    elseif ($tipo =="ingreso") {
        
        $_SESSION["saldo"]+=$importe;
        $_SESSION["movimiento"][]="importe  de " . $importe;
        header("Location:../index.php");
        exit();
    }}}










