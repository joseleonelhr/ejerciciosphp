<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["studentName"];
    $note1 = $_POST["note1"];
    $note2 = $_POST["note2"];
    $note3 = $_POST["note3"];
    $nota = ($note1 + $note2 + $note3) / 3;
    $notaf = number_format($nota, 2, ',', ' ');
    $estudiantes = [$name, $note1, $note2, $note3, $notaf];
    
    if (!isset($_SESSION["notas"])) {
        $_SESSION["notas"] = []; 
    }
    array_push($_SESSION["notas"], $estudiantes);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Notas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 20px;
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .card {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-4">Registro de Notas</h1>
        <form action="calificaciones.php" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="studentName" class="form-label">Nombre del Alumno</label>
                        <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Nombre del alumno" required>
                        <label for="note1" class="form-label">Nota 1</label>
                        <input type="number" class="form-control" name="note1" id="note1" placeholder="0" min="0" max="10" step="0.1" required>
                        <label for="note2" class="form-label">Nota 2</label>
                        <input type="number" class="form-control" name="note2" id="note2" placeholder="0" min="0" max="10" step="0.1" required>
                        <label for="note3" class="form-label">Nota 3</label>
                        <input type="number" class="form-control" name="note3" id="note3" placeholder="0" min="0" max="10" step="0.1" required>
                        <button type="submit" class="btn btn-primary">Añadir</button>
                    </div>
            </div>
        </form>
        
        <h2 class="text-center mt-4">Lista de Calificaciones</h2>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Nota 1</th>
                    <th scope="col">Nota 2</th>
                    <th scope="col">Nota 3</th>
                    <th scope="col">Media</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 if (isset($_SESSION["notas"])) {
                    $index = 1;
                    foreach($_SESSION["notas"] as $values){
                        echo "<tr class='table-light'>";
                        echo "<td>" . $index++ . "</td>"; // Mostramos el número y lo incrementamos
                        echo "<td>" . htmlspecialchars($values[0]) . "</td>
                              <td>" . htmlspecialchars($values[1]) . "</td>
                              <td>" . htmlspecialchars($values[2]) . "</td>
                              <td>" . htmlspecialchars($values[3]) . "</td>
                              <td>" . htmlspecialchars($values[4]) . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>

        <div class="card bg-light mt-3">
            <div class="card-body text-center">
                <p><a class="link-opacity-100-hover" href="closeSession2.php">Borrar alumnos</a></p>  
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
