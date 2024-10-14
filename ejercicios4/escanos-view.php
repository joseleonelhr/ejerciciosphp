<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$resultados = [];
$name = [];
$votos = [];
$top7;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (!empty($_POST["name"]) && isset($_POST["name"])) {
        $name = $_POST["name"];
    }

    if (!empty($_POST["votos"]) && isset($_POST["votos"])) {
        $votos = $_POST["votos"];
    }

    if (is_array($name) && is_array($votos)) {
        $resultados = []; 
        foreach ($votos as $index => $values) { 
            $resultados[] = [
                "partido" => htmlspecialchars($name[$index]), 
                "votos" => intval($values),
                "divisiones" => [
                    "div1" => intval($values),
                    "div2" => intval(($values) / 2),
                    "div3" => intval(($values) / 3),
                    "div4" => intval(($values) / 4),
                    "div5" => intval(($values) / 5),
                    "div6" => intval(($values) / 6),
                    "div7" => intval(($values) / 7),
                ]
            ];
        }
        $arrayplano = [];
        foreach ($resultados as $resultado) {
            foreach ($resultado["divisiones"] as $values) {
                $arrayplano[] = $values;
            }
        }
        rsort($arrayplano);
        $top7 = array_slice($arrayplano, 0, 7);
        
    } else {
        echo "Error: Los datos no se han recibido correctamente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Bootstrap</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center h1">Resultados de Votación</h2>

    <p class="lead">
Los escaneos resaltados en color verde representan a los ganadores. En total, se han seleccionado 7 ganadores.    </p>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Partido</th>
                    <th>Total Votos</th>
                    <th>División 2</th>
                    <th>División 3</th>
                    <th>División 4</th>
                    <th>División 5</th>
                    <th>División 6</th>
                    <th>División 7</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($resultados) && !empty($resultados)): ?>
                    <?php foreach ($resultados as $resultado): ?>
                        <tr>
                            <td><?php echo $resultado['partido']; ?></td>
                            <?php?>
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div1'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div1'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div1'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div2'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div2'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div2'],0,",",".");?>
                                    <?php endif; ?>
                            </td>

                            <td>
                                 <?php if (in_array($resultado['divisiones']['div3'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div3'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div3'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                            
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div4'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div4'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div4'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                            
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div5'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div5'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div5'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                            
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div6'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div6'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div6'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                            
                            <td>
                                 <?php if (in_array($resultado['divisiones']['div7'], $top7)): ?>
                                   <div class="table-success"><?php echo number_format($resultado['divisiones']['div7'], 0, ',', '.'); ?></div>
                                 <?php else:?> 
                                    <?php echo number_format($resultado['divisiones']['div7'],0,",",".");?>
                                    <?php endif; ?>
                            </td>
                          </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="9" class="text-center">No hay resultados disponibles.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
