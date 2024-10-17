<?php
$name="";
$password="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];
    if(isset($_REQUEST["remember"])){
        setcookie("name",$name,time() + 3600);
        setcookie("password",$password,time() + 3600);
    } else {
        setcookie("name",$name,time() - 3600);
        setcookie("password",$password,time() - 3600);
    } 
    header('Location: recordar.html');
    exit();
}

?>