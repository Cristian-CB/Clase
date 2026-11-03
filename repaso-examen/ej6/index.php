
<?php

require_once "clases/Coche.php";

// Creamos los coches
$coches = [

    new Coche(1, "BMW", "Serie 1", 14000, 0, true),

    new Coche(2, "Audi", "A3", 18000, 30000, true),

    new Coche(3, "Seat", "Leon", 12000, 50000, true),

    new Coche(4, "Toyota", "Corolla", 15000, 0, false),

    new Coche(5, "Volkswagen", "Golf", 13500, 20000, true),

    new Coche(6, "Mercedes", "Clase A", 25000, 10000, false)

];

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de coches</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f4f7;
            margin: 0;
            color: #333;
        }

        header {
            background-color: #243447;
            color: white;
            text-align: center;
            padding: 30px;
        }

        main {
            max-width: 1100px;
            margin: auto;
            padding: 25px;
        }

        h2 {
            color: #243447;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
            margin-top: 35px;
        }

        .contenedor {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
        }

        .tarjeta {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 10px #00000015;
        }

        .tarjeta h3 {
            color: #243447;
            margin-top: 0;
        }

        .disponible {
            color: green;
            font-weight: bold;
        }

        .no-disponible {
            color: red;
            font-weight: bold;
        }

        .oferta {
            color: #e74c3c;
            font-size: 20px;
            font-weight: bold;
        }

        .etiqueta {
            background-color: #3498db;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        del {
            color: gray;
        }

    </style>

</head>

<body>

<header>
    <h1>Catálogo de coches</h1>
    <p>Encuentra tu próximo vehículo</p>
</header>

<main>

    <!-- 1. TODOS LOS COCHES -->

    <section>

        <h2>Todos los coches</h2>

        <div class="contenedor">

            <?php foreach ($coches as $coche): ?>

                <?php $coche->pintarTarjeta(); ?>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- 2. COCHES DISPONIBLES -->

    <section>

        <h2>Coches disponibles</h2>

        <div class="contenedor">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("disponible")): ?>

                    <?php $coche->pintarTarjeta(); ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- 3. COCHES NUEVOS -->

    <section>

        <h2>Coches nuevos (0 km)</h2>

        <div class="contenedor">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("nuevo")): ?>

                    <?php $coche->pintarTarjeta(); ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- 4. COCHES EN OFERTA -->

    <section>

        <h2>Coches en oferta - 10% descuento</h2>

        <div class="contenedor">

            <?php foreach ($coches as $coche): ?>

                <?php if ($coche->filter("oferta")): ?>

                    <?php $coche->pintarTarjeta(true); ?>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </section>

</main>

</body>
</html>
