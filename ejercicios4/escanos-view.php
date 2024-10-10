<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    if (!empty($_POST["name"]) && isset($_POST["name"])) {
        $name = $_POST["name"]; 
    }

    if (!empty($_POST["votos"]) && isset($_POST["votos"])) {
        $votos = $_POST["votos"]; 
    }

   
    if (is_array($name) && is_array($votos)) {
        
        echo "<h3>Nombres de los Partidos:</h3>";
        foreach ($name as $values) {
            echo htmlspecialchars($values) . "<br>";
        }

        
        echo "<h3>Votos de los Partidos:</h3>";
        foreach ($votos as $values) {
            echo intval($values) . "<br>";
        }
    } else {
        echo "Error: Los datos no se han recibido correctamente.";
    }
    $resultados = [];
    foreach($votos as $values){
        $resultados[]= [
        "div1" => $values,
        "div2" => $values/2,
        "div3" => $values/3,
        "div4" => $values/4,
        "div5" => $values/5,
        "div6" => $values/6,
        "div7" => $values/7,
        ];
    }

foreach ($resultados as $resultado) {
    echo "División 1: " . $resultado['div1'] . "<br>";
    echo "División 2: " . $resultado['div2'] . "<br>";
    echo "División 3: " . $resultado['div3'] . "<br>";
    echo "División 4: " . $resultado['div4'] . "<br>";
    echo "División 5: " . $resultado['div5'] . "<br>";
    echo "División 6: " . $resultado['div6'] . "<br>";
    echo "División 7: " . $resultado['div7'] . "<br>";
    echo "<br>"; 
}
    $arrayplano = [];
    foreach($resultados as $resultado){
        foreach($resultado as $values){
            $arrayplano [] = $values;
        }

    }
    rsort($arrayplano);
    $top7 = array_slice($arrayplano,0,7);
    



}
?>
