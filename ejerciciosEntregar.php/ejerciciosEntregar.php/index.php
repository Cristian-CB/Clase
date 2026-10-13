
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Ejercicio PHP Web</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php



include_once ("./arrayPeliculas.php");
include_once ("./mostrarPeliculas.php");
include_once ("./mostrarWachList.php");

?>


<body>
    
    <section class = "fotoPrincipal">
        <img src= "imgs/spiderman.webp" alt="">
           
        <p class="primerP"> Ver pelicula </p>
        <h3 class  = "segundoP" >A medida qué Spider-Man está en la cima de su carrera protegiendo la ciudad de Nueva York, 
            una serie de crímenes inusuales lo arrastran a una red de misterios más grande de lo que jamás haya enfrentado.</h3>


        
        
    </section>













        <main>
            
                
                <h2 class = "todas" >Todas las peliculas</h2>
                <section class = "pelicula">
                  
               <?php  mostrar($peliculas) ?>
                </section class = "filtro">

              
                <?php 
                $filtro ="DC"; 
                $peliculasUniverso = [];
                foreach($peliculas as $pelis){
                if($pelis["universo"] == $filtro){
                $peliculasUniverso[] = $pelis;}} ?>
                </section>

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
                    
                    
                    
                    
                    <h2 class = "todas"> whachlist </h2>
                 <section class = "pelicula" >

                 <?php 
                


                  
                
                 mostrarWh($peliculas,$watchlist); 
               
                 ?>
                


              






                </section>

        </main>




 <br>
 <br>
 <br>
 

<?php

include_once("formulario.php")
?>

 </body>











</html>