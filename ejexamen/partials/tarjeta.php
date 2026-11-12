
<?php

if ($cliente["estado"] == "bloqueada") {

    $estado = "Bloqueada";

}
elseif ($cliente["estado"] == "inactiva") {

    $estado = "Inactiva";

}
elseif ($cliente["saldo"] <= 50) {

    $estado = "Saldo bajo";

}
else {

    $estado = "Operativa";

}

?>

<div class="tarjeta">

    <h3>
        <?= $cliente["nombre"] ?>
        <?= $cliente["apellidos"] ?>
    </h3>

    <p>Tipo: <?= $cliente["tipo"] ?></p>

    <p>IBAN: <?= $cliente["iban"] ?></p>

    <p>
        Saldo:
        <?= number_format($cliente["saldo"], 2, ",", ".") ?> €
    </p>

    <p>Movimientos: <?= $cliente["movimientos"] ?></p>

    <p>Estado: <?= $estado ?></p>

</div>
