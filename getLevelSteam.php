<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getLevel() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varLevel = explode('<span class="friendPlayerLevelNum">', $dadosSite);
        $steamLevel = explode('</span>', $varLevel[1]);
        
        print "Nivel steam: " . $steamLevel[0];

    }

    getLevel();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>