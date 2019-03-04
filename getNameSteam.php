<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getName() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varNickname = explode('class="actual_persona_name">', $dadosSite);
        $nickname = explode('</span>', $varNickname[1]);

        print $nickname[0];
    
    }

    getName();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>