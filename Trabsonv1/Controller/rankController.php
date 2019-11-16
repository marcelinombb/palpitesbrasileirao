<?php

include_once "../Model/rank.class.php";
include_once "../Model/times.class.php";

session_start();

$rank = new Rank();

if (!empty($_GET['addRank'])){
    $times = new Times();
    $palpite = explode(" ", $_GET['addRank']);

    $a = [' '];
    foreach ($times->times() as $key => $value) {
        array_push($a,$value['nome']);
    }

    //calculo ae
    $soma = 0;
    $cont = 0;
    
    unset($palpite[0]);

    foreach ($palpite as $key => $value) {
        $dif = $key - array_search($value, $a);
        $r = array_search($value, $a);
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