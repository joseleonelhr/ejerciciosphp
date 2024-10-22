<?php
session_start();

if (!isset($_COOKIE["username"])) {
    header('Location: login.html');
    exit();
}

echo "<h1>Bienvenido, " . htmlspecialchars($_COOKIE["username"]) . "!</h1>";
echo "<a href='logout.php'>Cerrar sesión</a>";
?>
