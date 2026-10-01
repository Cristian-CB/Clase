
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<?php




$peliculas = [
    ["id" => 1, "titulo" => "Iron Man", "universo" => "Marvel", "director" => "Jon Favreau", "anyo" => 2008, "duracion" => 126, "puntuacion" => 7.9, "disponible" => true, "imagen" => "imgs/IRONMAN.jpg"],
    ["id" => 2, "titulo" => "The Dark Knight", "universo" => "DC", "director" => "Christopher Nolan", "anyo" => 2008, "duracion" => 152, "puntuacion" => 9.0, "disponible" => true, "imagen" => "imgs/BATMAN.jpg"],
    ["id" => 3, "titulo" => "Avengers: Endgame", "universo" => "Marvel", "director" => "Anthony y Joe Russo", "anyo" => 2019, "duracion" => 181, "puntuacion" => 8.4, "disponible" => true, "imagen" => "imgs/ENDGAME.jpg"],
    ["id" => 4, "titulo" => "Aquaman", "universo" => "DC", "director" => "James Wan", "anyo" => 2018, "duracion" => 143, "puntuacion" => 6.9, "disponible" => false, "imagen" => "imgs/AQUAMAN.jpg"],
    ["id" => 5, "titulo" => "Spider-Man: No Way Home", "universo" => "Marvel", "director" => "Jon Watts", "anyo" => 2021, "duracion" => 148, "puntuacion" => 8.2, "disponible" => true, "imagen" => "imgs/SPIDERMAN.jpg"],
    ["id" => 6, "titulo" => "Wonder Woman", "universo" => "DC", "director" => "Patty Jenkins", "anyo" => 2017, "duracion" => 141, "puntuacion" => 7.4, "disponible" => false, "imagen" => "imgs/WONDERWOMAN.jpg"],
    ["id" => 7, "titulo" => "Black Panther", "universo" => "Marvel", "director" => "Ryan Coogler", "anyo" => 2018, "duracion" => 134, "puntuacion" => 7.3, "disponible" => true, "imagen" => "imgs/BLACKPANTHER.jpg"],
    ["id" => 8, "titulo" => "Joker", "universo" => "DC", "director" => "Todd Phillips", "anyo" => 2019, "duracion" => 122, "puntuacion" => 8.4, "disponible" => true, "imagen" => "imgs/JOKER.jpg"],
];

$watchlist = [
    ["pelicula_id" => 1, "vista" => true],
    ["pelicula_id" => 3, "vista" => false],
    ["pelicula_id" => 8, "vista" => false],
];

function mostrar($peliculas){
    
                         foreach($peliculas as $pelicula) { ?>
                    
                    <div class = "item">
                        <img class= "imagen"
                         src="<?= $pelicula["imagen"] ?>" 
                         alt="imagen">

                        <h2 class="titulo"> 
                            <?= $pelicula["titulo"] ?> 
                        </h2>
                        <div class="content">
                            <p class="universo"> 
                                <?= $pelicula ["universo"] ?> 
                            </p>
                            <p class ="year">  
                                <?= $pelicula["anyo"] ?>
                            </p>
                            <p class ="puntuacion" > <?= $pelicula["puntuacion"] ?> ★ </p>


                            <?php 
                            if (!$pelicula["disponible"]) { ?>
                            <p class = "disponible" >
                                Pelicula no disponible
                            </p>
                            <?php    
                            }
                            ?>
                        
                        </div>

                        
                         
                        
                
                    </div>

                    <?php } }




function mostrarWh($peliculas,$lista){
    
                         foreach($peliculas as $pelicula) { 
                            foreach($lista as $peli){
                    if ($pelicula["id"] == $peli["pelicula_id"]) {
                        
                    
                    
                    ?>
                    <div class = "item">
                        <img class= "imagen"
                         src="<?= $pelicula["imagen"] ?>" 
                         alt="imagen">

                        <h2 class="titulo"> 
                            <?= $pelicula["titulo"] ?> 
                        </h2>
                        <p class = "universo"> 
                            <?= $pelicula ["universo"] ?> 
                        </p>
                        <p class ="year">  
                            <?= $pelicula["anyo"] ?>
                         </p>
                        <p class ="puntuacion" > <?= $pelicula["puntuacion"] ?> ★ </p>


                        <?php 
                        if (!$pelicula["disponible"]) { ?>
                        <p class = "disponible" >
                            Pelicula no disponible
                        </p>
                         <?php  }  
                                
                            if ($peli["vista"]) { 
                                ?>
                                <p class ="vista">Pelicula vista </p>
                                
                            <?php   } else { ?>
                                <p class ="noVista" > pelicula no vista</p>
                           <?php  }  



                        
                         ?>
                        
                      

                        
                    </div>

                    <?php } }}}

?>









<body>
        <main>
            
                
                <h2 class = "todas" >Todas las peliculas</h2>
                <section class = "pelicula">
                  
               <?php  mostrar($peliculas) ?>
                </section>

              
                <?php 
                $filtro ="DC"; 
                $peliculasUniverso = [];
                foreach($peliculas as $pelis){
                if($pelis["universo"] == $filtro){
                $peliculasUniverso[] = $pelis;}} ?>


                <h2 class = "todas" >Peliculas de <?= $filtro ?></h2>
                <section class = "pelicula">
                  
                <?php  

                mostrar($peliculasUniverso);
                
                ?>
                    </section>
                    <?php  

                        $puntuacionAlta = [];
                        

                        ?>
                        <h2 class = "todas">Puntuacion mayor a 8 </h2>
                    <section class = "pelicula" >

                    <?php 
                    foreach($peliculas as $pelisPuntuacion)
                    if ($pelisPuntuacion["puntuacion"]>=8) {
                        $puntuacionAlta[] = $pelisPuntuacion ; 


                      
                    }
                    mostrar($puntuacionAlta); ?>
                    </section>
                    
                    
                    
                    
                    <h2 class = "todas"> whislist </h2>
                <section class = "pelicula" >

                <?php 
                


                  
                
                mostrarWh($peliculas,$watchlist); 
               
                ?>
                


              
];





                </section>

        </main>




 <br>
 <br>
 <br>
 

<form>

    <label for="titulo">Título</label>
    <input type="text" id="titulo">

    <label for="universo">Universo</label>
    <select id="universo">
        <option>Marvel</option>
        <option>DC</option>
    </select>

    <label for="director">Director</label>
    <input type="text" id="director">

    <label for="anyo">Año</label>
    <input type="number" id="anyo">

    <label for="duracion">Duración (mins)</label>
    <input type="number" id="duracion">

    <label for="puntuacion">Puntuación (0-10)</label>
    <input type="number" id="puntuacion">

    <label for="imagen">Imagen</label>
    <input type="file" id="imagen">

    <label for="disponible">Disponible</label>
    <input type="checkbox" id="disponible">

    <label for="enviar">Enviar</label>
    <input type="submit" id="enviar">

</form>


 </body>











</html>