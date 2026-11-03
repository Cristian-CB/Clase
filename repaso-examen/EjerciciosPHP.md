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

## Ejercicio 2.

Tienes una lista de alumnos con sus notas. Créala tú con mínimo 6 alumnos. Cada alumno debe tener nombre y una nota del 0 al 10.

Muestra por pantalla:

1. El listado completo de alumnos con su nota y su calificación (Suspenso, Aprobado, Notable, Sobresaliente)
2. Solo los alumnos que han suspendido
3. La nota media de la clase
4. El alumno con la nota más alta y el alumno con la nota más baja
5. Cada elemento debe de tener algo de estilo CSS.

---

## Ejercicio 3.

Crea las siguientes funciones y prueba cada una con al menos dos ejemplos:

**3.1** `calcularDescuento($precio, $porcentaje)` — devuelve el precio final tras aplicar el descuento. Si el porcentaje es mayor que 100 o menor que 0 devuelve el precio original sin cambios.

**3.2** `contarVocales($texto)` — devuelve cuántas vocales tiene un texto, sin distinguir entre mayúsculas y minúsculas.

**3.3** `resumir($texto, $limite)` — si el texto supera el número de caracteres indicado lo corta y añade `"..."`. Si no lo supera lo devuelve tal cual.

---

## Ejercicio 4

Crea una página web con la carta de un restaurante. La estructura de archivos debe ser:

```
/ejercicio4
├── index.php
├── data.php
├── partials/
│   ├── header.php
│   └── footer.php
└── img/
```

Los datos los defines tú. Crea un array llamado `$platos` en `data.php` con mínimo 8 platos. Cada plato debe tener: `id`, `nombre`, `descripcion`, `precio`, `categoria` (entrante, principal, postre), `alergenos` (array con los alérgenos), `disponible` (true o false) e `imagen`.

La página debe mostrar:

1. Todos los platos agrupados por categoría — primero los entrantes, luego los principales y por último los postres. Cada plato se muestra en formato tarjeta con imagen, nombre, descripción, precio y alérgenos. Los platos no disponibles se muestran con un estilo visual diferente y una etiqueta "No disponible"
2. Una sección de ofertas con los platos cuyo precio sea menor o igual a 10 euros, mostrando el precio con un 15% de descuento

Requisitos:
- Crea una función `pintarPlato($plato)` en `data.php` y úsala en `index.php`
- Usa `<?= ?>` para pintar valores y la sintaxis alternativa de PHP en el HTML
- La página debe tener estilos propios y verse limpia y apetecible

---

## Ejercicio 5

Crea un sistema de reservas para un restaurante. La estructura de archivos es:

```
/ejercicio5
├── index.php
├── confirmacion.php
├── controllers/
│   └── reserva.php
└── partials/
    ├── header.php
    └── footer.php
```

**`index.php`** muestra un formulario de reserva con los siguientes campos:

| Campo | Tipo | Validación |
|---|---|---|
| Nombre | text | Obligatorio |
| Email | email | Obligatorio |
| Fecha | date | Obligatorio |
| Numero de personas | number | Entre 1 y 10 |
| Preferencia | select (interior / terraza) | Obligatorio |

Si existe `$_GET["error"]` muestra un mensaje de error específico según su valor:
- `error=campos` — "Hay campos obligatorios sin rellenar"
- `error=personas` — "El número de personas debe ser entre 1 y 10"
- `error=preferencia` — "La preferencia seleccionada no es válida"

**`controllers/reserva.php`** solo acepta POST. Valida los datos en este orden:

1. Comprueba que ningún campo esté vacío — si falla redirige a `index.php?error=campos`
2. Comprueba que el número de personas esté entre 1 y 10 — si falla redirige a `index.php?error=personas`
3. Comprueba que la preferencia sea `interior` o `terraza` — si falla redirige a `index.php?error=preferencia`

Si todo es correcto guarda los datos en `$_SESSION` y redirige a `confirmacion.php`.

**`confirmacion.php`** muestra un resumen de la reserva con todos los datos recibidos. Si no hay sesión activa redirige a `index.php`.


---

## Ejercicio 6

Crea una clase para gestionar un catálogo de coches. La estructura es:

```
/ejercicio6
├── index.php
└── classes/
    └── Coche.php
```

La clase `Coche` debe tener propiedades privadas: `id`, `marca`, `modelo`, `precio`, `kilometros`, `disponible`.

Implementa:

- Constructor que reciba todas las propiedades
- Getters para todas las propiedades
- Setter para `precio` — solo acepta valores mayores que 0
- Setter para `kilometros` — solo acepta valores mayores o iguales a 0
- Método `esNuevo()` — devuelve `true` si los kilómetros son 0
- Método `aplicarDescuento($porcentaje)` — devuelve el precio con el descuento aplicado
- Método `filter($criterio)` que acepte:
    - `"disponible"` — true si el coche está disponible
    - `"nuevo"` — true si los kilómetros son 0
    - `"oferta"` — true si el precio es menor o igual a 15000
    - El nombre de una marca — true si la marca coincide
- Método `pintarTarjeta()` — genera el HTML de la tarjeta del coche

En `index.php` crea un array con mínimo 6 objetos `Coche` y muestra cuatro secciones usando `filter()`:

1. Todos los coches
2. Solo los disponibles
3. Solo los nuevos (0 kilómetros)
4. Solo los que están en oferta, mostrando el precio con un 10% de descuento adicional

La página debe tener estilos propios y verse limpia. 