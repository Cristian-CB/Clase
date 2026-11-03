
<?php /*


# PHP

Cada ejercicio es independiente.

---

## Ejercicio 1.

Resuelve los siguientes problemas usando solo variables, bucles y condicionales. Puedes usar funciones. NO se pueden usar arrays.

**1.1 - FizzBuzz**
Muestra los números del 1 al 100. Pero si el número es divisible por 3 muestra `Fizz`, si es divisible por 5 muestra `Buzz`, y si es divisible por ambos muestra `FizzBuzz`.

**1.2 — Números primos**
Muestra todos los números primos entre 1 y 100. Nota: Un número es primo si solo es divisible entre 1 y él mismo.

**1.3 — Pirámide**
Dado un número guardado en una variable `$altura`, muestra una pirámide de asteriscos. Para `$altura = 5` el resultado sería:

```
*
**
***
****
*****
```

---

*/



for ($i=0; $i <= 100 ; $i++) { 
switch (true){
    case $i % 3 == 0 && $i % 5 == 0:
        echo "fizzbuzz";
        echo "<br>";
        
        break;
    case $i % 3 == 0 :
        echo "fizz";
        echo "<br>";
        
        break;
    default:
    echo $i;
    echo "<br>";}
}




$contador = 1;
$divisor = 2;
$esPrimo = true;

while ($contador <= 100) {

    $esPrimo = true;
    $divisor = 2;

    if ($contador <= 1) {
        $esPrimo = false;
    }

    while ($divisor < $contador && $esPrimo) {

        if ($contador % $divisor == 0) {
            $esPrimo = false;
        }

        $divisor++;
    }

    if ($esPrimo) {
        echo $contador . " es primo <br>";
    }

    $contador++;
}









<?php

// ==================================================
// 1. COMPROBAR SI UN NUMERO ES PAR O IMPAR
// Pide un número y muestra si es par o impar.
// ==================================================

$num = 7;

if ($num % 2 == 0) {
    echo "Es par";
} else {
    echo "Es impar";
}

echo "<br><br>";


// ==================================================
// 2. COMPROBAR SI UN NUMERO ES POSITIVO, NEGATIVO O CERO
// ==================================================

$num = -5;

if ($num > 0) {
    echo "Es positivo";
} elseif ($num < 0) {
    echo "Es negativo";
} else {
    echo "Es cero";
}

echo "<br><br>";


// ==================================================
// 3. COMPROBAR SI UN NUMERO ES MULTIPLO DE 3
// ==================================================

$num = 15;

if ($num % 3 == 0) {
    echo "Es múltiplo de 3";
} else {
    echo "No es múltiplo de 3";
}

echo "<br><br>";


// ==================================================
// 4. COMPROBAR SI ES MULTIPLO DE 3 Y DE 5
// ==================================================

$num = 30;

if ($num % 3 == 0 && $num % 5 == 0) {
    echo "Es múltiplo de 3 y de 5";
} else {
    echo "No cumple las dos condiciones";
}

echo "<br><br>";


// ==================================================
// 5. MOSTRAR PARES DEL 1 AL 100
// ==================================================

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 6. MOSTRAR IMPARES DEL 1 AL 100
// ==================================================

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 7. MOSTRAR MULTIPLOS DE 5 ENTRE 1 Y 100
// ==================================================

for ($i = 1; $i <= 100; $i++) {
    if ($i % 5 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 8. CONTAR CUANTOS PARES HAY ENTRE 1 Y 100
// ==================================================

$contador = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $contador++;
    }
}

echo "Hay $contador números pares";

echo "<br><br>";


// ==================================================
// 9. SUMAR TODOS LOS NUMEROS PARES DEL 1 AL 100
// ==================================================

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $suma += $i;
    }
}

echo "Suma: $suma";

echo "<br><br>";


// ==================================================
// 10. SUMAR TODOS LOS NUMEROS IMPARES DEL 1 AL 100
// ==================================================

$suma = 0;

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        $suma += $i;
    }
}

echo "Suma: $suma";

echo "<br><br>";


// ==================================================
// 11. MOSTRAR NUMEROS DIVISIBLES ENTRE 3 Y 7
// ==================================================

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 7 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 12. MOSTRAR NUMEROS DIVISIBLES ENTRE 3 O 7
// ==================================================

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 || $i % 7 == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 13. SUMAR NUMEROS DEL 1 HASTA UN NUMERO
// ==================================================

$num = 10;
$suma = 0;

for ($i = 1; $i <= $num; $i++) {
    $suma += $i;
}

echo "Suma: $suma";

echo "<br><br>";


// ==================================================
// 14. TABLA DE MULTIPLICAR DE UN NUMERO
// ==================================================

$num = 7;

for ($i = 1; $i <= 10; $i++) {
    echo "$num x $i = " . ($num * $i) . "<br>";
}

echo "<br>";


// ==================================================
// 15. MOSTRAR TODOS LOS DIVISORES DE UN NUMERO
// ==================================================

$num = 12;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 16. CONTAR LOS DIVISORES DE UN NUMERO
// ==================================================

$num = 12;
$contador = 0;

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $contador++;
    }
}

echo "Tiene $contador divisores";

echo "<br><br>";


// ==================================================
// 17. COMPROBAR SI UN NUMERO ES PRIMO
// ==================================================

$num = 17;
$esPrimo = true;

if ($num <= 1) {
    $esPrimo = false;
}

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $esPrimo = false;
    }
}

if ($esPrimo) {
    echo "Es primo";
} else {
    echo "No es primo";
}

echo "<br><br>";


// ==================================================
// 18. MOSTRAR TODOS LOS PRIMOS DEL 1 AL 100
// ==================================================

for ($i = 2; $i <= 100; $i++) {
    $esPrimo = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $esPrimo = false;
        }
    }

    if ($esPrimo) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 19. CONTAR CUANTOS NUMEROS PRIMOS HAY DEL 1 AL 100
// ==================================================

$contador = 0;

for ($i = 2; $i <= 100; $i++) {
    $esPrimo = true;

    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $esPrimo = false;
        }
    }

    if ($esPrimo) {
        $contador++;
    }
}

echo "Hay $contador números primos";

echo "<br><br>";


// ==================================================
// 20. MOSTRAR NUMEROS PERFECTOS HASTA 1000
// Un número perfecto es igual a la suma de sus divisores,
// sin incluir el propio número.
// ==================================================

for ($i = 1; $i <= 1000; $i++) {
    $suma = 0;

    for ($j = 1; $j < $i; $j++) {
        if ($i % $j == 0) {
            $suma += $j;
        }
    }

    if ($suma == $i) {
        echo $i . " ";
    }
}

echo "<br><br>";


// ==================================================
// 21. CALCULAR EL FACTORIAL DE UN NUMERO
// ==================================================

$num = 5;
$factorial = 1;

for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "Factorial: $factorial";

echo "<br><br>";


// ==================================================
// 22. MOSTRAR LOS PRIMEROS 15 NUMEROS DE FIBONACCI
// ==================================================

$a = 0;
$b = 1;

for ($i = 1; $i <= 15; $i++) {
    echo $a . " ";

    $siguiente = $a + $b;
    $a = $b;
    $b = $siguiente;
}

echo "<br><br>";


// ==================================================
// 23. SUMAR LAS CIFRAS DE UN NUMERO
// Ejemplo: 1234 = 10
// ==================================================

$num = 1234;
$suma = 0;

while ($num > 0) {
    $cifra = $num % 10;
    $suma += $cifra;
    $num = (int)($num / 10);
}

echo "Suma de cifras: $suma";

echo "<br><br>";


// ==================================================
// 24. INVERTIR UN NUMERO
// Ejemplo: 12345 = 54321
// ==================================================

$num = 12345;
$invertido = 0;

while ($num > 0) {
    $cifra = $num % 10;
    $invertido = ($invertido * 10) + $cifra;
    $num = (int)($num / 10);
}

echo "Número invertido: $invertido";

echo "<br><br>";


// ==================================================
// 25. COMPROBAR SI UN NUMERO ES CAPICUA
// Ejemplo: 121 se lee igual al revés.
// ==================================================

$num = 121;
$original = $num;
$invertido = 0;

while ($num > 0) {
    $cifra = $num % 10;
    $invertido = ($invertido * 10) + $cifra;
    $num = (int)($num / 10);
}

if ($original == $invertido) {
    echo "Es capicúa";
} else {
    echo "No es capicúa";
}

echo "<br><br>";


// ==================================================
// 26. CONTAR LAS CIFRAS DE UN NUMERO
// ==================================================

$num = 12345;
$contador = 0;

if ($num == 0) {
    $contador = 1;
} else {
    while ($num > 0) {
        $num = (int)($num / 10);
        $contador++;
    }
}

echo "Tiene $contador cifras";

echo "<br><br>";


// ==================================================
// 27. COMPROBAR SI UN NUMERO ES ARMSTRONG
// Ejemplo: 153 = 1^3 + 5^3 + 3^3
// ==================================================

$num = 153;
$original = $num;
$cifras = strlen((string)$num);
$suma = 0;

while ($num > 0) {
    $cifra = $num % 10;
    $suma += pow($cifra, $cifras);
    $num = (int)($num / 10);
}

if ($suma == $original) {
    echo "Es Armstrong";
} else {
    echo "No es Armstrong";
}

echo "<br><br>";


// ==================================================
// 28. ENCONTRAR EL MAYOR DE TRES NUMEROS
// ==================================================

$a = 15;
$b = 30;
$c = 20;

if ($a >= $b && $a >= $c) {
    echo "El mayor es $a";
} elseif ($b >= $a && $b >= $c) {
    echo "El mayor es $b";
} else {
    echo "El mayor es $c";
}

echo "<br><br>";


// ==================================================
// 29. COMPROBAR SI UN AÑO ES BISIESTO
// Es bisiesto si es divisible entre 400,
// o divisible entre 4 pero no entre 100.
// ==================================================

$anio = 2024;

if ($anio % 400 == 0 || ($anio % 4 == 0 && $anio % 100 != 0)) {
    echo "Es bisiesto";
} else {
    echo "No es bisiesto";
}

echo "<br><br>";


// ==================================================
// 30. CALCULAR LA MEDIA DE VARIOS NUMEROS
// ==================================================

$a = 5;
$b = 8;
$c = 10;

$media = ($a + $b + $c) / 3;

echo "Media: $media";

echo "<br><br>";


// ==================================================
// 31. CONTAR NUMEROS POSITIVOS Y NEGATIVOS
// ==================================================

$positivos = 0;
$negativos = 0;

for ($i = -10; $i <= 10; $i++) {
    if ($i > 0) {
        $positivos++;
    } elseif ($i < 0) {
        $negativos++;
    }
}

echo "Positivos: $positivos<br>";
echo "Negativos: $negativos";

echo "<br><br>";


// ==================================================
// 32. MOSTRAR LOS NUMEROS ENTRE DOS VALORES
// ==================================================

$inicio = 5;
$final = 15;

for ($i = $inicio; $i <= $final; $i++) {
    echo $i . " ";
}

echo "<br><br>";


// ==================================================
// 33. ENCONTRAR EL NUMERO MAYOR DE UNA SERIE
// ==================================================

$numeros = [5, 12, 3, 25, 8];
$mayor = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] > $mayor) {
        $mayor = $numeros[$i];
    }
}

echo "Mayor: $mayor";

echo "<br><br>";


// ==================================================
// 34. ENCONTRAR EL NUMERO MENOR DE UNA SERIE
// ==================================================

$numeros = [5, 12, 3, 25, 8];
$menor = $numeros[0];

for ($i = 1; $i < count($numeros); $i++) {
    if ($numeros[$i] < $menor) {
        $menor = $numeros[$i];
    }
}

echo "Menor: $menor";

echo "<br><br>";


// ==================================================
// 35. CONTAR CUANTOS NUMEROS SON MAYORES QUE 10
// ==================================================

$numeros = [5, 12, 3, 25, 18, 7];
$contador = 0;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] > 10) {
        $contador++;
    }
}

echo "Mayores que 10: $contador";

echo "<br><br>";


// ==================================================
// 36. SUMAR LOS ELEMENTOS DE UN ARRAY
// ==================================================

$numeros = [5, 10, 15, 20];
$suma = 0;

for ($i = 0; $i < count($numeros); $i++) {
    $suma += $numeros[$i];
}

echo "Suma: $suma";

echo "<br><br>";


// ==================================================
// 37. MOSTRAR LOS ELEMENTOS DE UN ARRAY AL REVES
// ==================================================

$numeros = [1, 2, 3, 4, 5];

for ($i = count($numeros) - 1; $i >= 0; $i--) {
    echo $numeros[$i] . " ";
}

echo "<br><br>";


// ==================================================
// 38. BUSCAR UN NUMERO EN UN ARRAY
// ==================================================

$numeros = [4, 8, 12, 16, 20];
$buscar = 12;
$encontrado = false;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] == $buscar) {
        $encontrado = true;
    }
}

if ($encontrado) {
    echo "Número encontrado";
} else {
    echo "Número no encontrado";
}

echo "<br><br>";


// ==================================================
// 39. CONTAR PARES E IMPARES DE UN ARRAY
// ==================================================

$numeros = [2, 5, 8, 11, 14, 17];

$pares = 0;
$impares = 0;

for ($i = 0; $i < count($numeros); $i++) {
    if ($numeros[$i] % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

echo "Pares: $pares<br>";
echo "Impares: $impares";

echo "<br><br>";


// ==================================================
// 40. ORDENAR UN ARRAY DE MENOR A MAYOR
// ==================================================

$numeros = [8, 3, 10, 1, 5];

for ($i = 0; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros) - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temporal = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temporal;
        }
    }
}

for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i] . " ";
}

?>

<?php

// 1. Mostrar los números primos entre 100 y 200
for ($num = 100; $num <= 200; $num++) {
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 2. Mostrar los primeros 20 números primos
$num = 2;
$encontrados = 0;

while ($encontrados < 20) {
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        echo $num . " ";
        $encontrados++;
    }

    $num++;
}
echo "<br><br>";


// 3. Contar los números primos entre 1 y 500
$contadorPrimos = 0;

for ($num = 1; $num <= 500; $num++) {
    $divisores = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divisores++;
        }
    }

    if ($divisores == 2) {
        $contadorPrimos++;
    }
}

echo "Hay " . $contadorPrimos . " primos";
echo "<br><br>";


// 4. Mostrar los números que tienen exactamente 3 divisores
for ($num = 1; $num <= 100; $num++) {
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 3) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 5. Mostrar el número con más divisores entre 1 y 100
$mayorDivisores = 0;
$numero = 0;

for ($num = 1; $num <= 100; $num++) {
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador > $mayorDivisores) {
        $mayorDivisores = $contador;
        $numero = $num;
    }
}

echo "Número: " . $numero;
echo "<br><br>";


// 6. Mostrar el número primo más grande menor que 100
$ultimoPrimo = 0;

for ($num = 2; $num < 100; $num++) {
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        $ultimoPrimo = $num;
    }
}

echo $ultimoPrimo;
echo "<br><br>";


// 7. Comprobar si dos números son primos entre sí
$a = 14;
$b = 25;
$primosEntreSi = true;

for ($i = 2; $i <= $a && $i <= $b; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $primosEntreSi = false;
    }
}

if ($primosEntreSi) {
    echo "Son primos entre sí";
} else {
    echo "No son primos entre sí";
}
echo "<br><br>";


// 8. Mostrar los números abundantes entre 1 y 100
for ($num = 1; $num <= 100; $num++) {
    $suma = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $suma += $i;
        }
    }

    if ($suma > $num) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 9. Mostrar los números deficientes entre 1 y 100
for ($num = 1; $num <= 100; $num++) {
    $suma = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $suma += $i;
        }
    }

    if ($suma < $num) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 10. Mostrar los números perfectos entre 1 y 10000
for ($num = 1; $num <= 10000; $num++) {
    $suma = 0;

    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $suma += $i;
        }
    }

    if ($suma == $num) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 11. Contar las cifras pares de un número
$num = 583624;
$contador = 0;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra % 2 == 0) {
        $contador++;
    }

    $num = (int)($num / 10);
}

echo "Cifras pares: " . $contador;
echo "<br><br>";


// 12. Contar las cifras impares de un número
$num = 583624;
$contador = 0;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra % 2 != 0) {
        $contador++;
    }

    $num = (int)($num / 10);
}

echo "Cifras impares: " . $contador;
echo "<br><br>";


// 13. Sumar las cifras pares de un número
$num = 583624;
$suma = 0;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra % 2 == 0) {
        $suma += $cifra;
    }

    $num = (int)($num / 10);
}

echo "Suma: " . $suma;
echo "<br><br>";


// 14. Sumar las cifras impares de un número
$num = 583624;
$suma = 0;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra % 2 != 0) {
        $suma += $cifra;
    }

    $num = (int)($num / 10);
}

echo "Suma: " . $suma;
echo "<br><br>";


// 15. Encontrar la cifra más grande
$num = 583624;
$mayor = 0;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra > $mayor) {
        $mayor = $cifra;
    }

    $num = (int)($num / 10);
}

echo "Cifra mayor: " . $mayor;
echo "<br><br>";


// 16. Encontrar la cifra más pequeña
$num = 583624;
$menor = 9;

while ($num > 0) {
    $cifra = $num % 10;

    if ($cifra < $menor) {
        $menor = $cifra;
    }

    $num = (int)($num / 10);
}

echo "Cifra menor: " . $menor;
echo "<br><br>";


// 17. Comprobar si un número es capicúa
$num = 12321;
$original = $num;
$invertido = 0;

while ($num > 0) {
    $cifra = $num % 10;
    $invertido = $invertido * 10 + $cifra;
    $num = (int)($num / 10);
}

if ($original == $invertido) {
    echo "Es capicúa";
} else {
    echo "No es capicúa";
}
echo "<br><br>";


// 18. Comprobar si un número es Armstrong
$num = 153;
$original = $num;
$suma = 0;
$cifras = strlen((string)$num);

while ($num > 0) {
    $cifra = $num % 10;
    $suma += $cifra ** $cifras;
    $num = (int)($num / 10);
}

if ($suma == $original) {
    echo "Es Armstrong";
} else {
    echo "No es Armstrong";
}
echo "<br><br>";


// 19. Mostrar todos los números Armstrong entre 1 y 1000
for ($num = 1; $num <= 1000; $num++) {
    $original = $num;
    $suma = 0;
    $cifras = strlen((string)$num);
    $temporal = $num;

    while ($temporal > 0) {
        $cifra = $temporal % 10;
        $suma += $cifra ** $cifras;
        $temporal = (int)($temporal / 10);
    }

    if ($suma == $original) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 20. Comprobar si un número es abundante
$num = 18;
$suma = 0;

for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
        $suma += $i;
    }
}

if ($suma > $num) {
    echo "Es abundante";
} else {
    echo "No es abundante";
}
echo "<br><br>";


// 21. Comprobar si un número es deficiente
$num = 10;
$suma = 0;

for ($i = 1; $i < $num; $i++) {
    if ($num % $i == 0) {
        $suma += $i;
    }
}

if ($suma < $num) {
    echo "Es deficiente";
} else {
    echo "No es deficiente";
}
echo "<br><br>";


// 22. Mostrar los números que son cuadrados perfectos entre 1 y 100
for ($num = 1; $num <= 100; $num++) {
    for ($i = 1; $i <= $num; $i++) {
        if ($i * $i == $num) {
            echo $num . " ";
        }
    }
}
echo "<br><br>";


// 23. Comprobar si un número es cuadrado perfecto
$num = 64;
$esCuadrado = false;

for ($i = 1; $i <= $num; $i++) {
    if ($i * $i == $num) {
        $esCuadrado = true;
    }
}

if ($esCuadrado) {
    echo "Es cuadrado perfecto";
} else {
    echo "No es cuadrado perfecto";
}
echo "<br><br>";


// 24. Mostrar los números que son potencias de 2 hasta 1000
$potencia = 1;

while ($potencia <= 1000) {
    echo $potencia . " ";
    $potencia = $potencia * 2;
}
echo "<br><br>";


// 25. Mostrar los múltiplos comunes de 4 y 6 entre 1 y 200
for ($num = 1; $num <= 200; $num++) {
    if ($num % 4 == 0 && $num % 6 == 0) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 26. Calcular el máximo común divisor de dos números
$a = 24;
$b = 36;
$mcd = 1;

for ($i = 1; $i <= $a && $i <= $b; $i++) {
    if ($a % $i == 0 && $b % $i == 0) {
        $mcd = $i;
    }
}

echo "MCD: " . $mcd;
echo "<br><br>";


// 27. Calcular el mínimo común múltiplo de dos números
$a = 12;
$b = 18;
$num = 1;

while ($num % $a != 0 || $num % $b != 0) {
    $num++;
}

echo "MCM: " . $num;
echo "<br><br>";


// 28. Mostrar los números cuya suma de cifras sea 10
for ($num = 1; $num <= 500; $num++) {
    $temporal = $num;
    $suma = 0;

    while ($temporal > 0) {
        $cifra = $temporal % 10;
        $suma += $cifra;
        $temporal = (int)($temporal / 10);
    }

    if ($suma == 10) {
        echo $num . " ";
    }
}
echo "<br><br>";


// 29. Comprobar si un número es divisible por la suma de sus cifras
$num = 18;
$temporal = $num;
$suma = 0;

while ($temporal > 0) {
    $cifra = $temporal % 10;
    $suma += $cifra;
    $temporal = (int)($temporal / 10);
}

if ($suma != 0 && $num % $suma == 0) {
    echo "Es divisible por la suma de sus cifras";
} else {
    echo "No es divisible por la suma de sus cifras";
}
echo "<br><br>";


// 30. Encontrar el siguiente número primo después de uno dado
$num = 50;
$encontrado = false;

while (!$encontrado) {
    $num++;
    $contador = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $contador++;
        }
    }

    if ($contador == 2) {
        $encontrado = true;
    }
}

echo "Siguiente primo: " . $num;

?>



