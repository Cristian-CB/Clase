<?php

require "datos.php";

// Recoger los filtros
$q = $_GET["q"] ?? "";
$tipo = $_GET["tipo"] ?? "todos";

// Crear array vacío
$clientesFiltrados = [];

// Filtrar clientes
foreach ($clientes as $cliente):

    // Buscar por nombre y apellidos
    $coincideNombre = strpos(
        strtolower($cliente["nombre"] . " " . $cliente["apellidos"]),
        strtolower($q)
    ) !== false;

    // Comprobar tipo
    $coincideTipo = ($tipo == "todos" || $cliente["tipo"] == $tipo);

    // Si cumple los dos filtros, añadirlo
    if ($coincideNombre && $coincideTipo):
        $clientesFiltrados[] = $cliente;
    endif;

endforeach;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Central</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>

    <?php require "partials/header.php"; ?>

    <main>

        <h1>Gestión de clientes</h1>

        <!-- FORMULARIO DE BÚSQUEDA -->

        <form method="GET">

            <input
                type="text"
                name="q"
                placeholder="Buscar cliente"
                value="<?= htmlspecialchars($q) ?>"
            >

            <select name="tipo">

                <option value="todos" <?= $tipo == "todos" ? "selected" : "" ?>>
                    Todos
                </option>

                <option value="ahorro" <?= $tipo == "ahorro" ? "selected" : "" ?>>
                    Ahorro
                </option>

                <option value="corriente" <?= $tipo == "corriente" ? "selected" : "" ?>>
                    Corriente
                </option>

                <option value="empresa" <?= $tipo == "empresa" ? "selected" : "" ?>>
                    Empresa
                </option>

            </select>

            <button type="submit">Buscar</button>

        </form>


        <!-- LISTADO DE CLIENTES -->

        <section class="clientes">

            <?php if (count($clientesFiltrados) > 0): ?>

                <?php foreach ($clientesFiltrados as $cliente): ?>

                    <?php include "partials/tarjeta.php"; ?>

                <?php endforeach; ?>

            <?php else: ?>

                <p>No se han encontrado clientes.</p>

            <?php endif; ?>

        </section>


        <!-- RESUMEN -->

        <p>
            Mostrando <?= count($clientesFiltrados) ?>
            de <?= count($clientes) ?> clientes
        </p>

    </main>

    <?php require "partials/footer.php"; ?>

</body>

</html>