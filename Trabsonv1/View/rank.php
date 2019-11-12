<?php
include_once "../Model/rank.class.php";
$rank = new Rank();
$r = $rank->RankAtual();

if ($r) {
    echo "<ul class='list-group col'>";
    foreach ($r as $key => $value) {
        echo '<li class="list-item">' . $value['nome'] . '</li>';
    }
    echo "</ul>";
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
