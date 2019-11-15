<?php

include_once "../Model/rank.class.php";
include_once "../Model/times.class.php";

session_start();

$rank = new Rank();

if (!empty($_GET['addRank'])){
    $palpite = explode(" ", $_GET['addRank']);
    //arrei de teste na real vamo pegar do banco 
    $arrei = ["", "Palmeiras", "Sao_Paulo", "Gremio", "Flamengo", "Corinthians", "Athletico-PR", "Santos", "Internacional", "Goias", "Bahia", "Atletico-MG", "Vasco_da_Gama", "Fortaleza", "Botafogo", 'Ceara', "Cruzeiro", "Fluminense", "CSA", "Chapecoense", "Avai"];

    //calculo ae
    $soma = 0;
    $cont = 0;
    
    unset($arrei[0]);
    unset($palpite[0]);

    foreach ($palpite as $key => $value) {
        $dif = $key - array_search($value, $arrei);
        $r = array_search($value, $arrei);
        echo "posi palpite $key posi real $r<br>";
        if(!$dif){
            $cont++;
        }
        $soma += pow($dif, 2);
    }
    echo sqrt($soma);
    $rank->AddRank($_SESSION['id'], sqrt($soma),$cont);
}

?>