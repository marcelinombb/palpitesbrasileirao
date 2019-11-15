<?php
include_once "../Controller/rankController.php";
$rank = new Rank();
$r = $rank->RankAtual('acertos');

if ($r) {
    foreach ($r as $key => $value) {
        echo '<li class="list-item">' . $value['nome'] . ' '.$value['rank'].'</li>';
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
