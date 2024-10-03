<?php include("plantillas.php")?>
<?php usort($arrayAsociativo, function($a, $b) {
    return $a["Dorsal"] <=> $b["Dorsal"];
}) ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plantillas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #fff; /* Fondo blanco */
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center; /* Alinear el encabezado a la izquierda */
            color: #b30000; /* Color rojo oscuro para el encabezado */
        }

        table {
            width: 100%; /* Mantener el ancho de la tabla */
            max-width: 800px; /* Ancho máximo de la tabla */
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #dddddd; /* Borde gris claro */
        }

        th {
            background-color: #b30000; /* Fondo rojo para los encabezados */
            color: white; /* Texto blanco */
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Fondo gris claro para filas pares */
        }

        tr:hover {
            background-color: #ffe6e6; /* Fondo rojo claro al pasar el mouse */
        }

        /* Añadir un contenedor para el contenido */
        div {
            max-width: 800px; /* Ancho máximo del contenedor */
            width: 100%; /* Ancho del contenedor */
            background-color: white; /* Fondo blanco para el contenedor */
            padding: 20px;

        }
    </style>
</head>

<body>

<div>
    <h1>Fútbol ejercicio 2</h1>
    <table>
        <thead>
        <?php
        echo "<tr>";
        foreach($cabecera1 as $elemento) {
            echo "<th>" . $elemento . "</th>"; // Encabezados de la tabla
        }
        echo "</tr>"; // Cerrar fila de encabezado
        ?>
        </thead>
        <tbody>
        <?php
        foreach($arrayAsociativo as $datos) {
            if (!strcmp($datos["Equipo"], "Atlético de Madrid")) {
                echo "<tr>";
                echo "<td>" . $datos["Temporada"] . "</td>";
                echo "<td>" . $datos["Equipo"] . "</td>";
                echo "<td>" . $datos["Id"] . "</td>";
                echo "<td>" . $datos["Apodo"] . "</td>";
                echo "<td>" . $datos["Nombre"] . "</td>";
                echo "<td>" . $datos["Apellidos"] . "</td>";
                echo "<td>" . $datos["Fecha"] . "</td>";
                echo "<td>" . $datos["Edad"] . "</td>";
                echo "<td>" . $datos["Localidad"] . "</td>";
                echo "<td>" . $datos["Pais"] . "</td>";
                echo "<td>" . $datos["Posicion"] . "</td>";
                echo "<td>" . $datos["Dorsal"] . "</td>";
                echo "<td>" . $datos["PJ"] . "</td>";
                echo "<td>" . $datos["PT"] . "</td>";
                echo "<td>" . $datos["PC"] . "</td>";
                echo "<td>" . $datos["PS"] . "</td>";
                echo "<td>" . $datos["M"] . "</td>";
                echo "<td>" . $datos["G"] . "</td>";
                echo "<td>" . $datos["TA"] . "</td>";
                echo "<td>" . $datos["TR"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
