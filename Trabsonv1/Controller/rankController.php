<?php
include_once "../Model/rank.class.php";

$rank = new Rank();

if (!empty($_GET['addRank'])){
    $palpite = explode(" ", $_GET['addRank']);
    //arrei de teste na real vamo pegar do banco 
    $arrei = ["", "Palmeiras", "Sao_Paulo", "Gremio", "Flamengo", "Corinthians", "Athletico-PR", "Santos", "Internacional", "Goias", "Bahia", "Atletico-MG", "Vasco_da_Gama", "Fortaleza", "Botafogo", 'Ceara', "Cruzeiro", "Fluminense", "CSA", "Chapecoense", "Avai"];

    //calculo ae
    $soma = 0;
    foreach ($palpite as $key => $value) {
        $dif = $key - array_search($value, $arrei);
        $soma += pow($dif, 2);
    }
    echo sqrt($soma);
    $rank->AddRank(4, sqrt($soma));

}

?>