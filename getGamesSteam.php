<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getQtdGames() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varQtdGames = explode('<a href="'.$urlInserida.'/games/?tab=all">', $dadosSite);
        $QtdGames = explode('</a>', $varQtdGames[1]);

        $numeroGames = str_replace('Games', '', $QtdGames[0]);

        print "Jogos em conta:" . $numeroGames;
    
    }

    getQtdGames();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>