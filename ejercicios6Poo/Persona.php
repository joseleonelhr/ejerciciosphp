<?php
class Persona {
    private $dni;
    private $nombre ="";
    private $email="";
    public function __construct($dni,$nombre,$email){
    }
    public function __set($nombre,$valor){
        if($nombre == "DNI"){
            $letraDNI=["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"];
            if(strlen($valor) !== 9){
                echo "El DNI debe tener 9 caracteres (8 números y 1 letra).";
                return;
            }
            $numeros = substr($valor,0,8);
            $letra = strtoupper(substr($valor,-1));
            if(!ctype_digit($numeros)){
                echo "Los primeros 8 caracteres deben ser números.";
                return;
            }
            $resto = $numeros % 23;
    
            if(is_string($letra)){
                if($letra === $letraDNI[$resto]){
                    $this->dni = $valor;
                } else{
                    echo "La letra no es válida para el número dado.";
                }
            }

            } elseif ($nombre == "nombre"){
                $this->nombre=$valor;

            } elseif($nombre == "email"){
                if(!filter_var($valor, FILTER_VALIDATE_EMAIL)){
                    $this->email=$valor;
                } else {
                    echo "El email proporcionado no es válido.";
                }
            }
    }

}


?>