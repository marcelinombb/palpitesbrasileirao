<?php

include_once "../Controller/timesController.php";
include_once "../Controller/verificadorController.php";

echo "<ol id='example1' class='list-group custom-counter'>";
foreach ($times->times("nome") as $key => $value) {
	//$nome = str_replace("_", " ", $value['nome']);
	echo "<li class='listitem'><img src=" . $value['logo'] . '>  ' . $value['nome'] . '</li>';
}
echo "</ol>";
?>
