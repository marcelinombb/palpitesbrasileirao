<?php
include_once "../Controller/rankController.php";
$rank = new Rank();
$r = $rank->RankAtual('palpite');

if ($r) {
    foreach ($r as $key => $value) {
        $pasento = 100 - $value['rank'];
        $pasento = number_format($pasento, 1, '.', '');
        echo '<li class="list-item">' . $value['nome'] ." $pasento% </li>";
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
