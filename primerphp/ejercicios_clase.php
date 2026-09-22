<?php




/*
 * EJERCICIO 1
 * 
 * --------------------------- 
 * 
 * Crea un programa en PHP que controle el acceso de una persona a un gimnasio.
 * El programa debe tener las siguientes variables:
 * - Nombre de la persona
 * - Edad
 * - Típo de membresía (basic, premium o vip)
 * - Si tiene la cuota pagada
 * - Hora actual
 * 
 * El programa debe de comprobar
 * 1. La persona debe tener al menor 16 años
 * 2. Debe tener la cuota pagada 

10:39

Camilo says:* 3. Si la membresía es basic, solamente puede acceder entre las 08:00 y las 18:00
 * 4. Si es premium puede acceder entre las 07:00 y las 21:00.
 * 5. Si es vip, puede acceder durante todo el horario de apertura, de 06:00 a 23:00
 *
 * Si puede acceder, muestra un mensaje indicando su nombre y tipo de membresía.
 * S no puede acceder, muestra el motivo por el que se le ha denegado el acceso.
 *
 * Condición: Utiliza operadores lógicos para combinar las diferentes condiciones
 *
 * */ 




$persona = ["cristian",17,"basic", 17 , true ];
function comprobarEdadyCuota($persona){


if($persona[1]<=16){
echo "acceso denegado (Edad)";
return false;}
               

if(!$persona[4]){
echo "acceso denegado (pago incompleto)";
return false;}
               
                

switch ($persona[2]) {
    case 'basic':
            if($persona[3]>=8 and $persona[3]<= 18 ){echo "Accediste";}
                else{$acceso = false;
                echo "horario incumplido";}

        break;
    case 'premium':
            if($persona[3]>=7 and $persona[3]<= 21 ){echo "Accediste";}
                else{$acceso = false; echo "horario incumplido";}
        break;
    case 'vip':
       if($persona[3]>=6 and $persona[3]<= 23 ){echo "Accediste";}
                else{$acceso = false;
                echo "horario incumplido";}
        break;
    
    default:
        
        break;
}
}





comprobarEdadyCuota($persona)

?>
<?php
/*
 * EJERCICIO 2
 *
 * ---------------------------
 *
 * Una tienda online quiere determinar las condiciones de envío de un pedido.
 * 
 * Crea las siguientes variables:
 * - Nombre del cliente
 * - Importe de la compra
 * - Si el cliente es miembro (true / false)
 * - Código de descuento introducido por el cliente (esto hacedlo manual)
 * 
 * El programa debe de aplicar las siguientes reglas
 * 
 * Envío: 

    10:45

    Camilo says:* 1. Si la compra es igual o superior a PRECIO_ENVIO (el valor es 100), el envío es gratuito
 * 2. Si es inferior a PRECIO_ENVIO, el envío cuesta 6.90€.
 * 3. Si el cliente es miembro, no tendrás en cuenta el PRECIO_ENVIO y el envío siempre será gratuito.
 *
 *Descuento:
 *  Si el código introducido es.
 * - "WELCOME10"            -> 10% de descuento
 * - "VIP20"                -> 20% de descuento
 * - "SUMMER15"             -> 15% de descuento
 * - Cualquier otro código 

    10:45

    Camilo says:* - Cualquier otro código  -> sin descuento
 * - Si no se introduce ningún código, debe de utilizarse un valor por defecto haciendo uso de ??.
 *
 * El programa debe de mostrar (Ejemplo de salida):
 * - Cliente: Carlos
 * - Compra: 125€
 * - Código de descuento: VIP20
 * - Descuento: 20%
 * - Coste del envío: 0€
 * - Total: 100€
 *
 *
 * IMPORTANTE: Primero se aplica el descuento y después se calcula el envío
 * */ 




$precioEnvio=100;
$persona = ["cristian",17, false ,"VIP20"];
$precio = $persona[1];

function calcularDescuento ($persona){

$persona[3]=="" ? $persona[3]="WELCOME10":null;


switch ($persona[3]) {
    case 'WELCOME10':

        $persona[1]-= $persona[1] * 10 /100;
        
        break;
    case 'VIP20':
        $persona[1]-= $persona[1]* 20 /100;
        break;
    case 'SUMMER15':

        $persona[1]-= $persona[1]* 15 / 100;
        
        break;
    
   
}
return $persona;
}

$persona = calcularDescuento($persona) ;


function SumaPrecioEnvio ($persona){
$precioEnvio = 100;
$envio = 6.99;
if ($precioEnvio <= $persona [1] || $persona[2] ) {
    $envio = 0;
    
    
    
}else{
    $persona[1]+=$envio;
   

}
return $envio;
}

 $envio =SumaPrecioEnvio($persona);

function mostrar ($persona,$precio,$envio){
    

echo "<br>";
echo "cliente " . $persona[0]. "<br>" ;
echo "precio " . $precio. "<br>"  ;
echo "codigo de descuento ". $persona[3]. "<br>" ;
echo "coste del envio " . $envio. " <br>" ;
echo " total " . $persona[1] + $envio. "<br>" ;
}






mostrar($persona,$precio,$envio)







?>


