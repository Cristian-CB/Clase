<?php

$numero = 2;
$numero++;
++$numero;

$saludar = "Hola mundo";
$clase_terminada = false;
$arr1 = [1, 2, true, false, "Hola"];
$arr2 = array(1, 2, true, false, "Hola");
$arr3 = [
        1 => "Hola",
        2 => "Mundo",
];
$arr4 = array(
        1 => "Hola",
        2 => "Mundo",
);
$biblio = array(
        "ficción" => ["l1", "l2", "l3", "l4", "l5"],
        "suspense" => ["l1", "l2", "l3", "l4", "l5"],
        "terror" => ["l1", "l2", "l3", "l4", "l5"],
);
//$numero = "Hola mundo";

$valor = $clase_terminada ? "La clase ha terminado" : "La clase no ha terminado";

$valor2 = $hola ?? $valor . " val2";

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aprendiendo PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
//echo $numero;

//print_r($arr1);

//echo json_encode($arr1[3]); // JSON ENCODE TRANSFORMA VALORES BOOLEAN EN TXT.

//echo "<h1 class=''>" . $saludar . "</h1>";
//
//if ($clase_terminada) {
//    echo "<h2>La clase ha terminado</h2>";
//}
//elseif (!$clase_terminada) {
//    echo "<h2>La clase no ha terminado todavía</h2>";
//}
//else {
//    echo "<h2>La clase no ha terminado</h2>";
//}
//
//echo "<p>" . $valor . "</p>";
//
//echo "<p>" . $valor2 . "</p>";

//for($i = 0; $i < count($arr2); $i++) {
//    echo "<p>" . json_encode($arr2[$i]) . "</p>";
//}

//foreach ($arr2 as $item) {
//    echo "<p>" . json_encode($item) . "</p>";
//}
//
//foreach ($biblio as $clave => $valor) {
//    echo "<p>" . json_encode($clave) . "</p>";
//    foreach ($biblio[$clave] as $item) {
//        echo "<p>" . json_encode($item) . "</p>";
//    }
//}

?>

<?php
$juegos = array(
        ["image" => "./image.jpg", "nombre" => "Juego 1", "posts" => 235, "members" => 678],
        ["image" => "./image.jpg", "nombre" => "Juego 2", "posts" => 65, "members" => 5],
        ["image" => "./image.jpg", "nombre" => "Juego 3", "posts" => 4, "members" => 15],
        ["image" => "./image.jpg", "nombre" => "Juego 4", "posts" => 388, "members" => 500],
        ["image" => "./image.jpg", "nombre" => "Juego 5", "posts" => 678, "members" => 755],
);
?>

<main>

    <section class="section-4">
        <h2>Our communities</h2>

        <div class="carousel">

            <?php
            foreach ($juegos as $juego) {
//                echo '<div class="item">';
//                echo '<img src="./image.jpg" alt="juegos">';
//                echo '<div class="info">';
//                echo '<div>';
//                echo '<p>235</p>';
//                echo '<p>Posts</p>';
//                echo '</div>';
//                echo '<div>';
//                echo '<p>678</p>';
//                echo '<p>Members</p>';
//                echo '</div>';
//                echo '</div>';
//                echo '<button class="btn" type="button">Join Group</button>';
//                echo '</div>';
            ?>
                <div class="item">
                    <img src="<?php echo $juego['image']; ?>" alt="<?php echo $juego['nombre']; ?>">
                    <div class="info">
                        <div>
                            <p><?php echo $juego['posts']; ?></p>
                            <p>Posts</p>
                        </div>
                        <div>
                            <p><?php echo $juego['members']; ?></p>
                            <p>Members</p>
                        </div>
                    </div>
                    <button class="btn" type="button">Join Group</button>
                </div>
            <?php
            }
            ?>


        </div>

    </section>


</main>


</body>
</html>