<?php

$data = json_decode(file_get_contents('http://localhost/palpitesbrasileirao/route.php?url=Rank/rankAtual/palpite'),true);

if ($data) {
    foreach ($data as $key => $value) {
        $pasento = 100 - $value['rank'];
        $pasento = number_format($pasento, 0, '.', '');
        if ($pasento==100) {
            $cor = "primary";
        }elseif ($pasento >= 90 and $pasento <= 99) {
            $cor = "success";
        }elseif ($pasento >= 51 and $pasento <=89) {
            $cor = "warning";
        }else {
            $cor = "danger";
        }
        $key = $key+1;
        echo "<li class='list-group-item'><span class='badge badge-$cor badge-pill'>$key#</span>  " . $value['nome'] ." $pasento%</li>";
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
