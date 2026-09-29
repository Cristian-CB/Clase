<?php


$juegos = array(
["id"=> 1 , "nombre"=> "The legend of zelda" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay"],
["id"=> 2 , "nombre"=> "juego1" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay"],
["id"=> 3 , "nombre"=> "juego1" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay2"],
["id"=> 4 , "nombre"=> "juego1" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay3"],
["id"=> 5 , "nombre"=> "juego1" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay4"],
["id"=> 6 , "nombre"=> "juego1" , "descripcion" => "fsafasfasasdfasdfdf", "categoria"=> "gay5"]

)
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles1.css">
</head>
<body>
    <main>
        <section class="juegos">
        <?php
            foreach($juegos as $juego ){ ?>

            <div class = "item">
                <h2 class = "titulo"> <?= $juego["nombre"]?> </h2>
                <p class = "description">

                    Juego para nintendo switch 2    

                </p>

                <span class= "categoria"> aventura </span>


            </div>

            <?php } ?>
        </section>


        
    </main>
</body>
</html>