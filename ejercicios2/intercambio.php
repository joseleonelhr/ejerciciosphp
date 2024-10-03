<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intercambio de Números</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e6ecf0;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo del encabezado */
        h1 {
            color: #34495e;
            font-size: 2.8em;
            margin-bottom: 40px;
            font-weight: bold;
        }

        /* Contenedor de la tarjeta */
        .card {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        /* Estilo del contador */
        .contador {
            font-size: 1.8em;
            color: #f05a28;
            font-weight: bold;
            background-color: #fdfdfd;
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Efecto hover en el contenedor */
        .contador:hover {
            color: #fff;
            background-color: #f05a28;
            transition: 0.4s ease-in-out;
            transform: scale(1.05);
        }

        /* Texto adicional */
        .description {
            font-size: 1.2em;
            color: #7f8c8d;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<h1>Intercambio de Números</h1>

<div class="card">
    <p class="description">Cambiamos el número A: 8 por el número B: 19</p>
    <div class="contador">
        <?php
        // Función para cambiar un número por otro
        function intercambia($a, $b) {
            $c = $a;
            $a = $b;
            $b = $c;
            echo "Número A: $a y Número B: $b";
        };

        // Llamada a la función con los valores
        intercambia(8, 19);
        ?>
    </div>

    

</body>
</html>
