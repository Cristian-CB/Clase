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






















