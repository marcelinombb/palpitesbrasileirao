<?php
// site dos clientes, apenas
define("ROOT_PATH", dirname(__FILE__));
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
}
 
$logado = $_SESSION['login'];
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 bg-danger">
                    <h5>Rank de proximidade de posições</h5>
                    <ol class='list-group col' id="rank"></ol>
            </div>
            <div class="col-sm-4">
                <div class="container" id="botaumid">
                    <?php
                    include_once "tabela.php";
                    ?>
                </div>
            </div>
            <div class="col-sm-4 bg-warning">
                <h5>Rank de acertos de posições</h5>
                <ol class='list-group col' id="outroid"></ol>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script>
        new Sortable(example1, {
            animation: 150,
            ghostClass: 'bg-primary'
        });

        setInterval(() => {
            $("#rank").load("rank.php");
        }, 500);

        setInterval(() => {
            $("#outroid").load("rankPosicao.php");
        }, 500);

        function envia() {
            var test = document.querySelectorAll('#example1');
            const data = test['0'].innerText;

            fetch("../Controller/rankController.php?addRank=" + data)
            .then(function(response) {
                return response.text()
            })
            .then(function(res) {
                document.getElementById("botaumid").innerHTML = res;
            })
        }
    </script>
</body>

</html>