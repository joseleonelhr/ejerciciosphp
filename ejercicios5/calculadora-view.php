<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="http://192.168.72.145/ejerciciosPHP/ejercicios5/calculadora.php?x=1&y=2">
    Enviar datos
    </a>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Introduzca X <input type="number" name="x">
    Introduzca Y <input type="number" name="y">
    <button type="submit">Enviar</button>
    </form>
    <?php
    $x = $_REQUEST["x"];
    $y = $_REQUEST["y"];
    echo "el valor de X: ". $x . "<br>";
    echo "el valor de Y: ". $y . "<br>";
    echo "suma X + Y " . "= ". ($x + $y) . "<br>";
    echo "resta  X - Y " . "= ". ($x - $y) . "<br>";
    echo "multiplicación  X x Y " . "= ". ($x * $y) . "<br>";
    echo "división  X / Y " . "= ". ($x / $y) . "<br>";
    
    ?>
</body>
</html>
