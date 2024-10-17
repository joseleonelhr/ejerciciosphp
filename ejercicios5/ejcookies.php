<?php
    $cookie_name="user";
    if(isset($_COOKIE[$cookie_name])&&!empty($_COOKIE[$cookie_name])){
        
        $user_name= $_COOKIE[$cookie_name];
    } else{
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $user_name = $_POST["name"];
            setcookie($cookie_name,$user_name,time() + 1000,"/");
        }
        else{
            $user_name="";
        }
    }
?>
<!DOCTYPE html> 

<html lang="es"> 

<head> 

    <meta charset="UTF-8"> 

    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <title>Cookie User</title> 

</head> 

<body> 

    <h1>¡Bienvenido!</h1> 

     

    <?php if (!empty($user_name)): ?> 

        <p>Bienvenido de nuevo, <?php echo htmlspecialchars($user_name); ?>!</p> 

    <?php else: ?> 

        <form method="post"> 

            <label for="name">Por favor, introduce tu nombre:</label> 

            <input type="text" id="name" name="name" required> 

            <input type="submit" value="Enviar"> 

        </form> 

    <?php endif; ?> 

</body> 

</html> 