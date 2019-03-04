<?php

$urlInserida = $_GET["urlSteam"];

if(isset($_GET["urlSteam"])) {

    function getFriends() {

        $urlInserida = $_GET["urlSteam"];

        $dadosSite = file_get_contents($urlInserida);

        $varFriends = explode('<a href="'.$urlInserida.'/friends/">', $dadosSite);
        $QtdFriends = explode('</a>', $varFriends[1]);

        $numeroAmigos = str_replace('Friends', '', $QtdFriends[0]);

        print "Número de amigos:" . $numeroAmigos;
    
    }

    getFriends();

} else {
    print "Erro: parametro 'urlSteam' não localizado";
}

?>