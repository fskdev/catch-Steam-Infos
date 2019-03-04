<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getStartDate() {

        $urlInserida = $_GET["urlSteam"];

        $urlAlvo = $urlInserida . "/badges/1";

        $dadosSite = file_get_contents($urlAlvo);

        $varStartDate = explode('XP - ', $dadosSite);
        $startDate = explode('<meta name=', $varStartDate[1]);
        
        $replace1 = str_replace('Member since ', '', $startDate[0]);
        $replace2 = str_replace('.">', '', $replace1);
        $replace3 = str_replace(',', ' de', $replace2);

        print "Criado em: " . $replace3;

    }

    getStartDate();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>