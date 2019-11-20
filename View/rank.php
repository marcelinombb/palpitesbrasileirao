<?php
include_once "../Controller/rankController.php";
$rank = new Rank();
$r = $rank->RankAtual('palpite');

if ($r) {
    foreach ($r as $key => $value) {
        $pasento = 100 - $value['rank'];
        $pasento = number_format($pasento, 0, '.', '');
        if ($pasento==100) {
            $cor = "list-group-item-primary";
        }elseif ($pasento >= 90 and $pasento <= 99) {
            $cor = "list-group-item-success";
        }elseif ($pasento >= 51 and $pasento <=89) {
            $cor = "list-group-item-warning";
        }else {
            $cor = "list-group-item-danger";
        }
        $key = $key+1;
        echo "<li class='list-group-item $cor'>$key# " . $value['nome'] ." $pasento% </li>";
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
