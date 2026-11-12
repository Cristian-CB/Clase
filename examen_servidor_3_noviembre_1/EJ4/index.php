<?php

require "config.php";

if(!isset($_SESSION["saldo"])){
    $_SESSION["saldo"]=SALDO_INICIAL;
    $_SESSION["movimientos"]=[];
}


echo $_SESSION["saldo"];

// Escribe aquí la lógica y los cálculos (antes del HTML)

?>
<?php require "partials/header.php"; ?>

<main>

    
<form action="./controllers/operar.php" method="post">

<select name="tipo" id="">

<option value="ingreso">ingreso</option>
<option value="retirada">retirada</option>
</select>

<input type="" name="importe" placeholder = "introduce importe">
<input type="text" name="concepto" id="" placeholder ="concepto">
<button type="submit">enviar</button>
</form>



</main>

<?php require "partials/footer.php"; ?>
