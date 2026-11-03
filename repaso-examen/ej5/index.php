<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    






<form action="./controllers/reserva.php" method="post">

<input type="text" name="texto" placeholder="nombre" required id="">
<input type="email" name="email" id="" reqired>
<input type="date" name="date" id="" required>
<input type="number" name="number" placeholder="n de personas" id="" min="1" max="10">
<label for="opciones">Elige una opción:</label>
<select id="opciones" name="opciones" required>
  <option value="" disabled selected>Selecciona...</option>
  <option value="opcion1">Opción 1</option>
  <option value="opcion2">Opción 2</option>
  <option value="opcion3">Opción 3</option>
</select>
<input type="submit" value="enviar">

<?php
require_once("./controllers/reserva.php");
    if ($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["error"])) {
        if ($_GET["error"] === "campos") {
            echo "<p class='error'>Hay campos obligatorios sin rellenar</p>";
        } else if ($_GET["error"] === "personas") {
            echo "<p class='error'>El número de personas debe ser entre 1 y 10</p>";
        
        } else if ($_GET["error"] === "preferencia") {
            echo "<p class='error'>La preferencia seleccionada no es válida</p>";
        } else {
            echo "<p class='error'>Acceso no permitido</p>";
        }
    }
    ?>

</form>



</body>
</html>