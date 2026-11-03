
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante La Toscana</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #faf7f2;
            color: #333;
        }

        header {
            background-color: #572f25;
            color: white;
            text-align: center;
            padding: 35px;
        }

        main {
            max-width: 1100px;
            margin: auto;
            padding: 30px 20px;
        }

        h2 {
            color: #572f25;
            border-bottom: 2px solid #d6a56c;
            padding-bottom: 10px;
        }

        .contenedor-platos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .plato {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 3px 10px #00000015;
        }

        .plato img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .contenido {
            padding: 18px;
        }

        .precio {
            color: #a45b32;
            font-size: 20px;
            font-weight: bold;
        }

        .disponible {
            color: green;
            font-weight: bold;
        }

        .etiqueta {
            background: #e74c3c;
            color: white;
            padding: 6px 10px;
            border-radius: 5px;
        }

        .no-disponible {
            opacity: 0.55;
            filter: grayscale(70%);
        }

        .oferta {
            border: 2px solid #d6a56c;
        }

        .precio-anterior {
            text-decoration: line-through;
            color: gray;
            font-size: 14px;
        }

        .precio-oferta {
            color: #c0392b;
            font-size: 22px;
            font-weight: bold;
        }

        footer {
            background: #572f25;
            color: white;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>Restaurante La Toscana</h1>
    <p>Sabores caseros para disfrutar</p>
</header>
