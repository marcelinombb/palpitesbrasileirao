<?php
//define("ROOT_PATH", dirname(__FILE__));
session_start();
if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    header('location:../index.php');
}

$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Palpite</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color: rgb(241,247,252);">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><a class="navbar-brand" href="#">Campeonato Brasileiro</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#"><?= $_SESSION['nome']; ?></a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="../Controller/logout.php">Sair</a></li>
                                <li class="nav-item" role="presentation"></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col col-md-8 col-sm-12" id="botaumid">
                <span id='alert'></span>
                <?php
                    include_once "tabela.php";
                ?>
                <?php if ($_SESSION['tipo'] == true) { ?>
                    <!-- só aparece se for um adm logado 
                        o template se modifica de acordo com tipo de usuarios    
                        -->
                    <a href="#"><button type="button" class="btn btn-success bp" style="fixed-bottom; margin-left:100px;">atualizar tabela</button></a>
                    <style>
                        .bp {
                            position: fixed;
                            float: bottom;
                            bottom: 15px;
                            right: 15px;
                            z-index: 100;
                            border-radius: 10%;
                        }
                    </style>
                <?php } else { ?>
                    <button id="btnTable" class="btn btn-lg bp" data-bs-hover-animate="bounce" onclick="envia()" style="background-color: rgb(25,153,37);fixed-bottom; margin-left:100px;">Palpitar</button>
                    <style>
                        .bp {
                            position: fixed;
                            float: bottom;
                            bottom: 15px;
                            right: 15px;
                            z-index: 100;
                        }
                    </style>
                <?php } ?>
            </div>
            <div class="col col-md-4">
                <div class="row row-xl-12 position-fixed">
                    <div class="col">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Rank de Proximidade</a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Rank de Acertos</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <div class="col-xl-12 col-sm-9 " style="margin-top: 10px;">
                                        <div class="overflow-auto element" style="max-height: 500px;">
                                            <ol class='list-group ' id="rank"></ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <div class="col col-sm-9 col-xl-12" style="margin-top: 10px;">
                                        <div class="overflow-auto element" style="max-height: 500px;">
                                            <ol class='list-group col' id="outroid"></ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col offset-xl-0 col-sm-9"><button class="btn btn-primary btn-block btn-lg" data-bs-hover-animate="bounce" type="button" style="margin-top: 100px;background-color: rgb(25,153,37);">Palpitar</button></div> -->
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script>
        new Sortable(example1, {
            animation: 150,
            ghostClass: 'blue-background-class'
            /*  swap: true, // Enable swap plugin
             swapClass: 'highlight', // The class applied to the hovered swap item
             animation: 150 */
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
                    document.getElementById("alert").innerHTML = res;
                    document.getElementById('btnTable').disabled = true;
                })
        }
    </script>

    <script>
        //isso é um crime misturar js com php
        var x = "'<?php echo $ver; ?>'";

        if (x == "'in'") {
            console.log('é sim');
            document.getElementById('btnTable').disabled = true;
            console.log(document.getElementById('btnTable'));
        }

        console.log(x);
    </script>

</body>

</html>