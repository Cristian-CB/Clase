
<?php

$platos = [
    [
        "id" => 1,
        "nombre" => "Patatas bravas",
        "descripcion" => "Patatas crujientes con salsa brava casera.",
        "precio" => 7.50,
        "categoria" => "entrante",
        "alergenos" => ["Gluten", "Huevo"],
        "disponible" => true,
        "imagen" => "patatas.jpg"
    ],
    [
        "id" => 2,
        "nombre" => "Croquetas caseras",
        "descripcion" => "Croquetas cremosas de jamón ibérico.",
        "precio" => 9.00,
        "categoria" => "entrante",
        "alergenos" => ["Gluten", "Leche", "Huevo"],
        "disponible" => true,
        "imagen" => "croquetas.jpg"
    ],
    [
        "id" => 3,
        "nombre" => "Ensalada César",
        "descripcion" => "Lechuga, pollo, queso parmesano y salsa César.",
        "precio" => 10.50,
        "categoria" => "entrante",
        "alergenos" => ["Leche", "Huevo", "Pescado"],
        "disponible" => false,
        "imagen" => "ensalada.jpg"
    ],
    [
        "id" => 4,
        "nombre" => "Hamburguesa especial",
        "descripcion" => "Carne de ternera, queso cheddar y bacon.",
        "precio" => 14.50,
        "categoria" => "principal",
        "alergenos" => ["Gluten", "Leche"],
        "disponible" => true,
        "imagen" => "hamburguesa.jpg"
    ],
    [
        "id" => 5,
        "nombre" => "Pizza cuatro quesos",
        "descripcion" => "Pizza artesanal con cuatro tipos de queso.",
        "precio" => 12.00,
        "categoria" => "principal",
        "alergenos" => ["Gluten", "Leche"],
        "disponible" => true,
        "imagen" => "pizza.jpg"
    ],
    [
        "id" => 6,
        "nombre" => "Pasta carbonara",
        "descripcion" => "Pasta con nata, bacon y parmesano.",
        "precio" => 11.50,
        "categoria" => "principal",
        "alergenos" => ["Gluten", "Huevo", "Leche"],
        "disponible" => true,
        "imagen" => "pasta.jpg"
    ],
    [
        "id" => 7,
        "nombre" => "Tarta de queso",
        "descripcion" => "Tarta de queso cremosa con frutos rojos.",
        "precio" => 6.50,
        "categoria" => "postre",
        "alergenos" => ["Gluten", "Leche", "Huevo"],
        "disponible" => true,
        "imagen" => "tarta.jpg"
    ],
    [
        "id" => 8,
        "nombre" => "Brownie",
        "descripcion" => "Brownie de chocolate con nueces.",
        "precio" => 5.50,
        "categoria" => "postre",
        "alergenos" => ["Gluten", "Huevo", "Frutos secos"],
        "disponible" => false,
        "imagen" => "brownie.jpg"
    ]
];

// Función para pintar un plato
function pintarPlato($plato) {
?>

    <article class="plato <?= !$plato['disponible'] ? 'no-disponible' : '' ?>">

        <img src="img/<?= $plato['imagen'] ?>" alt="<?= $plato['nombre'] ?>">

        <div class="contenido">
            <h3><?= $plato['nombre'] ?></h3>

            <p><?= $plato['descripcion'] ?></p>

            <p class="precio">
                <?= number_format($plato['precio'], 2) ?> €
            </p>

            <p>
                <strong>Alérgenos:</strong>
                <?= implode(", ", $plato['alergenos']) ?>
            </p>

            <?php if ($plato['disponible']): ?>
                <span class="disponible">Disponible</span>
            <?php else: ?>
                <span class="etiqueta">No disponible</span>
            <?php endif; ?>
        </div>

    </article>

<?php
}
?>
