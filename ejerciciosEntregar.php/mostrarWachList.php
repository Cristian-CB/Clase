
<?php 

function mostrarWh($peliculas, $lista){
    
    foreach($peliculas as $pelicula) { 
        foreach($lista as $peli){

            if ($pelicula["id"] == $peli["pelicula_id"]) {
?>
                <div class="itemPelicula">

                    <div class="item">

                        <img class="imagen"
                             src="<?= $pelicula["imagen"] ?>" 
                             alt="imagen">

                        <h2 class="titulo"> 
                            <?= $pelicula["titulo"] ?> 
                        </h2>

                        <div class="content">

                            <p class="universo"> 
                                <?= $pelicula["universo"] ?> 
                            </p>

                            <p class="year">  
                                <?= $pelicula["anyo"] ?>
                            </p>

                            <p class="puntuacion">
                                <?= $pelicula["puntuacion"] ?> ★
                            </p>

                            </div>
                            <?php 
                            if (!$pelicula["disponible"]) { ?>
                                <p class="disponible">
                                    Pelicula no disponible
                                </p>
                            <?php 
                            } 
                            ?>

                            <?php 
                            if ($peli["vista"]) { ?>
                                <p class="vista">
                                     Vista
                                </p>
                            <?php 
                            } else { ?>
                                <p class="noVista">
                                    No vista
                                </p>
                            <?php 
                            } 
                            ?>


                    </div>

                    <div>
                        <p class="textoDebajo"> <?= $pelicula["titulo"] ?> </p>
                    </div>

                </div>

<?php
            }
        }
    }
}











?>