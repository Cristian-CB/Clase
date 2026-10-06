<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel de control</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<body>



<?php 

$lista=[

 ["id" => 1, "titulo" => "Total Orders", "desc" => "All Regions",  "numero" => 8542],
  ["id" => 2, "titulo" => " Total Revenue", "desc" => "This Quarter", "numero" => "$23,456",],
   ["id" => 3, "titulo" => "Total Customers", "desc" => "Worldwide", "numero" => 5.678,],
    ["id" => 4, "titulo" => "Total Products", "desc" => "Inventory",  "numero" => 1.234,],
     ["id" => 5, "titulo" => "Active Shoppers", "desc" => "Live Now",  "numero" => 179]

];

$listaR =[
    ["id" => 1, "h6" => "Denim Jacket", "small" => "Outerwear ",  "sku" => "DJ-659" , "stock" => "In Stock" , "price" => "$120" ,],
    ["id" => 2, "h6" => "Denim Jacket", "small" => "Outerwear ",  "sku" => "DJ-659" , "stock" => "In Stock" , "price" => "$120" ,],
    ["id" => 3, "h6" => "Denim Jacket", "small" => "Outerwear ",  "sku" => "DJ-659" , "stock" => "In Stock" , "price" => "$120" ,],
    ["id" => 4, "h6" => "Denim Jacket", "small" => "Outerwear ",  "sku" => "DJ-659" , "stock" => "In Stock" , "price" => "$120" ,],
    ["id" => 5, "h6" => "Denim Jacket", "small" => "Outerwear ",  "sku" => "DJ-659" , "stock" => "In Stock" , "price" => "$120" ,],
    





];

function mostrar ($lista) {
foreach ($lista as $valor ) {
    ?>

<div class = "item">
    <div>
        <h3 class = "titulo" ><?=  $valor["titulo"] ?> </h3>
        <p class = "info" ><?=  $valor["desc"] ?> </p>
    </div>


    <div>
        <h2 class="numero"><?=  $valor["numero"]?> </h2>
    </div>
</div>

<?php }     } ?>











<?php 

function mostrarR ($listaR) {
foreach ($listaR as $valor ) {
    ?>

<div class = "itemRopa" >

<img src="01.png" alt="hola">

<div class = "textoRopa">
<h4><?= $valor["h6"] ?> </h4>
<small class = "pequeña"> <?= $valor["small"]?></small>
</div>
<div>
<span class ="textocolor" > SKU:  </span> 
<span> <?= $valor["sku"]?></span>
</div>
<div>

<span class ="textocolor" > Stock:  </span> 
<span> <?= $valor["stock"]?></span>
</div>

<div>

<span class ="textocolor" > Price:  </span> 
<span> <?= $valor["price"]?> </span>
</div>
<div>
    <p class="publicado">published</p>
</div>








</div>

 <?php } }




?>







<section class = "cuadrado">
<?php 

mostrar($lista)

?>
</section>

<main>


<section class ="cajaproductos" >

<h2 class = "tituloProductos">Product list </h2>
<div class ="inputss" >
<div class = "inputs" >


<select name="" id="status">

        
        <option>Status</option>
        <option>Published</option>
        <option>Draft</option>
        <option>Inactive</option>
  

</select>


<select name="" id="categoria">

        
        <option>Category</option>
        <option>Electonics</option>
        <option>Fitness</option>
        <option>Weareables</option>
  

</select>
</div>

<button type="button"> +Add product</button>
</div>




<section class = "ropa" >

<?php

 mostrarR($listaR);

?>






</section>





</section>












</main>














</body>
</html>