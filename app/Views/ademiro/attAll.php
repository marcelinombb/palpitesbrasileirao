<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ATUALIZAR</title>
</head>
<body>
<?php

include_once "../../Controllers/modificadorController.php";
add();
$times = new Times();

echo "<ol id='example1' class='list-group col'>";
foreach ($times->times() as $key => $value) {
	//$nome = str_replace("_", " ", $value['nome']);
	echo '<li class="list-item"><img src=' . $value['logo'] . '>  ' . $value['nome'] . '</li>';
}
echo "</ol>";
?>
<button onclick="envia()" id="btnTable">clica ae</button>

<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
        new Sortable(example1, {
            animation: 150,
            ghostClass: 'bg-primary'
        });
         
        function envia() {
            var test = document.querySelectorAll('#example1');
            const data = test['0'].innerText;
            console.log(data);
            
            window.location.href = "../../Controllers/modificadorController.php?attTimes=" + data;
        }
</script>

</body>
</html>