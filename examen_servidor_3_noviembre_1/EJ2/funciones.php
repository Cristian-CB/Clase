<?php

include("./datos.php");

/*



## Funciones a programar

Todas se escriben en `funciones.php` y reciben el array de productos como parámetro. **No pueden usar variables globales.**

| Función | Qué devuelve |
|---|---|
| `valorInventario($productos)` | La suma de `precio × stock` de todos los productos |
| `productoMasCaro($productos)` | El producto (el array completo) con el precio más alto. Si el array está vacío, devuelve `null` |
| `agruparPorCategoria($productos)` | Un array con cada categoría como clave y el número de productos que tiene como valor. Ejemplo: `["discos" => 3, "memorias" => 2]` |
| `productosSinStock($productos)` | Un array solo con los productos cuyo stock es 0 |




| `ordenarPorPrecio($productos)` | Un array con todos los productos ordenados de menor a mayor precio |

Condiciones:

- `ordenarPorPrecio` no debe modificar el array original: `$productos` se muestra sin ordenar en la primera tabla.
- Con un array vacío, `valorInventario` devuelve 0 y el resto de funciones que devuelven arrays devuelven un array vacío. Ninguna debe provocar avisos de PHP.

---

*/



function valorInventario($productos){

$suma=0;
if (!empty($productos)) {
    # code...

foreach($productos as $producto){

$suma+=$producto["stock"]*$producto["precio"];

}
return $suma;}
else{
    return 0;
}


}

function productoMasCaro($productos){

    if(!empty($productos)){
    $masCaro = $productos[0];
foreach($productos as $producto){
if ($masCaro["precio"]<$producto["precio"] ) {
    $masCaro=$producto;
}}
return $masCaro;
}else{return null;}



}

function agruparPorCategoria($productos){

$porCategoria = [];
foreach ($productos as $producto) {
    $categoria = $producto["categoria"];
    $porCategoria[$categoria] = ($porCategoria[$categoria] ?? 0) + 1;   // si no existe, 

}
return $porCategoria;

}

function productosSinStock($productos){
    $sinStock=[];
    foreach ($productos as $producto) {
        if ($producto["stock"]==0) {
            # code...
            array_push($sinStock,$producto);
        }
    }
    return $sinStock;

}

function ordenarPorPrecio($productos){
    // Menor a mayor
    $ordenados = $productos;
usort($productos, function($a, $b) {
    return $a["precio"] <=> $b["precio"];
});


return $productos;
}
