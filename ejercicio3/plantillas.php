
    <?php
    $fp = fopen("plantillas.csv","r");
    
    
    if (!$fp){
        echo "No se ha podido abrir el archivo";
        }
    else {
        while (!feof($fp)){
            $linea  = fgets($fp);
            $vector [] = explode(",", $linea);
        }
        fclose($fp);
        $cabecera = array_shift($vector);

        
        foreach ($cabecera as $elemento ) {
            $cabecera1[] = trim($elemento);
        }

        foreach ($vector as $jugador) {
            $arrayAsociativo[] = array_combine($cabecera1, $jugador);    
        }


    }
  

    ?>

