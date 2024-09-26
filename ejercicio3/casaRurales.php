<?php
$fp = fopen("casas_rurales.csv","r");
if (!$fp){
    echo "No se ha podido abrir el archivo";
    }
else {
    while (!feof($fp)){
        $linea  = fgets($fp);
        $vector [] = explode(";", $linea);
    }
    fclose($fp);
    $cabecera = array_shift($vector);

    
    foreach ($cabecera as $elemento ) {
        $cabecera1[] = trim($elemento);
    }

    foreach ($vector as $casas) {
        $arrayAsociativo[] = array_combine($cabecera1, $casas);    
    }


}


?>