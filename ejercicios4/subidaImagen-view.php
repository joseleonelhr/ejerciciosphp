<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Imágenes con Bootstrap</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Imágenes en el Directorio</h1>
        <div class="row">
            <?php
            $directorio = 'updocs/';
            $imagenes = scandir($directorio);
            
            foreach ($imagenes as $imagen) {
                // Filtrar solo archivos de imagen
                if ($imagen !== '.' && $imagen !== '..' && preg_match('/\.(jpg|jpeg|png|gif)$/i', $imagen)) {
                    echo '<div class="col-md-4 mb-4">';
                    echo '<div class="card">';
                    echo '<img src="' . $directorio . $imagen . '" class="card-img-top" alt="' . $imagen . '" style="max-width: 100%; height: auto;">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . htmlspecialchars($imagen) . '</h5>'; // Escapar caracteres especiales
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

