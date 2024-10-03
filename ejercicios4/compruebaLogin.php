<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if((!empty($_REQUEST["user"]))&& (isset($_REQUEST["user"]))){
        $user = htmlspecialchars($_REQUEST["user"]);}
    if((!empty($_REQUEST["password"]))&& (isset($_REQUEST["password"]))){
        $password = htmlspecialchars($_REQUEST["password"]);}
}
if(($user==="admi")&&($password=="1234")){
    header("Location:ok.php");
exit();
}
else{
    header("Location:ko.php");
exit();
}

?>