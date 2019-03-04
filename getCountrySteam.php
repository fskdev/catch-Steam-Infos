<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getCountry() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varCountry = explode('.gif">', $dadosSite);
        $country = explode('</div>', $varCountry[1]);
        
        print "Localização: " . $country[0];

    }

    getCountry();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>