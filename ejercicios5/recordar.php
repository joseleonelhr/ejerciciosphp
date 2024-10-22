<?php
$username = "";
$password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $valid_username = "admin"; 
    $valid_password = "12345"; 

    if ($username === $valid_username && $password === $valid_password) {
 
        if (isset($_REQUEST["remember"])) {
           
            setcookie("username", $username, time() + 3600, "/"); // Expira en 1 hora
            setcookie("password", $password, time() + 3600, "/"); // Expira en 1 hora
        }

      
        header('Location: dashboard.php');
        exit();
    } else {
    
        header('Location: login.php?error=1');
        exit();
    }
}
?>

