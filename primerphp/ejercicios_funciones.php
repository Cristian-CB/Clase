<?php

/*
 *
 * Ejercicio 1
 *
 * ------------------------------
Crear un array CLAVE-VALOR que se llame productos. Este elemento tendrá dentro arrays. Cada array interno tendrá una estructura id, name, price, stock, category. Mínimo 5 items.

Luego, crea otro array llamado carrito. Este array tendrá otros arrays internos. Cada array interno tendrá lo siguiente:

$cart = array(
    ["product_id" => 1, "qty" => 2],
    ["product_id" => 2, "qty" => 5],
    ["product_id" => 3, "qty" => 1],
);

- listar el contenido de productos.

- listar productos sin stock.

- listar solo los productos (info de productos) que estén añadidos en el carrito (cart).

- Listar el nombre y el precio total a pagar de los productos que estén en el carrito.
*/





$cart = array(["product_id" => 1 ,  "qty" => 2],["product_id" => 2 , "qty" => 2],[
"product_id" => 3 ,"qty" => 2]);
    


$items = [
    ["id" => 1, "nombre" => "Cristian", "precio" => 10, "stock"=> 3 , "categoria" => "Servicio de asistencia"],
    ["id" => 2, "nombre" => "Juan", "precio" => 25,"stock"=> 4 , "categoria" => "Servicio de limpieza"],
    ["id" => 3, "nombre" => "Ana", "precio" => 15, "stock"=> 0 , "categoria" =>"Servicio de transporte"],
    ["id" => 4, "nombre" => "Lucía", "precio" => 30, "stock"=> 2 , "categoria" =>"Servicio de reparación"],
    ["id" => 5, "nombre" => "Carlos", "precio" => 20, "stock"=> 100 , "categoria" =>"Servicio de entrega"],
 
];


function mostrarProductos ($items,$carro){
    $keys = array_keys($items);

   


    echo " <b>Contenido de productos   </b><br>";

    foreach ($items as $item) {

        foreach ($item as $clave => $valor) {

            echo $clave . ": " . $valor . "<br>";
        }

        echo "<br>";
    }

 
echo " <b> Productos sin stock  </b> <br>";
foreach( $items as $item){

    if($item["stock"]==0){
        foreach($item as $clave => $valor)
        
        echo $clave . ": " . $valor . "<br>";
        echo "<br>";
        }}



echo "<b> Productos que esten en el carrito </b>   <br> ";
foreach( $items as $item){
    foreach($carro as $producto){
if ($item["id"]== $producto["product_id"]) {
    foreach($item as $clave => $valor){
        echo $clave . ": " . $valor . "<br>";
        
}}}}

$totalPrecio = 0;
echo " <b>nombre y el precio total a pagar (Carrito)  </b> <br>";
foreach($items as $item ){
    foreach ($carro as $car){
if ($item["id"]== $car["product_id"]) {
       foreach($item as $clave =>$valor){
        echo $clave . " : " . $valor. "<br>";
        $totalPrecio +=$car["qty"] * $item["precio"];
       

}}}}
echo $totalPrecio;


}





mostrarProductos($items, $cart);

/*
 *
 * Ejercicio 2
 *
 * ------------------------------
Tenemos un array llamado $users o $usuarios. este array es bidimensional. La estructura de los arrays internos tiene username, password, role (ADMIN o USER), isActive (true o false).

cuando Pongáis el isActive ponedlo como json_encode(true o false).

Cread una variable array, que tendrá username y un password.

    - Comprobar si el usuario existe en nuestra bbdd ($users). Si no existe al final de toda la comprobación habrá que poner un mensaje que diga "Usuario no existe".
    - Si existe, y la contraseña es incorrecta, poned "Contraseña incorrecta".
    - Si todo coincide, poned "Bienvenido [USERNAME]. Rol [ROL]".
    - Luego crear un array unidimensional, cuya posición 0 sea "Acceso total", la posición 1 será "Acceso limitado".

 *
 * */

$users = [
    [
        "username" => "cristian",
        "password" => "1234",
        "role" => "ADMIN",
        "isActive" => json_encode(true)
    ],
    [
        "username" => "juan",
        "password" => "abcd",
        "role" => "USER",
        "isActive" => json_encode(true)
    ],
    [
        "username" => "ana",
        "password" => "5678",
        "role" => "USER",
        "isActive" => json_encode(false)
    ],
    [
        "username" => "lucia",
        "password" => "qwerty",
        "role" => "ADMIN",
        "isActive" => json_encode(true)
    ],
    [
        "username" => "carlos",
        "password" => "pass123",
        "role" => "USER",
        "isActive" => json_encode(true)
    ]
];


$usuario = [
    "username" => "cristian",
    "password" => "1234"
];


$accesos = [
    "Acceso total",
    "Acceso limitado"
];



echo "<br>";
$password = FALSE;
foreach($users as $numero){
    if($numero["username"] === $usuario["username"]){

        echo "usuario encontrado <br>" ;
        $password =TRUE;
        if ($numero["password"] !== $usuario["password"]) {
            echo "incorrect password <br> "; 

            
        }
        else{
            echo "password is correct <br>";
            echo "Bienvenido " .$usuario["username"]. " con el rol de: " . $numero["role"];
        }

    
    }
    




}
if (!$password) {
    echo "usuario no encontrado <br> "; 
}











