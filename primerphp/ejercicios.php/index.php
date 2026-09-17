

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<h3> EJERCICIO 1 </h3>

<?php        

// ==================== EJERCICIO 1 ====================
// Crea diferentes variables: nombre, edad y si eres estudiante (true o false).
// Después, muestra en la web una frase utilizando esas variables.

$nombre = "cristian";
$edad = 18;
$estudiante = true;

echo "Mi nombre es " . $nombre . " y tengo " . $edad . " años y estudiante = " . json_encode($estudiante);

echo "<br>";


// ==================== EJERCICIO 2 ====================
// Usando un bucle for, muestra los números del 1 al 20.
// Si el número es par, muestra también que el número es par.

$n = 20;
?> <h3> EJERCICIO 2 </h3>
<?php

for ($i = 0; $i <= $n; $i++) {

    if ($i % 2 == 0) {
        
        echo $i . " es par <br>" ;
    } else {
        echo $i. "<br>";
    }
}



// ==================== EJERCICIO 3 ====================
// Crea una página HTML con PHP que muestre una tabla (<table></table>).
// Define una variable con un array de valores.
// Los valores del array deberán aparecer como elementos de la tabla.
// Tú decides el nombre de las columnas, la cantidad de columnas y los valores.


// TU CÓDIGO AQUÍ
?>
<h3> EJERCICIO 3 </h3>


<?php
echo "<br>";


 $lista = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];




?>
<table border="1">
<tr>
    <th> numero </th>
    <th> mas numeros</th>
    <th> mas numeros 1 </th>
</tr>



<?php

for ($i=0; $i < 3; $i++) {  
    ?>
   <tr>
    <?php for ($j=0; $j< 3 ; $j++) {    ?> 
        
    <td> <?php    echo $lista[$j][$i];   ?> </td>
     
     <?php }
    
    ?>
   </tr>


<?php  }  ?>




</table>








<h3> EJERCICIO 4 </h3>

<?php


// ==================== EJERCICIO 4 ====================
// Crea una página HTML con PHP que muestre una tabla de multiplicar.
// Define una variable $numero. Por ejemplo: $numero = 5.
// Usa un bucle for para generar las filas de la tabla.
//
// Ejemplo:
//
// |----------------------------|
// | 5 x 1       |     5        |
// | 5 x 2       |     10       |
// | 5 x 3       |     15       |
// | ...         |     ...      |
// |----------------------------|


// TU CÓDIGO AQUÍ








?>

<table border  ="1">

    <tr>
        <th> Operacion </th>
        <th> Resultado </th>
    </tr>
    <?php

    $numero = 5;

    ?>
 <tr>
    <?php  for ($i=0; $i <= 10; $i++){ 
        $resultado = $numero * $i ?>



   
        <td> <?php  echo " " . $numero . " x " . $i  ?> </td>
        <td> <?php  echo $resultado ?>  </td>
        
    </tr>




   <?php }  ?>
</table>






</body>
</html>
