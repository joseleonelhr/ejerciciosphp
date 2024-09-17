<!DOCTYPE html>
<html lang="es">
<head>
...
</head>
<body>
<h1>Coche</h1>
<?php
// defino un array  
$coche = array(
    "111BCD" => array("ford","focus",5),
    "445BCD" => array("Toyota","corolla",5),
    "333BCD" => array("Honda","Prius",4),
    "444BCD" => array("kia","rio",4)
)

?>
<table>
    <tr>
        <th>
            matricula
        </th>
        <th>marca</th>
        <th>
            modelo
        </th>
        <th>
            puerta
        </th>
    </tr>
    <?php
         foreach ($coche as $matricula => $detalles) {
            echo "<tr>";
            echo "<td>" . $matricula . "</td>";
            echo "<td>" . $detalles[0] . "</td>"; // Marca
            echo "<td>" . $detalles[1] . "</td>"; // Modelo
            echo "<td>" . $detalles[2] . "</td>"; // Puertas
            echo "</tr>";}
    ?>
</table>
