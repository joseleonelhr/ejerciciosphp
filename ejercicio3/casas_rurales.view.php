<?php include("casaRurales.php")?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plantillas</title>
    <style>
body {
    font-family: 'Roboto', sans-serif; /* Cambiamos la fuente a Roboto */
    background-color: #f0f2f5; /* Color de fondo más suave */
    margin: 0;
    padding: 20px;
    line-height: 1.6;
}

h1 {
    text-align: center;
    color: #2c3e50;
    font-size: 2.5rem; /* Aumentamos el tamaño del título */
    margin-bottom: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1); /* Sombra más suave */
    background-color: white;
    border-radius: 8px; /* Bordes redondeados */
    overflow: hidden;
}

th, td {
    padding: 15px;
    text-align: left;
    border-bottom: 1px solid #ddd; /* Border en la parte inferior */
}

th {
    background-color: #3498db; /* Cambiamos a un azul más oscuro */
    color: white;
    text-transform: uppercase; /* Mayúsculas para títulos */
    letter-spacing: 1px; /* Espaciado de letras */
    font-weight: 500; /* Fuente más gruesa */
}

td {
    color: #2c3e50; /* Color más oscuro para el texto */
}

tr:nth-child(even) {
    background-color: #f9f9f9; /* Fondo alterno más claro */
}

tr:hover {
    background-color: #f1f1f1; /* Efecto hover más sutil */
    transition: background-color 0.3s ease; /* Transición suave */
}

/* Estilos del contenedor */
div {
    max-width: 1000px; /* Ampliamos un poco el ancho */
    margin: 0 auto;
    background-color: white;
    padding: 30px;
    border-radius: 12px; /* Bordes más redondeados */
    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1); /* Sombra más profunda */
}

/* Estilos generales */
* {
    box-sizing: border-box;
}

@media (max-width: 768px) {
    table, th, td {
        font-size: 0.9rem; /* Reducir tamaño en pantallas pequeñas */
    }

    body {
        padding: 10px; /* Ajustar padding */
    }

    h1 {
        font-size: 2rem; /* Ajustar tamaño de título */
    }
}
.alerta {
    margin-bottom: 20px; /* Margen inferior para separar del contenido */
    padding: 15px;
    background-color: #ffcccc; /* Fondo suave rojo */
    color: #a94442; /* Texto rojo oscuro */
    border: 1px solid #ebccd1; /* Borde sutil */
    border-radius: 5px; /* Bordes redondeados */
    text-align: center; /* Centrar texto */
    font-size: 1.1rem; /* Fuente un poco más grande */
    font-weight: bold; /* Negrita */
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1); /* Sombra sutil */
}


</style>
</head>

<body>

<h1>Casas Rurales de Castellón</h1>

<div >
<div class="alerta">
    <?php
        foreach($arrayAsociativo as $datos){
            if(!strcmp($datos["telefono"],"")){
                $conteo++;
            }
        }
        echo "Hemos descartado " . $conteo . " casas rurales por no tener número de teléfono.";
    ?>
</div>

<table>

   <tr>
            <th>ID</th>
            <th>LOCALIDAD</th>
            <th>NOMBRE</th>
            <th>TELÉFONO</th>
    </tr>
    <?php

  
    foreach($arrayAsociativo as $datos){
        if(strcmp($datos["telefono"],"")){
            echo  "<tr>";
        echo "<td>". $datos["id"].  "</td>";
        echo "<td>". $datos["localidad"].  "</td>";
        echo "<td>". $datos["nombre"].  "</td>";
        echo "<td>". $datos["telefono"].  "</td>";
        echo "</tr>";
        }
    }
 
    ?>
</table>

   
</div>

</body>
</html>