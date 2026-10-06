
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
 




 
 <form>
    <h2 class= "formulario">Formulario</h2>
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

 
    <input type="submit" id="enviar">

</form>


 </body>











</html>