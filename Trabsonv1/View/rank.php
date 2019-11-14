<?php
include_once "../Controller/rankController.php";
$rank = new Rank();
$r = $rank->RankAtual('palpite');

if ($r) {
    echo "<ol class='list-group col'>";
    foreach ($r as $key => $value) {
        echo '<li class="list-item">' . $value['nome'] . '</li>';
    }
    echo "</ol>";
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
