<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container bg-light mt-5">
        <h2 class="text-center">LOGIN</h2>
        <div class="card bg-light">
<form action="compruebaLogin.php" method="post" >
  <div class="form-group">
    <label for="Usuario">Usuario</label>
    <input type="Text" class="form-control" name="user" placeholder="USUARIO">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">ENTRAR</button>
</form>
</div>
</div>
    
</body>
</html>