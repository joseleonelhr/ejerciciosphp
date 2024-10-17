<?php
session_start(); // Inicia la sesión
session_unset(); // Limpia las variables de sesión
session_destroy(); // Destruye la sesión
header("Location: carro.php"); // Redirige de nuevo al formulario
exit();
?>
