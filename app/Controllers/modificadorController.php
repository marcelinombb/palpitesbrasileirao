<?php
function add(){
    include_once "../../Models/times.class.php";
}
if (!empty($_GET['attTimes'])){
    
    include_once '../Models/times.class.php';
    $times = new Times();

    $pos = explode(" ", $_GET['attTimes']);
    unset($pos[0]);

    if($times->atualizarPosicoes($pos) == 'ok'){
        header('Location: ../Views/template.php');
    }

}