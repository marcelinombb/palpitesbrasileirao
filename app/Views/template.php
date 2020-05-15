<?php
include_once "../config/config.php";
session_start();
if (!isset($_SESSION['user'])) {
    header("Location:".BASE_URL);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Palpite</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-color: rgb(241,247,252);">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md">
                    <div class="container-fluid"><a class="navbar-brand" href="#">Campeonato Brasileiro</a><button
                            data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span
                                class="sr-only">Toggle navigation</span><span
                                class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link active"
                                        href="#"><?=$_SESSION['user']['tipo'] ? "Ademiro ".$_SESSION['user']['nome'] :$_SESSION['user']['nome']; ?></a></li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="#" onclick="logout()">Sair</a></li>
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
                <?php if ($_SESSION['user']['tipo'] == true) { ?>
               <!-- só aparece se for um adm logado
                       <!-- o template se modifica de acordo com tipo de usuarios  -->
                    <button class="btn btn-success btn-lg bp" data-bs-hover-animate="bounce" onclick="atualizarPosicoesTimes()">atualizar tabela</button>
                <?php } else { ?>
                <button id="btnTable" class="btn btn-success btn-lg bp" data-bs-hover-animate="bounce" onclick="enviarPalpite()"
                    >Palpitar</button>
                <?php } ?>
            </div>
            <div class="col col-md-4">
                <div class="row row-xl-12 position-fixed">
                    <div class="col">
                        <div>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab"
                                        href="#tab-1">Rank de Proximidade</a></li>
                                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Rank
                                        de Acertos</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="tab-1">
                                    <div class="col-xl-12 col-sm-9 " style="margin-top: 10px;">
                                        <div class="overflow-auto element" style="max-height: 500px;">
                                            <ol class='list-group ' id="palpite"></ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="tab-2">
                                    <div class="col col-sm-9 col-xl-12" style="margin-top: 10px;">
                                        <div class="overflow-auto element" style="max-height: 500px;">
                                            <ol class='list-group col' id="acertos"></ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                 <div class="col offset-xl-0 col-sm-9"r><button class="btn btn-primary btn-block btn-lg" data-bs-hove-animate="bounce" type="button" style="margin-top: 100px;background-color: rgb(25,153,37);">Palpitar</button></div>-->
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/script1.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script>
        loadTimes()
        setInterval(() => {
             $("#palpite").load("rankPalpite.php");
        }, 2000);

        setInterval(() => {
             $("#acertos").load("rankAcertos.php");
        }, 2000);

    </script>

</body>

</html>