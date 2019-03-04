<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getComments() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varComments = explode('_totalcount">', $dadosSite);
        $totalComments = explode('</span>', $varComments[1]);

        print "Total de comentários: " . $totalComments[0];
    
    }

    getComments();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>