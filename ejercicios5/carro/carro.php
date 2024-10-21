<?php 
  session_start();
$articulos = array(
    array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
    array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
    array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
    array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
    );
if($_SERVER["REQUEST_METHOD"]==="GET" && isset($_GET["idArticulo"])){
  
    if (!isset($_SESSION["carro"])) {
        $_SESSION["carro"] = []; 
    }
        $valor = $_GET["idArticulo"];
        foreach($articulos as $articulo){
            if($valor == $articulo["id"]){
              array_push($_SESSION["carro"],$articulo);
            }
        }
      

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Información Personal</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style> 
    </style>
</head>
<body>
    <div class="container bg-light mt-5">
        <h2 class="text-center">Compras</h2>
        <div class="card bg-light">     
        <p><a class="link-opacity-100-hover" href="carro.php?idArticulo=1">Zapatillas Nike (60 euros)</a></p>
        <p><a class="link-opacity-100-hover" href="carro.php?idArticulo=2">Sudadera Domyos (15 euros)</a></p>
        <p><a class="link-opacity-100-hover" href="carro.php?idArticulo=3">Pala de pádel Vairo (50 euros)</a></p>
        <p><a class="link-opacity-100-hover" href="carro.php?idArticulo=4">Pelota de baloncesto Molten (20 euros)</a></p>
    </div>
    <div class="container bg-light mt-5">
        <h2 class="text-center">CARRO DE COMPRAS</h2>
        <div class="card bg-light">
            <ul>
            <?php
            $total=0;
            if($_SERVER["REQUEST_METHOD"]==="GET" && isset($_GET["idArticulo"])){
             foreach($_SESSION["carro"] as $values){
                
                echo "<li>".$values["nombre"]. " ". $values["precio"]."$"."</li>";
                $total+=$values["precio"];
            } 
        }
            ?>
            </ul>
            <?php
                echo "<h3>"."Precio: ".  $total. "$". "</h3>";
            ?>    
        </div>
    </div>
    <div class="container bg-light mt-5">
        <h2 class="text-center">CARRO DE COMPRAS</h2>
        <div class="card bg-light">
        <p><a class="link-opacity-100-hover" href="closeSession.php">Borrar Carro</a></p>  
        </div>
    </div>
</body>
</html>