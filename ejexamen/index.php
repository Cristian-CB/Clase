
<?php

require "datos.php";

// Recoger datos
$texto = $_GET["q"] ?? "";
$tipo = $_GET["tipo"] ?? "todos";

$clientesFiltrados = [];

// Filtrar clientes
foreach ($clientes as $cliente) {

    if (
        ($texto == "" || stripos($cliente["nombre"] . " " . $cliente["apellidos"], $texto) !== false) &&
        ($tipo == "todos" || $cliente["tipo"] == $tipo)
    ) {

        $clientesFiltrados[] = $cliente;

    }

}

?>

<?php require "partials/header.php"; ?>

<main>

    <h2>Gestión de clientes</h2>

    <form action="" method="get">

        <input
            type="text"
            name="q"
            placeholder="Buscar cliente"
            value="<?= htmlspecialchars($texto) ?>"
        >

        <select name="tipo">

            <option value="todos" <?= $tipo == "todos" ? "selected" : "" ?>>Todos</option>

            <option value="ahorro" <?= $tipo == "ahorro" ? "selected" : "" ?>>Ahorro</option>

            <option value="corriente" <?= $tipo == "corriente" ? "selected" : "" ?>>Corriente</option>

            <option value="empresa" <?= $tipo == "empresa" ? "selected" : "" ?>>Empresa</option>

        </select>

        <button type="submit">Buscar</button>

    </form>


    <section class="clientes">

        <?php

        if (!empty($clientesFiltrados)) {

            foreach ($clientesFiltrados as $cliente) {

                include "partials/tarjeta.php";

            }

        } else {

            echo "No se han encontrado clientes.";

        }

        ?>

    </section>


    <p>
        Mostrando <?= count($clientesFiltrados) ?>
        de <?= count($clientes) ?> clientes
    </p>

</main>

<?php require "partials/footer.php"; ?>
