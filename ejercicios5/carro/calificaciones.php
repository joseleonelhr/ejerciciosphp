<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["studentName"];
    $note1 = $_POST["note1"];
    $note2 = $_POST["note2"];
    $note3 = $_POST["note3"];
    $nota = ($note1 + $note2 + $note3) / 3;
    $estudiantes = [$name, $note1, $note2, $note3, $nota];
    
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
</head>
<body>
    <div class="container mt-4">
        <form action="calificaciones.php" method="post">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="studentName" class="form-label">Nombre del alumno</label>
                    <input type="text" class="form-control" name="studentName" id="studentName" placeholder="Nombre del alumno">
                </div>
                <div class="col-md-2">
                    <label for="note1" class="form-label">Nota 1</label>
                    <input type="number" class="form-control" name="note1" id="note1" placeholder="0" min="0" max="10" step="0.1">
                </div>
                <div class="col-md-2">
                    <label for="note2" class="form-label">Nota 2</label>
                    <input type="number" class="form-control" name="note2" id="note2" placeholder="0" min="0" max="10" step="0.1">
                </div>
                <div class="col-md-2">
                    <label for="note3" class="form-label">Nota 3</label>
                    <input type="number" class="form-control" name="note3" id="note3" placeholder="0" min="0" max="10" step="0.1">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary w-100">Añadir</button>
                </div>
            </div>
        </form>
        <div class="container mt-4">
        <h3>Lista de Calificaciones</h3>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Primer</th>
                    <th>Segundo</th>
                    <th>Tercero</th>
                    <th>Media</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                         if ($_SERVER["REQUEST_METHOD"] === "POST"){
                            foreach($_SESSION["notas"] as $values){
                                echo "<tr>";
                                echo "<td>" . $values[0] . "</td><td>" . $values[1] . "</td><td>" . $values[2] . "</td><td>" . $values[3] . "</td><td>" . $values[4] . "</td>";
                                echo "</tr>";
                            }
                           
                        }
                    ?>

            </tbody>
        </table>
        <div>
            <?php 
       
            ?>
        </div>
        <div class="card bg-light mt-3">
            <p><a class="link-opacity-100-hover" href="closeSession2.php">Borrar alumnos</a></p>  
        </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
