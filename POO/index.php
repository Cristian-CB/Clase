
<?php

require_once("./clases/videojuego.php");




$juegos= [
    new videojuego("1", "Valorant", "accion", 20, 8, "./reyna.png", 15),
    new videojuego("2", "Minecraft", "aventura", 15, 9, "./minecraft.png", 20),
    new videojuego("3", "Fortnite", "accion", 25, 7, "./fortnite.png", 10),
    new videojuego("4", "Elden Ring", "rol", 30, 9, "./eldenRing.png", 12),
    new videojuego("5", "The Legend of Zelda", "aventura", 20, 10, "./zelda.png", 18),
    new videojuego("6", "League of Legends", "estrategia", 10, 8, "./lol.png", 25)
];
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    


<h2>Todos los juegos</h2>
<section class = "pintar" >

<?php

foreach($juegos as $juego){
    $juego->pintarTarjeta();


}
?>

</section>

<section class = "pintar" >

<?php
foreach($juegos as $juego){

    if($juego->filter("recomendado")){
        $juego->pintarTarjeta();
    }
    

}
?>

</section>
<section class = "pintar" >
    <?php
foreach($juegos as $juego){

    if($juego->filter("oferta")){
        $juego-> aplicarDescuento(20);
        $juego->pintarTarjeta();

    }
    

}
?>




</section>
</body>
</html>