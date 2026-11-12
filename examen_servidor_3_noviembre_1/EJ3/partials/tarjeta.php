







<?php




?>



        <div class="tarjeta">


            <div class="contenido">

                <!-- Nombre -->
                <h2><?= $evento['titulo'] ?></h2>

                <!-- Descripción -->
                <p><?= $evento['categoria'] ?></p>

                <!-- Precio -->
                <p><?= date($evento["fecha"]) ?> </p>

                <p><?= $evento["precio"] > 0 ? $evento["precio"] . "€":"gratis" ?> </p>

                <!-- Destacado -->
                <?php if (evento($evento) =="agotado"){ ?>
                    <span class="destacado">agotado</span> <?php
                    }elseif(evento($evento) =="pocas unidades"){ ?>
                        <span class="destacado">ultimas plazas</span>
                <?php } 
                else { ?>
                    <span class="destacado">disponible</span>
               <?php } ?>


            </div>

        </div>

























