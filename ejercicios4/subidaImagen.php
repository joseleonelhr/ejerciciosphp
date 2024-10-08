<?php
ini_set('display_errors', 1);
if (!isset($_POST["image"])){
if (is_uploaded_file($_FILES['image']['tmp_name'])) {
// subido con éxito
$nombre = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], "updocs/{$nombre}");
echo "<p>Archivo $nombre subido con éxito</p>";
}
}
function mostrarimagenes($ruta = "updocs"){
    $imagenes = scandir($ruta);
    return ($imagenes);
}
mostrarimagenes();
?>