<?php include("plantillas.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plantillas</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    h1 {
        text-align: center;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px;
        text-align: left;
        border: 1px solid #dddddd;
    }

    th {
        background-color: #007BFF;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    /* Añadir un contenedor para centrar el contenido */
    div {
        max-width: 800px;
        margin: 0 auto;
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>

<h1>Fútbol ejercicio 1</h1>

<div >

<table>

   <tr>
            <th>Dorsal</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Posición</th>
            <th>Equipo</th>
    </tr>
    <?php
    foreach($arrayAsociativo as $datos){
       echo  "<tr>";
        echo "<td>". $datos["Dorsal"].  "</td>";
        echo "<td>". $datos["Nombre"].  "</td>";
        echo "<td>". $datos["Apellidos"].  "</td>";
        echo "<td>". $datos["Posicion"].  "</td>";
        echo "<td>". $datos["Equipo"].  "</td>";
        echo "</tr>";

    }
 
    ?>
</table>

   
</div>

</body>
</html>
