<!DOCTYPE html>
<html lang="es">
<head>
...
</head>
<body>
<h1>Circulo</h1>
<?php
// Variables para almacenar el nombre y el año actual
define('PI',3.1416);
$radio = 3.5;

$area = PI * $radio **2;
?>
<p>el área del círculo es  <?php echo $area ?>.</p>