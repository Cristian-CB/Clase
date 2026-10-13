

<?php

function mostrar($peliculas){
    
                         foreach($peliculas as $pelicula) { ?>
                    <div class = "itemPelicula <?php if (!$pelicula['disponible']) echo 'noDisponible'; ?> " >
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
                            
                            </div>
                                <?php 
                                if (!$pelicula["disponible"]) { ?>
                                <p class = "disponible" >
                                    No disponible
                                </p>

                            
                                <?php    
                                }
                                ?>
                            </div>

                                <div> 
                                    <p class ="textoDebajo"> <?= $pelicula["titulo"] ?>  </p> 
                                
                                </div>
                    </div>
                    

                    <?php } } ?>
