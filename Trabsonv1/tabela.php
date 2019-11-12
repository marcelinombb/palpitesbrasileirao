<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 bg-danger">
					<h4>Rank geral aqui</h4>
				</div>
			<div class="col-sm-4">
				
<?php 
	$conn = mysqli_connect("localhost","root","","trabHairon");
	$cuery = "SELECT * FROM times ORDER BY id_time";
	$res = mysqli_query($conn,$cuery);
	echo "<ol id='example1' class='list-group col'>";
		while ($row = mysqli_fetch_assoc($res)) {
			$nome = str_replace("_", " ", $row['nome']);
			echo '<li class="list-item"><img src='.$row['logo'].'>  '.$nome.'</li>';
		}
	echo "</ol>";

?>	
<button onclick="envia()">clica ae</button>
			</div>
			<div class="col-sm-4 bg-warning">
				<h4>alguma coisa aqui</h4>
			</div>
			</div>
	</div>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
<script>
	new Sortable(example1, {
    animation: 150,
    ghostClass: 'bg-primary'
});

	function envia(){
		var test = document.querySelectorAll('ol');
		const data = test['0'].innerText;
		
		fetch("mostra.php?nome="+data)
		.then(function(response){
			return response.text()
		})
		.then(function(res){
			document.getElementById("example1").innerHTML = res;	
		})
	}


</script>
	</body>
</html>
