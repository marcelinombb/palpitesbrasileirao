<?php
include_once ROOT_PATH."/Controller/timesController.php";
echo "<ol id='example1' class='list-group col'>";
foreach ($times->times() as $key => $value) {
	$nome = str_replace("_", " ", $value['nome']);
	echo '<li class="list-item"><img src=' . $value['logo'] . '>  ' . $nome . '</li>';
}
echo "</ol>";
?>