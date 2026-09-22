<?php /*
 * EJERCICIO 1 - INFORMACIÓN DE UN ALUMNO
 *
 * Crea las siguientes variables:
 * - nombre
 * - edad
 * - nota
 * - estudiante (true o false)
 *
 * Después muestra en la web una frase con toda la información.
 *
 * Ejemplo:
 * "Me llamo Cristian, tengo 18 años,
 *  mi nota es un 8.5 y soy estudiante."
 *
 * Además, si la nota es mayor o igual que 5,
 * muestra debajo:
 * "Has aprobado"
 *
 * Si es menor que 5:
 * "Has suspendido"
 */



$nombre = "Cristian";
$edad = 18;
$nota = 5;
$estudiante = True; 






?>

<p>
    me llamo <?php  echo $nombre; ?> tengo <?php echo $edad ;  ?>   y mi nota es <?php  echo $nota ?></p>

    <?php 
    if ($nota >= 5){echo " Has aprobado ";}
    else{echo " Has suspendido";}



    ?>





<?php 



/*
 * EJERCICIO 2 - PARES E IMPARES
 *
 * Utilizando un bucle for, muestra los números
 * del 1 al 30.
 *
 * Para cada número debes indicar si es:
 * - Par
 * - Impar
 *
 * Ejemplo:
 *
 * 1 - Impar
 * 2 - Par
 * 3 - Impar
 * 4 - Par
 * ...
 * 30 - Par
 *
 * PISTA:
 * Utiliza el operador % para saber si un número
 * es par o impar.
 */


 $numero = 30;
    for($i=0 ;$i <= $numero; $i++){
    if($i % 2 == 0 ){echo $i. " Es un numero par <br> ";}
    else {echo $i. " Es un numero impar <br>";}

  


    }


?>


<?php
/*
 * EJERCICIO 3 - NOTAS
 *
 * Crea un array que contenga 6 notas de alumnos.
 *
 * Por ejemplo:
 * [7, 4, 9, 5, 3, 8]
 *
 * Recorre el array utilizando un for.
 *
 * Para cada nota muestra:
 *
 * Nota: 7 - Aprobado
 * Nota: 4 - Suspenso
 * Nota: 9 - Aprobado
 *
 * Consideraremos que:
 * - 5 o más = Aprobado
 * - Menos de 5 = Suspenso
 */



    $muestra = [7, 4, 9, 5, 3, 8];

    foreach($muestra as $numero){
        if($numero >= 5 ){echo "Nota: " . $numero . " - Aprobado <br>"; }
        else{echo "Nota:". $numero . " -Suspenso <br>";}




    }










    /*
 * EJERCICIO 4 - TABLA DE MULTIPLICAR
 *
 * Crea una variable llamada $numero.
 *
 * Por ejemplo:
 *
 * $numero = 7;
 *
 * Utilizando un for, crea una tabla HTML
 * con la tabla de multiplicar del número.
 *
 * La tabla debe llegar desde el 1 hasta el 10.
 *
 * Ejemplo:
 *
 * | Multiplicación | Resultado |
 * |----------------|-----------|
 * | 7 x 1          | 7         |
 * | 7 x 2          | 14        |
 * | 7 x 3          | 21        |
 * ...
 * | 7 x 10         | 70        |
 * 
 * 
 *  Tiempo = 20 mins 21 septiembre
 *  
 */


$numero = 7;



?>

<table border =1>
<tr>
<th>Multiplicación</th>
<th>resultado</th>
</tr>
<?php
for($i=0 ;$i <=10; $i++){
?>
<tr>
<td> 
    <?php echo $numero." x " . $i ?>
</td>
<td>
   <?php echo $numero * $i  ?>
</td>
</tr>
<?php } ?>

</table>



<?php 





/*
 * EJERCICIO 5 - PRODUCTOS
 *
 * Crea un array con 5 productos.
 *
 * Cada producto debe tener:
 * - Nombre
 * - Precio
 *
 * Por ejemplo:
 *
 * [
 *     ["Pan", 1.20],
 *     ["Leche", 1.50],
 *     ["Huevos", 2.30]
 * ]
 *
 * Muestra todos los productos en una tabla HTML.
 *
 * Las columnas serán:
 *
 * | Producto | Precio |
 *
 * Ejemplo:
 *
 * | Pan      | 1.20 € |
 * | Leche    | 1.50 € |
 * | Huevos   | 2.30 € |
 *
 * Debes recorrer el array utilizando un for.
 */

$lista=
[["Pan", 1.20],   
["Leche", 1.50],
["Huevos", 2.30]];

?>



<table>
<tr> 

<th>producto</th>
<th>precio</th>

</tr>
<tr>
<?php
 
for ($i=0; $i < count($lista) ; $i++) {
    for ($j=0; $j < count($lista[$i]) ; $j++) {?> 
        
        
          
        <td><?php echo $lista[$i][$j]; ?> </td>
        
        
        



  <?php  }  ?> </tr> <?php




}   ?>



</table>


<?php


/*
 * EJERCICIO 8 - TABLA DE ALUMNOS
 *
 * Crea un array con varios alumnos.
 *
 * Cada alumno tendrá:
 * - Nombre
 * - Edad
 * - Nota
 *
 * Ejemplo:
 *
 * $alumnos = [
 *     ["Cristian", 18, 9],
 *     ["Carlos", 19, 6],
 *     ["Marta", 18, 4],
 *     ["Laura", 20, 8]
 * ];
 *
 * Muestra los datos en una tabla HTML:
 *
 * | Nombre   | Edad | Nota |
 *
 * Utiliza dos for:
 * - Uno para recorrer los alumnos.
 * - Otro para recorrer los datos de cada alumno.
 */






 $alumnos = [
    ["Cristian", 18, 9],
    ["Carlos", 19, 6],
    ["Marta", 18, 4],
    ["Laura", 20, 8]
  ];

    ?>


    <table border =1>
        <tr>
            
        <th>nombre</th>
        <th>edad</th>
        <th>notas</th>
    
    
    
    </tr>
    <tr>
    <?php 
   
    for ($i=0; $i < count($alumnos); $i++) { 
        for ($j=0; $j < count($alumnos[$i]); $j++) { ?>
           
        <td>
        <?php echo $alumnos[$i][$j]; ?>
        </td>




        <?php } ?>




    </tr> 
    
     <?php } ?>






</table>




<?php

/*
 * EJERCICIO 9 - PRODUCTOS
 *
 * Crea un array con 5 productos.
 *
 * Cada producto tendrá:
 * - Nombre
 * - Precio
 *
 * Ejemplo:
 *
 * $productos = [
 *     ["Pan", 1.20],
 *     ["Leche", 1.50],
 *     ["Huevos", 2.30],
 *     ["Arroz", 1.80],
 *     ["Pollo", 5.50]
 * ];
 *
 * Muestra los productos en una tabla.
 *
 * Añade una tercera columna llamada "Estado".
 *
 * Si el precio es mayor de 3 €:
 * "Caro"
 *
 * Si el precio es 3 € o menos:
 * "Barato"
 *
 * Utiliza dos for.


 */





   $productos = [
      ["Pan", 4],
     ["Leche", 1.50],
      ["Huevos", 2.30],
     ["Arroz", 1.80],
      ["Pollo", 5.50]
  ];
?>
        <table border = 1>

        <tr>
        <th>Producto</th>
        <th>Precio</th>
        <th>Estado</th>
        </tr>
        <tr>
            <?php
        for ($i=0; $i < count($productos ); $i++) { 
            for ($j=0; $j < count($productos[$i]); $j++) { 
                  ?>

                <td> <?php echo $productos[$i][$j]; ?> </td>
              


          <?php  } 
          
          
          if($productos[$i][1]> 3 ){?>

          <td><?php echo "caro" ;?></td>
          <?php }else { ?>
            <td><?php  echo " barato ";?> </td>
          <?php } 





 ?>
          </tr> <?php }
           ?>

            </tr>
          
        
        
        
        
        
        
        
        </table>

<?php 

/*
 * EJERCICIO 13 - MINI EXAMEN
 *
 * Crea un array de alumnos.
 *
 * Cada alumno tendrá:
 * - Nombre
 * - Edad
 * - Nota
 *
 * Por ejemplo:
 *
 * $alumnos = [
 *     ["Cristian", 18, 9],
 *     ["Carlos", 19, 4],
 *     ["Marta", 18, 7],
 *     ["Laura", 20, 3],
 *     ["Pablo", 19, 6]
 * ];
 *
 * Muestra una tabla HTML con:
 *
 * | Nombre | Edad | Nota | Resultado |
 *
 * En Resultado:
 *
 * - Nota >= 5 -> Aprobado
 * - Nota < 5 -> Suspenso
 *
 * Además, al final de la tabla muestra:
 *
 * "Número de aprobados: X"
 * "Número de suspensos: X"
 *
 * Debes utilizar:
 * - Array
 * - For
 * - If / else
 * - Tabla HTML
 *
 * Intenta hacerlo sin mirar los ejercicios anteriores.
 */








  $alumnos = [
      ["Cristian", 18, 9],
      ["Carlos", 19, 4],
      ["Marta", 18, 7],
      ["Laura", 20, 3],
      ["Pablo", 19, 6]
  ];

 $aprobados =0;
 $suspensos =0;


?>
<table border = 1 >
    <tr>
<th>Nombre </th>
<th>edad</th>
<th>Nota </th>
<th>Resultado </th>
</tr>

<tr>
    <?php
for ($i=0; $i < count($alumnos) ; $i++) { 
    for($j=0; $j < count($alumnos[$i]) ; $j++) { ?>
    
        <td> <?php echo $alumnos[$i][$j] ;?> </td>







<?php }   

if ($alumnos[$i][2]>= 5 ) {
    
    $aprobados+=1;
    ?>
    <td> <?php  echo "aprobado "; ?> </td>
    <?php }
else{
    $suspensos+=1;
    ?>
<td> <?php  echo "suspenso ";  ?> </td>
<?php } ?>


</tr> 

<?php } ?>



<tr> <th> numeros de aprobados</th>


<td> <?php echo $aprobados; ?> </td>
</tr>
<tr> 
    
<th> numeros de suspensos</th>

<td><?php echo $suspensos; ?> </td>


</tr>




</table>














































