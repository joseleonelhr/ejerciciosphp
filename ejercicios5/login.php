<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container justify-content-center bg-light mt-5">
    <h2 class="text-center">LOGIN</h2>
    <div class="card bg-light">
        <form action="recordar.php" method="post">
            <div class="form-group">
                <label for="Usuario">Usuario</label>
                <input type="text" class="form-control" name="username" placeholder="USUARIO" 
                       value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" name="password" placeholder="CONTRASEÑA" 
                       value="<?php echo isset($_COOKIE['password']) ? htmlspecialchars($_COOKIE['password']) : ''; ?>" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="rememberCheck" 
                       <?php echo isset($_COOKIE['username']) ? 'checked' : ''; ?>>
                <label class="form-check-label" for="rememberCheck">Recordar</label>
            </div>
            <button type="submit" class="btn btn-primary">ENTRAR</button>
        </form>
    </div>
  </div>
</body>
</html>


