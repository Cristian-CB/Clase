<?php

/*


## Ejercicio 2.

Tienes una lista de alumnos con sus notas. Créala tú con mínimo 6 alumnos. Cada alumno debe tener nombre y una nota del 0 al 10.

Muestra por pantalla:

1. El listado completo de alumnos con su nota y su calificación (Suspenso, Aprobado, Notable, Sobresaliente)
2. Solo los alumnos que han suspendido
3. La nota media de la clase
4. El alumno con la nota más alta y el alumno con la nota más baja
5. Cada elemento debe de tener algo de estilo CSS.

---



*/


$alumnos = [
    ["nombre" => "Cristian", "nota" => 8],
    ["nombre" => "Ana", "nota" => 4],
    ["nombre" => "David", "nota" => 9],
    ["nombre" => "Laura", "nota" => 6],
    ["nombre" => "Mario", "nota" => 3],
    ["nombre" => "Lucia", "nota" => 10]
];

// Variables para los cálculos
$suma = 0;
$notaMayor = $alumnos[0];
$notaMenor = $alumnos[0];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas de alumnos</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        h2 {
            color: #333;
        }

        .alumno {
            background-color: white;
            padding: 12px;
            margin: 8px;
            border-radius: 8px;
            width: 300px;
        }

        .suspenso {
            border-left: 5px solid red;
        }

        .aprobado {
            border-left: 5px solid orange;
        }

        .notable {
            border-left: 5px solid blue;
        }

        .sobresaliente {
            border-left: 5px solid green;
        }

        .resultado {
            background-color: white;
            padding: 15px;
            margin: 10px 0;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<h2>1. Listado completo de alumnos</h2>

<?php

foreach ($alumnos as $alumno) {

    $nota = $alumno["nota"];

    if ($nota < 5) {
        $calificacion = "Suspenso";
        $clase = "suspenso";
    } elseif ($nota < 6) {
        $calificacion = "Aprobado";
        $clase = "aprobado";
    } elseif ($nota < 9) {
        $calificacion = "Notable";
        $clase = "notable";
    } else {
        $calificacion = "Sobresaliente";
        $clase = "sobresaliente";
    }

    echo  "<div class='alumno $clase'>";
    echo "Nombre: " . $alumno["nombre"] . "<br>";
    echo "Nota: " . $nota . "<br>";
    echo "Calificación: " . $calificacion;
    echo "</div>";

    // Sumar notas
    $suma += $nota;

    // Buscar nota más alta
    if ($nota > $notaMayor["nota"]) {
        $notaMayor = $alumno;
    }

    // Buscar nota más baja
    if ($nota < $notaMenor["nota"]) {
        $notaMenor = $alumno;
    }
}

?>

<h2>2. Alumnos suspensos</h2>

<?php

foreach ($alumnos as $alumno) {

    if ($alumno["nota"] < 5) {
        echo "<div class='alumno suspenso'>";
        echo $alumno["nombre"] . " - Nota: " . $alumno["nota"];
        echo "</div>";
    }
}

?>

<h2>3. Nota media de la clase</h2>

<div class="resultado">

<?php

$media = $suma / count($alumnos);

echo "La media de la clase es: " . round($media, 2);

?>

</div>

<h2>4. Nota más alta y más baja</h2>

<div class="resultado">

<?php

echo "Nota más alta: " . $notaMayor["nombre"] . " - " . $notaMayor["nota"];
echo "<br>";

echo "Nota más baja: " . $notaMenor["nombre"] . " - " . $notaMenor["nota"];

?>

</div>

</body>
</html>

<?php

// ==========================================
// EJERCICIO 1. PRODUCTOS
// ==========================================

$productos = [
    ["nombre" => "Teclado", "precio" => 45],
    ["nombre" => "Ratón", "precio" => 25],
    ["nombre" => "Monitor", "precio" => 180],
    ["nombre" => "Auriculares", "precio" => 65],
    ["nombre" => "Alfombrilla", "precio" => 15],
    ["nombre" => "Webcam", "precio" => 80]
];

$suma = 0;
$caro = $productos[0];
$barato = $productos[0];

echo "<h2>1. Productos</h2>";

foreach ($productos as $producto) {
    echo "<div class='caja'>";
    echo $producto["nombre"] . " - " . $producto["precio"] . "€";
    echo "</div>";

    $suma += $producto["precio"];

    if ($producto["precio"] > 50) {
        echo "<p>Más de 50€: " . $producto["nombre"] . "</p>";
    }

    if ($producto["precio"] > $caro["precio"]) {
        $caro = $producto;
    }

    if ($producto["precio"] < $barato["precio"]) {
        $barato = $producto;
    }
}

echo "Precio medio: " . round($suma / count($productos), 2) . "€";
echo "<br>Más caro: " . $caro["nombre"];
echo "<br>Más barato: " . $barato["nombre"];


// ==========================================
// EJERCICIO 2. EMPLEADOS
// ==========================================

$empleados = [
    ["nombre" => "Carlos", "salario" => 1400],
    ["nombre" => "Ana", "salario" => 1800],
    ["nombre" => "Luis", "salario" => 2100],
    ["nombre" => "Marta", "salario" => 1300],
    ["nombre" => "Pedro", "salario" => 1600],
    ["nombre" => "Lucia", "salario" => 1900]
];

$suma = 0;
$mayor = $empleados[0];

echo "<h2>2. Empleados</h2>";

foreach ($empleados as $empleado) {
    echo "<div class='caja'>";
    echo $empleado["nombre"] . " - " . $empleado["salario"] . "€";
    echo "</div>";

    $suma += $empleado["salario"];

    if ($empleado["salario"] > 1500) {
        echo "<p>Salario superior a 1500: " . $empleado["nombre"] . "</p>";
    }

    if ($empleado["salario"] > $mayor["salario"]) {
        $mayor = $empleado;
    }
}

echo "Salario medio: " . round($suma / count($empleados), 2);
echo "<br>Mayor salario: " . $mayor["nombre"];


// ==========================================
// EJERCICIO 3. VIDEOJUEGOS
// ==========================================

$videojuegos = [
    ["nombre" => "Zelda", "precio" => 60, "puntuacion" => 9.5],
    ["nombre" => "Minecraft", "precio" => 30, "puntuacion" => 9],
    ["nombre" => "FIFA", "precio" => 70, "puntuacion" => 7],
    ["nombre" => "Elden Ring", "precio" => 50, "puntuacion" => 9.8],
    ["nombre" => "Mario", "precio" => 55, "puntuacion" => 8.5],
    ["nombre" => "Fortnite", "precio" => 0, "puntuacion" => 8]
];

$suma = 0;
$mejor = $videojuegos[0];

echo "<h2>3. Videojuegos</h2>";

foreach ($videojuegos as $juego) {
    echo "<div class='caja'>";
    echo $juego["nombre"] . " - " . $juego["puntuacion"];
    echo "</div>";

    $suma += $juego["puntuacion"];

    if ($juego["puntuacion"] > 8) {
        echo "<p>Más de 8 puntos: " . $juego["nombre"] . "</p>";
    }

    if ($juego["puntuacion"] > $mejor["puntuacion"]) {
        $mejor = $juego;
    }
}

echo "Media: " . round($suma / count($videojuegos), 2);
echo "<br>Mejor videojuego: " . $mejor["nombre"];


// ==========================================
// EJERCICIO 4. PERSONAS
// ==========================================

$personas = [
    ["nombre" => "Cristian", "edad" => 18],
    ["nombre" => "Ana", "edad" => 25],
    ["nombre" => "David", "edad" => 16],
    ["nombre" => "Laura", "edad" => 32],
    ["nombre" => "Mario", "edad" => 21],
    ["nombre" => "Lucia", "edad" => 14]
];

$suma = 0;
$mayor = $personas[0];
$menor = $personas[0];

echo "<h2>4. Personas</h2>";

foreach ($personas as $persona) {
    echo "<div class='caja'>";
    echo $persona["nombre"] . " - " . $persona["edad"] . " años";
    echo "</div>";

    $suma += $persona["edad"];

    if ($persona["edad"] >= 18) {
        echo "<p>Mayor de edad: " . $persona["nombre"] . "</p>";
    }

    if ($persona["edad"] > $mayor["edad"]) {
        $mayor = $persona;
    }

    if ($persona["edad"] < $menor["edad"]) {
        $menor = $persona;
    }
}

echo "Edad media: " . round($suma / count($personas), 2);
echo "<br>Mayor: " . $mayor["nombre"];
echo "<br>Menor: " . $menor["nombre"];


// ==========================================
// EJERCICIO 5. COCHES
// ==========================================

$coches = [
    ["marca" => "Seat", "modelo" => "Ibiza", "precio" => 15000],
    ["marca" => "BMW", "modelo" => "Serie 1", "precio" => 30000],
    ["marca" => "Audi", "modelo" => "A3", "precio" => 28000],
    ["marca" => "Toyota", "modelo" => "Yaris", "precio" => 18000],
    ["marca" => "Ford", "modelo" => "Focus", "precio" => 22000],
    ["marca" => "Renault", "modelo" => "Clio", "precio" => 16000]
];

$suma = 0;
$caro = $coches[0];

echo "<h2>5. Coches</h2>";

foreach ($coches as $coche) {
    echo "<div class='caja'>";
    echo $coche["marca"] . " " . $coche["modelo"];
    echo " - " . $coche["precio"] . "€";
    echo "</div>";

    $suma += $coche["precio"];

    if ($coche["precio"] < 20000) {
        echo "<p>Menos de 20000€: " . $coche["modelo"] . "</p>";
    }

    if ($coche["precio"] > $caro["precio"]) {
        $caro = $coche;
    }
}

echo "Precio medio: " . round($suma / count($coches), 2);
echo "<br>Coche más caro: " . $caro["modelo"];


// ==========================================
// EJERCICIO 6. PELICULAS
// ==========================================

$peliculas = [
    ["titulo" => "Avatar", "duracion" => 162],
    ["titulo" => "Titanic", "duracion" => 195],
    ["titulo" => "Shrek", "duracion" => 90],
    ["titulo" => "Joker", "duracion" => 122],
    ["titulo" => "Up", "duracion" => 96],
    ["titulo" => "Oppenheimer", "duracion" => 180]
];

$suma = 0;
$larga = $peliculas[0];

echo "<h2>6. Películas</h2>";

foreach ($peliculas as $pelicula) {
    echo "<div class='caja'>";
    echo $pelicula["titulo"] . " - " . $pelicula["duracion"] . " minutos";
    echo "</div>";

    $suma += $pelicula["duracion"];

    if ($pelicula["duracion"] > 120) {
        echo "<p>Dura más de 120 minutos: " . $pelicula["titulo"] . "</p>";
    }

    if ($pelicula["duracion"] > $larga["duracion"]) {
        $larga = $pelicula;
    }
}

echo "Duración media: " . round($suma / count($peliculas), 2);
echo "<br>Más larga: " . $larga["titulo"];


// ==========================================
// EJERCICIO 7. PEDIDOS
// ==========================================

$pedidos = [
    ["cliente" => "Ana", "total" => 80],
    ["cliente" => "Luis", "total" => 150],
    ["cliente" => "Pedro", "total" => 230],
    ["cliente" => "Marta", "total" => 45],
    ["cliente" => "Carlos", "total" => 120],
    ["cliente" => "Lucia", "total" => 300]
];

$suma = 0;
$mayor = $pedidos[0];

echo "<h2>7. Pedidos</h2>";

foreach ($pedidos as $pedido) {
    echo "<div class='caja'>";
    echo $pedido["cliente"] . " - " . $pedido["total"] . "€";
    echo "</div>";

    $suma += $pedido["total"];

    if ($pedido["total"] > 100) {
        echo "<p>Pedido superior a 100€: " . $pedido["cliente"] . "</p>";
    }

    if ($pedido["total"] > $mayor["total"]) {
        $mayor = $pedido;
    }
}

echo "Total recibido: " . $suma . "€";
echo "<br>Pedido más caro: " . $mayor["cliente"];


// ==========================================
// EJERCICIO 8. FRUTAS
// ==========================================

$frutas = [
    ["nombre" => "Manzana", "cantidad" => 20],
    ["nombre" => "Pera", "cantidad" => 8],
    ["nombre" => "Platano", "cantidad" => 15],
    ["nombre" => "Naranja", "cantidad" => 5],
    ["nombre" => "Uva", "cantidad" => 30],
    ["nombre" => "Fresa", "cantidad" => 12]
];

$suma = 0;
$mayor = $frutas[0];

echo "<h2>8. Frutas</h2>";

foreach ($frutas as $fruta) {
    echo "<div class='caja'>";
    echo $fruta["nombre"] . " - " . $fruta["cantidad"];
    echo "</div>";

    $suma += $fruta["cantidad"];

    if ($fruta["cantidad"] < 10) {
        echo "<p>Menos de 10 unidades: " . $fruta["nombre"] . "</p>";
    }

    if ($fruta["cantidad"] > $mayor["cantidad"]) {
        $mayor = $fruta;
    }
}

echo "Cantidad total: " . $suma;
echo "<br>Más unidades: " . $mayor["nombre"];


// ==========================================
// EJERCICIO 9. DEPORTISTAS
// ==========================================

$deportistas = [
    ["nombre" => "Carlos", "puntos" => 45],
    ["nombre" => "Ana", "puntos" => 80],
    ["nombre" => "Luis", "puntos" => 65],
    ["nombre" => "Marta", "puntos" => 30],
    ["nombre" => "Pedro", "puntos" => 95],
    ["nombre" => "Lucia", "puntos" => 55]
];

$suma = 0;
$mejor = $deportistas[0];

echo "<h2>9. Deportistas</h2>";

foreach ($deportistas as $deportista) {
    echo "<div class='caja'>";
    echo $deportista["nombre"] . " - " . $deportista["puntos"] . " puntos";
    echo "</div>";

    $suma += $deportista["puntos"];

    if ($deportista["puntos"] > 50) {
        echo "<p>Más de 50 puntos: " . $deportista["nombre"] . "</p>";
    }

    if ($deportista["puntos"] > $mejor["puntos"]) {
        $mejor = $deportista;
    }
}

echo "Media: " . round($suma / count($deportistas), 2);
echo "<br>Mejor deportista: " . $mejor["nombre"];


// ==========================================
// EJERCICIO 10. HABITACIONES
// ==========================================

$habitaciones = [
    ["numero" => 101, "ocupada" => true],
    ["numero" => 102, "ocupada" => false],
    ["numero" => 103, "ocupada" => true],
    ["numero" => 104, "ocupada" => false],
    ["numero" => 105, "ocupada" => true],
    ["numero" => 106, "ocupada" => false]
];

$ocupadas = 0;

echo "<h2>10. Habitaciones</h2>";

foreach ($habitaciones as $habitacion) {
    echo "<div class='caja'>";

    if ($habitacion["ocupada"] == true) {
        echo "Habitación " . $habitacion["numero"] . " - Ocupada";
        $ocupadas++;
    } else {
        echo "Habitación " . $habitacion["numero"] . " - Libre";
    }

    echo "</div>";
}

echo "Habitaciones ocupadas: " . $ocupadas;
echo "<br>Porcentaje de ocupación: ";
echo round(($ocupadas / count($habitaciones)) * 100, 2) . "%";


// ==========================================
// EJERCICIO 11. ASISTENCIA
// ==========================================

$asistencia = [
    ["nombre" => "Ana", "faltas" => 2],
    ["nombre" => "Carlos", "faltas" => 8],
    ["nombre" => "Luis", "faltas" => 4],
    ["nombre" => "Marta", "faltas" => 10],
    ["nombre" => "Pedro", "faltas" => 1],
    ["nombre" => "Lucia", "faltas" => 6]
];

$suma = 0;
$mayor = $asistencia[0];

echo "<h2>11. Asistencia</h2>";

foreach ($asistencia as $alumno) {
    echo "<div class='caja'>";
    echo $alumno["nombre"] . " - " . $alumno["faltas"] . " faltas";
    echo "</div>";

    $suma += $alumno["faltas"];

    if ($alumno["faltas"] > 5) {
        echo "<p>Más de 5 faltas: " . $alumno["nombre"] . "</p>";
    }

    if ($alumno["faltas"] > $mayor["faltas"]) {
        $mayor = $alumno;
    }
}

echo "Media de faltas: " . round($suma / count($asistencia), 2);
echo "<br>Más faltas: " . $mayor["nombre"];


// ==========================================
// EJERCICIO 12. TIENDA
// ==========================================

$tienda = [
    ["nombre" => "Teclado", "precio" => 30, "stock" => 10],
    ["nombre" => "Ratón", "precio" => 15, "stock" => 3],
    ["nombre" => "Monitor", "precio" => 150, "stock" => 7],
    ["nombre" => "Cable", "precio" => 8, "stock" => 2],
    ["nombre" => "Webcam", "precio" => 45, "stock" => 12],
    ["nombre" => "USB", "precio" => 10, "stock" => 4]
];

$suma = 0;
$mayor = $tienda[0];

echo "<h2>12. Tienda</h2>";

foreach ($tienda as $producto) {
    echo "<div class='caja'>";
    echo $producto["nombre"] . " - Stock: " . $producto["stock"];
    echo "</div>";

    $suma += $producto["stock"];

    if ($producto["stock"] < 5) {
        echo "<p>Poco stock: " . $producto["nombre"] . "</p>";
    }

    if ($producto["stock"] > $mayor["stock"]) {
        $mayor = $producto;
    }
}

echo "Unidades totales: " . $suma;
echo "<br>Más stock: " . $mayor["nombre"];


// ==========================================
// EJERCICIO 13. TEMPERATURAS
// ==========================================

$temperaturas = [18, 25, 30, 12, 28, 35, 21, 16];

$suma = 0;
$mayor = $temperaturas[0];
$menor = $temperaturas[0];

echo "<h2>13. Temperaturas</h2>";

foreach ($temperaturas as $temperatura) {
    echo "<div class='caja'>" . $temperatura . " grados</div>";

    $suma += $temperatura;

    if ($temperatura > 25) {
        echo "<p>Superior a 25 grados: " . $temperatura . "</p>";
    }

    if ($temperatura > $mayor) {
        $mayor = $temperatura;
    }

    if ($temperatura < $menor) {
        $menor = $temperatura;
    }
}

echo "Media: " . round($suma / count($temperaturas), 2);
echo "<br>Máxima: " . $mayor;
echo "<br>Mínima: " . $menor;


// ==========================================
// EJERCICIO 14. NUMEROS
// ==========================================

$numeros = [4, 15, 8, 23, 10, 7, 32, 19, 2, 11];

$suma = 0;
$contador = 0;

echo "<h2>14. Números</h2>";

foreach ($numeros as $numero) {
    echo "<div class='caja'>" . $numero . "</div>";

    $suma += $numero;

    if ($numero % 2 == 0) {
        echo "<p>Par: " . $numero . "</p>";
    } else {
        echo "<p>Impar: " . $numero . "</p>";
    }

    if ($numero > 10) {
        $contador++;
    }
}

echo "Suma total: " . $suma;
echo "<br>Mayores que 10: " . $contador;


// ==========================================
// EJERCICIO 15. GASTOS
// ==========================================

$gastos = [
    ["concepto" => "Comida", "importe" => 35],
    ["concepto" => "Gasolina", "importe" => 70],
    ["concepto" => "Ropa", "importe" => 120],
    ["concepto" => "Cine", "importe" => 20],
    ["concepto" => "Internet", "importe" => 40],
    ["concepto" => "Compra", "importe" => 90]
];

$suma = 0;

echo "<h2>15. Gastos</h2>";

foreach ($gastos as $gasto) {
    echo "<div class='caja'>";
    echo $gasto["concepto"] . " - " . $gasto["importe"] . "€";
    echo "</div>";

    $suma += $gasto["importe"];

    if ($gasto["importe"] > 50) {
        echo "<p>Gasto superior a 50€: " . $gasto["concepto"] . "</p>";
    }
}

echo "Gasto total: " . $suma;
echo "<br>Gasto medio: " . round($suma / count($gastos), 2);


// ==========================================
// EJERCICIO 16. ANIMALES
// ==========================================

$animales = [
    ["nombre" => "Perro", "peso" => 25],
    ["nombre" => "Gato", "peso" => 5],
    ["nombre" => "Caballo", "peso" => 400],
    ["nombre" => "Conejo", "peso" => 3],
    ["nombre" => "Oveja", "peso" => 50],
    ["nombre" => "Leon", "peso" => 190]
];

$suma = 0;
$mayor = $animales[0];

echo "<h2>16. Animales</h2>";

foreach ($animales as $animal) {
    echo "<div class='caja'>";
    echo $animal["nombre"] . " - " . $animal["peso"] . " kg";
    echo "</div>";

    $suma += $animal["peso"];

    if ($animal["peso"] > 20) {
        echo "<p>Pesa más de 20 kg: " . $animal["nombre"] . "</p>";
    }

    if ($animal["peso"] > $mayor["peso"]) {
        $mayor = $animal;
    }
}

echo "Peso medio: " . round($suma / count($animales), 2);
echo "<br>Más pesado: " . $mayor["nombre"];


// ==========================================
// EJERCICIO 17. CANCIONES
// ==========================================

$canciones = [
    ["titulo" => "Cancion A", "reproducciones" => 500],
    ["titulo" => "Cancion B", "reproducciones" => 2500],
    ["titulo" => "Cancion C", "reproducciones" => 1200],
    ["titulo" => "Cancion D", "reproducciones" => 800],
    ["titulo" => "Cancion E", "reproducciones" => 4000],
    ["titulo" => "Cancion F", "reproducciones" => 900]
];

$suma = 0;
$mayor = $canciones[0];

echo "<h2>17. Canciones</h2>";

foreach ($canciones as $cancion) {
    echo "<div class='caja'>";
    echo $cancion["titulo"] . " - " . $cancion["reproducciones"];
    echo "</div>";

    $suma += $cancion["reproducciones"];

    if ($cancion["reproducciones"] > 1000) {
        echo "<p>Más de 1000 reproducciones: " . $cancion["titulo"] . "</p>";
    }

    if ($cancion["reproducciones"] > $mayor["reproducciones"]) {
        $mayor = $cancion;
    }
}

echo "Reproducciones totales: " . $suma;
echo "<br>Más escuchada: " . $mayor["titulo"];


// ==========================================
// EJERCICIO 18. USUARIOS
// ==========================================

$usuarios = [
    ["nombre" => "Cristian", "activo" => true],
    ["nombre" => "Ana", "activo" => false],
    ["nombre" => "David", "activo" => true],
    ["nombre" => "Laura", "activo" => true],
    ["nombre" => "Mario", "activo" => false],
    ["nombre" => "Lucia", "activo" => true]
];

$activos = 0;
$inactivos = 0;

echo "<h2>18. Usuarios</h2>";

foreach ($usuarios as $usuario) {
    echo "<div class='caja'>";

    if ($usuario["activo"] == true) {
        echo $usuario["nombre"] . " - Activo";
        $activos++;
    } else {
        echo $usuario["nombre"] . " - Inactivo";
        $inactivos++;
    }

    echo "</div>";
}

echo "Activos: " . $activos;
echo "<br>Inactivos: " . $inactivos;
echo "<br>Porcentaje de activos: ";
echo round(($activos / count($usuarios)) * 100, 2) . "%";


// ==========================================
// EJERCICIO 19. VIAJES
// ==========================================

$viajes = [
    ["destino" => "Paris", "precio" => 600],
    ["destino" => "Roma", "precio" => 450],
    ["destino" => "Lisboa", "precio" => 300],
    ["destino" => "Londres", "precio" => 700],
    ["destino" => "Madrid", "precio" => 100],
    ["destino" => "Berlin", "precio" => 550]
];

$suma = 0;
$barato = $viajes[0];

echo "<h2>19. Viajes</h2>";

foreach ($viajes as $viaje) {
    echo "<div class='caja'>";
    echo $viaje["destino"] . " - " . $viaje["precio"] . "€";
    echo "</div>";

    $suma += $viaje["precio"];

    if ($viaje["precio"] < 500) {
        echo "<p>Menos de 500€: " . $viaje["destino"] . "</p>";
    }

    if ($viaje["precio"] < $barato["precio"]) {
        $barato = $viaje;
    }
}

echo "Precio medio: " . round($suma / count($viajes), 2);
echo "<br>Viaje más barato: " . $barato["destino"];


// ==========================================
// EJERCICIO 20. PEDIDOS Y ESTADOS
// ==========================================

$estados = [
    ["cliente" => "Ana", "estado" => "pendiente"],
    ["cliente" => "Luis", "estado" => "enviado"],
    ["cliente" => "Pedro", "estado" => "entregado"],
    ["cliente" => "Marta", "estado" => "pendiente"],
    ["cliente" => "Carlos", "estado" => "entregado"],
    ["cliente" => "Lucia", "estado" => "enviado"]
];

$pendientes = 0;
$enviados = 0;
$entregados = 0;

echo "<h2>20. Pedidos y estados</h2>";

foreach ($estados as $pedido) {
    echo "<div class='caja'>";
    echo $pedido["cliente"] . " - " . $pedido["estado"];
    echo "</div>";

    if ($pedido["estado"] == "pendiente") {
        $pendientes++;
        echo "<p>Pedido pendiente: " . $pedido["cliente"] . "</p>";
    } elseif ($pedido["estado"] == "enviado") {
        $enviados++;
    } elseif ($pedido["estado"] == "entregado") {
        $entregados++;
    }
}

echo "Pendientes: " . $pendientes;
echo "<br>Enviados: " . $enviados;
echo "<br>Entregados: " . $entregados;


// ==========================================
// CSS Y HTML
// ==========================================

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f1f3f5;
            padding: 25px;
            color: #333;
        }

        h2 {
            background-color: #263b59;
            color: white;
            padding: 12px;
            border-radius: 8px;
            margin-top: 35px;
        }

        .caja {
            background-color: white;
            padding: 12px;
            margin: 8px 0;
            border-left: 5px solid #5278b8;
            border-radius: 6px;
            width: 350px;
        }

        p {
            color: #5278b8;
            font-weight: bold;
        }
    </style>
</head>
<body>
</body>
</html>
