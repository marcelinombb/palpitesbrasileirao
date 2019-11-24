<?php

include_once "../Model/rank.class.php";
include_once "../Model/times.class.php";

session_start();

$rank = new Rank();

if (!empty($_GET['addRank'])){
    $times = new Times();
    $palpite = explode(" ", $_GET['addRank']);
    $a = [' '];
    
    foreach ($times->times("posicao_BR") as $key => $value) {
        array_push($a,$value['nome']);
    }

    //calculo ae
    $soma = 0;
    $cont = 0;
    unset($palpite[0]);

    foreach ($palpite as $key => $value) {
        //diferença entre as posições real e palpitte
        $dif = $key - array_search($value, $a);

        // Se a diferença der 0 o usuario acertou a posição do palpite
        if(!$dif){
            $cont++;
        }
        $soma += pow($dif, 2);
    }

    $rank->AddRank($_SESSION['id'], sqrt($soma),$cont);
       echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>PAlPITE EFETUADO!</strong> verifique sua posição no rank ao lado.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
                    </button>
                </div>";
}

?>
