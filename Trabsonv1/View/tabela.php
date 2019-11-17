<?php

include_once "../Controller/timesController.php";
include_once "../Controller/verificadorController.php";

echo "<ol id='example1' class='list-group col'>";
foreach ($times->times("nome") as $key => $value) {
	//$nome = str_replace("_", " ", $value['nome']);
	echo '<li class="list-item"><img src=' . $value['logo'] . '>  ' . $value['nome'] . '</li>';
}
echo "</ol>";
?>
<button onclick="envia()" id="btnTable">palpitar</button>

<script>
//isso é um crime misturar js com php
var x = "'<?php echo $ver;?>'";

if(x == "'in'"){
	console.log('é sim');
	document.getElementById('btnTable').disabled = true;
	console.log(document.getElementById('btnTable'));
}

console.log(x);
</script>