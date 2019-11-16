<?php
include_once "../Model/verificador.class.php";

//session_start();

if(isset($_SESSION['id'])){
    $verifica = new Verificador();
    $ver = $verifica->verificaPalpite($_SESSION['id']);
}

?>