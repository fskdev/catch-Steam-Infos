<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getDescription() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varDescription = explode('<meta property="twitter:description" content=', $dadosSite);
        $description = explode('>', $varDescription[1]);

        print $description[0];
    
    }

    getDescription();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>