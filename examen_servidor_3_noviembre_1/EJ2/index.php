<?php







require_once "datos.php";
require_once "funciones.php";

$valorTotal = valorInventario($productos);
$masCaro = productoMasCaro($productos);
$categorias = agruparPorCategoria($productos);
$sinStock = productosSinStock($productos);
$ordenados = ordenarPorPrecio($productos);

// Comprobaciones con array vacío   
$inventarioVacio = valorInventario([]);
$productoVacio = productoMasCaro([]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



<table>

<tr>
    <th>nombre</th>
    <th>categoria</th>
    <th>precio</th>
    <th>stock</th>
</tr>

<?php

foreach($productos as $p):
?>
<tr>
    <td><?= $p["nombre"] ?> </td>
    <td><?= $p["categoria"] ?> </td>
    <td><?= $p["precio"] ?> </td>
    <td class = " <?=$p["stock"]==0 ? "suspenso":"" ?> " ><?= $p["stock"] ?> </td>



</tr>

<?php
endforeach
?>





</table>
<h1>valor total del inventario</h1>
<?= $valorTotal ?>
<h2>producto mas caro</h2>
<?= $masCaro["nombre"]. $masCaro["precio"] ?>
    


<table>
    <tr>
        <th>categoria</th>
        <th>numero</th>
    </tr>
    <?php

    foreach($categorias as $categoria => $key):
        
    ?>
    <tr>
        <td><?= $categoria?></td>
        <td><?= $key?></td>
    </tr>
    


   <?php endforeach;?>


</table>
<ul>
        <?php
        if(!empty($sinStock)){
        foreach($sinStock as $p){
            ?>
            <li><?= $p["nombre"]?></li>
            


            <?php }}else {
            echo "todos los productos tienen stock";}

        ?>


</ul>
<table>

<tr>
    <th>nombre</th>
    <th>categoria</th>
    <th>precio</th>
    <th>stock</th>
</tr>
<?php


foreach($ordenados as $p):
?>
<tr>
    <td><?= $p["nombre"] ?> </td>
    <td><?= $p["categoria"] ?> </td>
    <td><?= $p["precio"] ?> </td>
    <td class = " <?=$p["stock"]==0 ? "suspenso":"" ?> " ><?= $p["stock"] ?> </td>



</tr>

<?php
endforeach
?>



</table>
</body>
</html>
