
<?php
require_once "./data.php";

include "./partials/heaader.php";

// Categorías en el orden solicitado
$categorias = ["entrante", "principal", "postre"];

?>

<main>

    <h2>Nuestra carta</h2>

    <?php foreach ($categorias as $categoria): ?>

        <section>

            <h2><?= ucfirst($categoria) ?>s</h2>

            <div class="contenedor-platos">

                <?php foreach ($platos as $plato): ?>

                    <?php if ($plato['categoria'] == $categoria): ?>

                        <?php pintarPlato($plato); ?>

                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        </section>

    <?php endforeach; ?>


    <section>

        <h2>Ofertas especiales - 15% de descuento</h2>

        <div class="contenedor-platos">

            <?php foreach ($platos as $plato): ?>

                <?php if ($plato['precio'] <= 10): ?>

                    <?php
                    $precioDescuento = $plato['precio'] * 0.85;
                    ?>

                    <article class="plato oferta">

                        <img src="img/<?= $plato['imagen'] ?>" alt="<?= $plato['nombre'] ?>">

                        <div class="contenido">

                            <h3><?= $plato['nombre'] ?></h3>

                            <p><?= $plato['descripcion'] ?></p>

                            <p class="precio-anterior">
                                <?= number_format($plato['precio'], 2) ?> €
                            </p>

                            <p class="precio-oferta">
                                <?= number_format($precioDescuento, 2) ?> €
                            </p>

                            <p>¡15% de descuento!</p>

                            <?php if (!$plato['disponible']): ?>
                                <span class="etiqueta">No disponible</span>
                            <?php endif; ?>

                        </div>

                    </article>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    </section>

</main>

<?php include "partials/footer.php"; ?>
