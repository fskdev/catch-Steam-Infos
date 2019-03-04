<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getStatus() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varStatus = explode('<div class="profile_in_game_header">', $dadosSite);
        $statusSteam = explode('</div>', $varStatus[1]);
        
        $statusSteamCorrect = str_replace('Currently ', '', $statusSteam[0]);

        print "Status Atual: " . $statusSteamCorrect;

    }

    getStatus();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>