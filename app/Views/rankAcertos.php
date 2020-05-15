<?php
$data = json_decode(file_get_contents('http://localhost/palpitesbrasileirao/route.php?url=Rank/rankAtual/acertos'),true);

if ($data) {
    foreach ($data as $key => $value) {
        $key = $key + 1;
        echo "<li class='list-group-item'><span class='badge badge-primary badge-pill'>$key#</span> " . $value['nome'] . ' '.$value['rank'].'</li>';
    }
}
else {
    echo "<h4>Nenhum Palpite Ainda...</h4>";
}
?>
