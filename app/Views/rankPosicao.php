<?php
include_once "../Controllers/rankController.php";
$rank = new Rank();
$r = $rank->RankAtual('acertos');

if ($r) {
    foreach ($r as $key => $value) {
        $key = $key + 1;
        echo "<li class='list-group-item'><span class='badge badge-primary badge-pill'>$key#</span> " . $value['nome'] . ' '.$value['rank'].'</li>';
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
