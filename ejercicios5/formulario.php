<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $name = htmlspecialchars($_REQUEST["name"]);
    $email = htmlspecialchars($_REQUEST["email"]); 
    $gender = htmlspecialchars($_REQUEST["gender"]);
    $numerohabitantes = htmlspecialchars($_REQUEST["numerohabitantes"]);
    $hobby = isset($_REQUEST["hobby"]) ? $_REQUEST["hobby"] : [];
    $comidafavorita = isset($_REQUEST["comidafavorita"]) ? $_REQUEST["comidafavorita"] : [];

    echo "<!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resumen de Información</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
    <div class='container mt-5'>
        <h3>Resumen de Información</h3>
        <table class='table table-bordered' id='summaryTable'>
            <thead>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Nombre</td><td>{$name}</td></tr>
                <tr><td>Email</td><td>{$email}</td></tr>
                <tr><td>Género</td><td>{$gender}</td></tr>
                <tr><td>Número de Habitantes</td><td>{$numerohabitantes}</td></tr>";

    // Mostrar hobbies
    foreach ($hobby as $value) {
        echo "<tr><td>Hobby</td><td>{$value}</td></tr>";
    }

    // Mostrar comidas favoritas
    foreach ($comidafavorita as $value) {
        echo "<tr><td>Comida Favorita</td><td>{$value}</td></tr>";
    }

    echo "    </tbody>
        </table>
        <a href='formulario.html' class='btn btn-primary'>Regresar al Formulario</a>
    </div>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    </body>
    </html>";
}
?>









}

?>