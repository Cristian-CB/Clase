<?php
/*



Crea las siguientes funciones y prueba cada una con al menos dos ejemplos:

**3.1** `calcularDescuento($precio, $porcentaje)` — devuelve el precio final tras aplicar el descuento. 
Si el porcentaje es mayor que 100 o menor que 0 devuelve el precio original sin cambios.

**3.2** `contarVocales($texto)` — devuelve cuántas vocales tiene un texto, sin distinguir entre mayúsculas y minúsculas.

**3.3** `resumir($texto, $limite)` — si el texto supera el número de caracteres indicado lo corta y añade `"..."`. Si no lo supera lo devuelve tal cual.

---



*/

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            .precio{color: red;}
        
        </style>
        
    </head>

    <body>
        



    <?php
    function calcularDescuento($precio,$porcentaje){
    if ($porcentaje>100 || $porcentaje < 0 ) {
        return $precio;
    
    }
    else {
        $precio-=$precio*$porcentaje/100;
        return $precio;
    }



    }

    ?>

    <p class = "precio" > <?= calcularDescuento(50,20) ?> </p>  


    <?php

    function ContarVocales($palabra){
    $vocales = ["A","E","I","O","U"];
    $palabra=strtoupper($palabra);
    $palabra = str_split($palabra);
    $contador = 0;
    for ($i=0; $i <count($palabra); $i++) { 

        if (in_array($palabra[$i],$vocales)) {
           $contador +=1;
        }
        # code...
    }
    return $contador;
   


    }
    


    function resumir($palabra){
    
    

    $contador = 0;
    
        if (strlen($palabra)>20) {
           return substr($palabra,0,20)."...";
        }
       
    }
    
   


    

 ?>
<p> <?=resumir("fasddfasdfasdafasdfsadfsadfaswdfasdaf")?> </p>
 <p><?= ContarVocales("holaAAAAAA")?></p>













 
<?php

// ==========================================
// 3.1 CALCULAR DESCUENTO
// Devuelve el precio con descuento.
// Si el porcentaje no está entre 0 y 100,
// devuelve el precio original.
// ==========================================

function calcularDescuento($precio, $porcentaje) {

    if ($porcentaje < 0 || $porcentaje > 100) {
        return $precio;
    }

    return $precio - ($precio * $porcentaje / 100);
}

echo calcularDescuento(50, 20) . "<br>";
echo calcularDescuento(100, 50) . "<br>";


// ==========================================
// 3.2 CONTAR VOCALES
// Devuelve el número de vocales de un texto.
// ==========================================

function contarVocales($texto) {

    $texto = strtolower($texto);
    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {

        if (
            $texto[$i] == "a" ||
            $texto[$i] == "e" ||
            $texto[$i] == "i" ||
            $texto[$i] == "o" ||
            $texto[$i] == "u"
        ) {
            $contador++;
        }
    }

    return $contador;
}

echo contarVocales("Cristian") . "<br>";
echo contarVocales("HOLA MUNDO") . "<br>";


// ==========================================
// 3.3 RESUMIR TEXTO
// Si supera el límite, corta el texto y añade ...
// ==========================================

function resumir($texto, $limite) {

    if (strlen($texto) > $limite) {
        return substr($texto, 0, $limite) . "...";
    } else {
        return $texto;
    }
}

echo resumir("Hola me llamo Cristian", 10) . "<br>";
echo resumir("Hola", 10) . "<br>";


// ==========================================
// 3.4 INVERTIR TEXTO
// Devuelve el texto al revés.
// ==========================================

function invertirTexto($texto) {

    $resultado = "";

    for ($i = strlen($texto) - 1; $i >= 0; $i--) {
        $resultado .= $texto[$i];
    }

    return $resultado;
}

echo invertirTexto("Hola") . "<br>";
echo invertirTexto("PHP") . "<br>";


// ==========================================
// 3.5 CONTAR PALABRAS
// Devuelve cuántas palabras tiene un texto.
// ==========================================

function contarPalabras($texto) {

    $palabras = explode(" ", $texto);

    return count($palabras);
}

echo contarPalabras("Hola como estas") . "<br>";
echo contarPalabras("Me gusta PHP") . "<br>";


// ==========================================
// 3.6 COMPROBAR PALÍNDROMO
// Devuelve true si se lee igual al revés.
// ==========================================

function esPalindromo($texto) {

    $texto = strtolower($texto);

    if ($texto == strrev($texto)) {
        return true;
    } else {
        return false;
    }
}

var_dump(esPalindromo("radar"));
echo "<br>";
var_dump(esPalindromo("coche"));
echo "<br>";


// ==========================================
// 3.7 CONTAR LETRAS
// Devuelve el número de caracteres sin espacios.
// ==========================================

function contarLetras($texto) {

    $texto = str_replace(" ", "", $texto);

    return strlen($texto);
}

echo contarLetras("Hola mundo") . "<br>";
echo contarLetras("Cristian") . "<br>";


// ==========================================
// 3.8 CAMBIAR A MAYÚSCULAS
// Devuelve el texto en mayúsculas.
// ==========================================

function ponerMayusculas($texto) {

    return strtoupper($texto);
}

echo ponerMayusculas("hola") . "<br>";
echo ponerMayusculas("cristian") . "<br>";


// ==========================================
// 3.9 COMPROBAR NÚMERO PAR
// Devuelve true si es par.
// ==========================================

function esPar($numero) {

    if ($numero % 2 == 0) {
        return true;
    } else {
        return false;
    }
}

var_dump(esPar(8));
echo "<br>";
var_dump(esPar(7));
echo "<br>";


// ==========================================
// 3.10 CALCULAR FACTORIAL
// Devuelve el factorial de un número.
// ==========================================

function factorial($numero) {

    if ($numero < 0) {
        return null;
    }

    $resultado = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $resultado *= $i;
    }

    return $resultado;
}

echo factorial(5) . "<br>";
echo factorial(4) . "<br>";


// ==========================================
// 3.11 NÚMERO PRIMO
// Devuelve true si es primo.
// ==========================================

function esPrimo($numero) {

    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i < $numero; $i++) {

        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

var_dump(esPrimo(7));
echo "<br>";
var_dump(esPrimo(10));
echo "<br>";


// ==========================================
// 3.12 MAYOR DE DOS NÚMEROS
// Devuelve el número mayor.
// ==========================================

function mayor($a, $b) {

    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

echo mayor(10, 20) . "<br>";
echo mayor(50, 30) . "<br>";


// ==========================================
// 3.13 CALCULAR MEDIA
// Devuelve la media de tres números.
// ==========================================

function calcularMedia($a, $b, $c) {

    return ($a + $b + $c) / 3;
}

echo calcularMedia(5, 7, 9) . "<br>";
echo calcularMedia(10, 8, 6) . "<br>";


// ==========================================
// 3.14 CONTAR UN CARÁCTER
// Devuelve cuántas veces aparece una letra.
// ==========================================

function contarCaracter($texto, $letra) {

    $contador = 0;

    for ($i = 0; $i < strlen($texto); $i++) {

        if ($texto[$i] == $letra) {
            $contador++;
        }
    }

    return $contador;
}

echo contarCaracter("banana", "a") . "<br>";
echo contarCaracter("Cristian", "i") . "<br>";


// ==========================================
// 3.15 ELIMINAR ESPACIOS
// Devuelve el texto sin espacios.
// ==========================================

function eliminarEspacios($texto) {

    return str_replace(" ", "", $texto);
}

echo eliminarEspacios("Hola mundo") . "<br>";
echo eliminarEspacios("PHP es facil") . "<br>";


// ==========================================
// 3.16 CALCULAR POTENCIA
// Devuelve la base elevada al exponente.
// ==========================================

function calcularPotencia($base, $exponente) {

    $resultado = 1;

    for ($i = 0; $i < $exponente; $i++) {
        $resultado *= $base;
    }

    return $resultado;
}

echo calcularPotencia(2, 3) . "<br>";
echo calcularPotencia(5, 2) . "<br>";


// ==========================================
// 3.17 SUMAR NÚMEROS DE UN ARRAY
// Devuelve la suma de todos sus elementos.
// ==========================================

function sumarArray($numeros) {

    $suma = 0;

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    return $suma;
}

echo sumarArray([1, 2, 3, 4]) . "<br>";
echo sumarArray([10, 20, 30]) . "<br>";


// ==========================================
// 3.18 ENCONTRAR EL MAYOR DE UN ARRAY
// Devuelve el número más grande.
// ==========================================

function encontrarMayor($numeros) {

    if (count($numeros) == 0) {
        return null;
    }

    $mayor = $numeros[0];

    foreach ($numeros as $numero) {

        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }

    return $mayor;
}

echo encontrarMayor([4, 9, 2, 15]) . "<br>";
echo encontrarMayor([20, 5, 30, 10]) . "<br>";


// ==========================================
// 3.19 CONTAR NÚMEROS PARES DE UN ARRAY
// Devuelve cuántos números pares contiene.
// ==========================================

function contarPares($numeros) {

    $contador = 0;

    foreach ($numeros as $numero) {

        if ($numero % 2 == 0) {
            $contador++;
        }
    }

    return $contador;
}

echo contarPares([1, 2, 3, 4, 5, 6]) . "<br>";
echo contarPares([2, 4, 8, 10]) . "<br>";


// ==========================================
// 3.20 BUSCAR ELEMENTO
// Devuelve true si existe en el array.
// ==========================================

function buscarElemento($array, $valor) {

    foreach ($array as $elemento) {

        if ($elemento == $valor) {
            return true;
        }
    }

    return false;
}

var_dump(buscarElemento([1, 2, 3, 4], 3));
echo "<br>";
var_dump(buscarElemento([5, 6, 7], 9));
echo "<br>";


// ==========================================
// 3.21 CALCULAR IVA
// Devuelve el precio con IVA.
// ==========================================

function calcularIVA($precio, $iva) {

    return $precio + ($precio * $iva / 100);
}

echo calcularIVA(100, 21) . "<br>";
echo calcularIVA(50, 10) . "<br>";


// ==========================================
// 3.22 COMPROBAR EDAD
// Devuelve si es mayor de edad.
// ==========================================

function comprobarEdad($edad) {

    if ($edad >= 18) {
        return "Mayor de edad";
    } else {
        return "Menor de edad";
    }
}

echo comprobarEdad(20) . "<br>";
echo comprobarEdad(15) . "<br>";


// ==========================================
// 3.23 CONTAR DÍGITOS
// Devuelve cuántas cifras tiene un número.
// ==========================================

function contarDigitos($numero) {

    return strlen((string) abs($numero));
}

echo contarDigitos(12345) . "<br>";
echo contarDigitos(89) . "<br>";


// ==========================================
// 3.24 SUMAR DÍGITOS
// Devuelve la suma de las cifras de un número.
// ==========================================

function sumarDigitos($numero) {

    $numero = (string) abs($numero);
    $suma = 0;

    for ($i = 0; $i < strlen($numero); $i++) {
        $suma += (int) $numero[$i];
    }

    return $suma;
}

echo sumarDigitos(123) . "<br>";
echo sumarDigitos(456) . "<br>";


// ==========================================
// 3.25 REPETIR TEXTO
// Devuelve un texto repetido N veces.
// ==========================================

function repetirTexto($texto, $veces) {

    $resultado = "";

    for ($i = 0; $i < $veces; $i++) {
        $resultado .= $texto;
    }

    return $resultado;
}

echo repetirTexto("Hola ", 3) . "<br>";
echo repetirTexto("PHP ", 5) . "<br>";


// ==========================================
// 3.26 COMPROBAR CONTRASEÑA
// Devuelve true si tiene al menos 8 caracteres.
// ==========================================

function validarContrasena($contrasena) {

    if (strlen($contrasena) >= 8) {
        return true;
    } else {
        return false;
    }
}

var_dump(validarContrasena("cristian123"));
echo "<br>";
var_dump(validarContrasena("hola"));
echo "<br>";


// ==========================================
// 3.27 OBTENER PRIMERA LETRA
// Devuelve la primera letra del texto.
// ==========================================

function primeraLetra($texto) {

    if (strlen($texto) == 0) {
        return "";
    }

    return substr($texto, 0, 1);
}

echo primeraLetra("Cristian") . "<br>";
echo primeraLetra("PHP") . "<br>";


// ==========================================
// 3.28 OBTENER ÚLTIMA LETRA
// Devuelve la última letra del texto.
// ==========================================

function ultimaLetra($texto) {

    if (strlen($texto) == 0) {
        return "";
    }

    return substr($texto, -1);
}

echo ultimaLetra("Cristian") . "<br>";
echo ultimaLetra("PHP") . "<br>";


// ==========================================
// 3.29 CALCULAR PRECIO MEDIO DE UN ARRAY
// Devuelve la media de los números.
// ==========================================

function mediaArray($numeros) {

    if (count($numeros) == 0) {
        return 0;
    }

    $suma = 0;

    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    return $suma / count($numeros);
}

echo mediaArray([10, 20, 30]) . "<br>";
echo mediaArray([5, 15, 25, 35]) . "<br>";


// ==========================================
// 3.30 CONTAR NÚMEROS MAYORES
// Devuelve cuántos elementos superan el límite.
// ==========================================

function contarMayores($numeros, $limite) {

    $contador = 0;

    foreach ($numeros as $numero) {

        if ($numero > $limite) {
            $contador++;
        }
    }

    return $contador;
}

echo contarMayores([5, 10, 15, 20], 10) . "<br>";
echo contarMayores([1, 2, 30, 40, 50], 20) . "<br>";

?>

    </body>
    </html>


