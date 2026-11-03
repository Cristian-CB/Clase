
<?php

// 1. CUADRADO
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 2. RECTÁNGULO
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 3. TRIÁNGULO CRECIENTE
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 4. TRIÁNGULO DECRECIENTE
for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 5. TRIÁNGULO INVERTIDO CON ESPACIOS
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 5; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br>";
}


// 6. TRIÁNGULO ALINEADO A LA DERECHA
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 7. PIRÁMIDE
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// 8. PIRÁMIDE INVERTIDA
for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// 9. PIRÁMIDE HUECA
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        if ($j == 1 || $j == (2 * $i - 1) || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 10. TRIÁNGULO DE NÚMEROS
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}


// 11. TRIÁNGULO DE NÚMEROS REPETIDOS
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}


// 12. TRIÁNGULO DE LETRAS
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo chr(65 + $j);
    }
    echo "<br>";
}


// 13. ROMBO COMPLETO
for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// 14. ROMBO HUECO
for ($i = 1; $i <= 9; $i++) {
    $distancia = 4 - abs(5 - $i);
    $izquierda = 5 - $distancia;
    $derecha = 5 + $distancia;

    for ($j = 1; $j <= 9; $j++) {
        if ($j == $izquierda || $j == $derecha) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 15. RELOJ DE ARENA
for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 2; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// 16. CUADRADO HUECO
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 17. RECTÁNGULO HUECO
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        if ($i == 1 || $i == 4 || $j == 1 || $j == 7) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 18. TRIÁNGULO HUECO
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j == 1 || $j == $i || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 19. CRUZ
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 3 || $j == 3) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 20. X
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j || $i + $j == 6) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// 21. DOBLE TRIÁNGULO
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 4; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 22. DOS PIRÁMIDES
for ($i = 1; $i <= 4; $i++) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    for ($j = 1; $j <= (10 - 2 * $i); $j++) {
        echo "&nbsp;";
    }

    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// 23. FLECHA
for ($i = 1; $i <= 3; $i++) {
    for ($j = 3; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 4; $i++) {
    echo "&nbsp;&nbsp;*<br>";
}


// 24. CORAZÓN
echo "&nbsp;**&nbsp;&nbsp;&nbsp;**<br>";
echo "****&nbsp;****<br>";
echo "*********<br>";
echo "&nbsp;*******<br>";
echo "&nbsp;&nbsp;*****<br>";
echo "&nbsp;&nbsp;&nbsp;***<br>";
echo "&nbsp;&nbsp;&nbsp;&nbsp;*<br>";


// 25. ESCALERA
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// 26. CUADRADO CON DIAGONALES
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 5 || $i == $j || $i + $j == 6) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>







<?php

// ==================================================
// 1. CUADRADO
// *****
// *****
// *****
// *****
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 2. RECTANGULO
// *******
// *******
// *******
// *******

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 3. TRIANGULO CRECIENTE
// *
// **
// ***
// ****
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 4. TRIANGULO DECRECIENTE
// *****
// ****
// ***
// **
// *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 5. TRIANGULO ALINEADO A LA DERECHA
//     *
//    **
//   ***
//  ****
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 6. TRIANGULO INVERTIDO DESPLAZADO
// *****
//  ****
//   ***
//    **
//     *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 5; $j >= $i; $j--) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 7. TRIANGULO DESPLAZADO
// *
//  **
//   ***
//    ****
//     *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 8. TRIANGULO INVERTIDO A LA DERECHA
// *****
//  ****
//   ***
//    **
//     *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 9. PIRAMIDE
//     *
//    ***
//   *****
//  *******
// *********

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 10. PIRAMIDE INVERTIDA
// *********
//  *******
//   *****
//    ***
//     *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 11. ROMBO COMPLETO
//     *
//    ***
//   *****
//    ***
//     *

for ($i = 1; $i <= 3; $i++) {
    for ($j = 3; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 2; $i >= 1; $i--) {
    for ($j = 3; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 12. RELOJ DE ARENA
// *********
//  *******
//   *****
//    ***
//     *
//    ***
//   *****
//  *******
// *********

for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 2; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 13. PIRAMIDE HUECA
//     *
//    * *
//   *   *
//  *     *
// *********

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        if ($j == 1 || $j == (2 * $i - 1) || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 14. ROMBO HUECO
//     *
//    * *
//   *   *
//    * *
//     *

for ($i = 1; $i <= 5; $i++) {
    if ($i <= 3) {
        $espacios = 3 - $i;
        $ancho = 2 * $i - 1;
    } else {
        $espacios = $i - 3;
        $ancho = 2 * (6 - $i) - 1;
    }

    for ($j = 1; $j <= $espacios; $j++) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= $ancho; $j++) {
        if ($j == 1 || $j == $ancho) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 15. PIRAMIDE DOBLE
//     *        *
//    ***      ***
//   *****    *****
//  *******  *******
// ********* *********

for ($i = 1; $i <= 5; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    for ($j = 1; $j <= (10 - 2 * $i); $j++) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }

    echo "<br>";
}


// ==================================================
// 16. CUADRADO HUECO
// *****
// *   *
// *   *
// *   *
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == 5 || $j == 1 || $j == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 17. RECTANGULO HUECO
// *******
// *     *
// *     *
// *******

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 7; $j++) {
        if ($i == 1 || $i == 4 || $j == 1 || $j == 7) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 18. TRIANGULO HUECO
// *
// **
// * *
// *  *
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j == 1 || $j == $i || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 19. TRIANGULO HUECO INVERTIDO
// *****
// *  *
// * *
// **
// *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        if ($j == 1 || $j == $i || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 20. ESCALERA
// *
// **
// ***
// ****
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 21. ESCALERA INVERTIDA
// *****
// ****
// ***
// **
// *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 22. CRUZ
//   *
//   *
// *****
//   *
//   *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 3 || $j == 3) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 23. X
// *   *
//  * *
//   *
//  * *
// *   *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j || $j == 6 - $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 24. LINEA HORIZONTAL
// **********

for ($i = 1; $i <= 10; $i++) {
    echo "*";
}
echo "<br>";


// ==================================================
// 25. LINEA VERTICAL
// *
// *
// *
// *
// *

for ($i = 1; $i <= 5; $i++) {
    echo "*<br>";
}


// ==================================================
// 26. DIAGONAL DESCENDENTE
// *
//  *
//   *
//    *
//     *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j < $i; $j++) {
        echo "&nbsp;";
    }
    echo "*<br>";
}


// ==================================================
// 27. DIAGONAL ASCENDENTE
//     *
//    *
//   *
//  *
// *

for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    echo "*<br>";
}


// ==================================================
// 28. FLECHA HACIA ARRIBA
//   *
//  ***
// *****
//   *
//   *

for ($i = 1; $i <= 3; $i++) {
    for ($j = 3; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = 1; $i <= 2; $i++) {
    echo "&nbsp;&nbsp;*<br>";
}


// ==================================================
// 29. FLECHA HACIA ABAJO
//   *
//   *
// *****
//  ***
//   *

for ($i = 1; $i <= 2; $i++) {
    echo "&nbsp;&nbsp;*<br>";
}

for ($i = 3; $i >= 1; $i--) {
    for ($j = 3; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 30. FLECHA HACIA LA DERECHA
// *
// **
// *****
// **
// *

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "*****<br>";

for ($i = 2; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 31. FLECHA HACIA LA IZQUIERDA
//     *
//    **
// *****
//    **
//     *

for ($i = 1; $i <= 2; $i++) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "*****<br>";

for ($i = 2; $i >= 1; $i--) {
    for ($j = 5; $j > $i; $j--) {
        echo "&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}


// ==================================================
// 32. LETRA V
// *       *
//  *     *
//   *   *
//    * *
//     *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 9; $j++) {
        if ($j == $i || $j == 10 - $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 33. LETRA A
//   ***
//  *   *
// *****
// *   *
// *   *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if (
            ($i == 1 && $j >= 2 && $j <= 4) ||
            ($i == 3) ||
            ($j == 1 || $j == 5)
        ) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 34. LETRA T
// *****
//   *
//   *
//   *
//   *

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $j == 3) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 35. LETRA L
// *
// *
// *
// *
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($j == 1 || $i == 5) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 36. LETRA Z
// *****
//    *
//   *
//  *
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == 1 || $i == 5 || $j == 6 - $i) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 37. TABLERO DE AJEDREZ
// * * * *
//  * * * *
// * * * *
//  * * * *

for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= 4; $j++) {
        if (($i + $j) % 2 == 0) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 38. CUADRADO CON DIAGONALES
// *****
// ** **
// * * *
// ** **
// *****

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if (
            $i == 1 || $i == 5 ||
            $j == 1 || $j == 5 ||
            $i == $j || $j == 6 - $i
        ) {
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}


// ==================================================
// 39. PIRAMIDE DE NUMEROS
// 1
// 12
// 123
// 1234
// 12345

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j;
    }
    echo "<br>";
}


// ==================================================
// 40. TRIANGULO DE NUMEROS REPETIDOS
// 1
// 22
// 333
// 4444
// 55555

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i;
    }
    echo "<br>";
}

?>