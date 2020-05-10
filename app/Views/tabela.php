<?php

include_once "../Controllers/timesController.php";
include_once "../Controllers/verificadorController.php";

echo "<ol id='example1' class='list-group custom-counter'>";
if($_SESSION['tipo'] == false){
	$t = $times->times("nome");
	shuffle($t);
	foreach ($t as $key => $value) {
		//$nome = str_replace("_", " ", $value['nome']);
		echo "<li class='listitem'><img src=" . $value['logo'] . '>  ' . $value['nome'] . '</li>';
	}	
}else{
	foreach ($times->times("nome") as $key => $value) {
		//$nome = str_replace("_", " ", $value['nome']);
		echo "<li class='listitem'><img src=" . $value['logo'] . '>  ' . $value['nome'] . '</li>';
	}
}

echo "</ol>";
?>
