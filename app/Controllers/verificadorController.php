<?php
include_once "../Models/verificador.class.php";

//session_start();

if(isset($_SESSION['id'])){
    $verifica = new Verificador();
    $ver = $verifica->verificaPalpite($_SESSION['id']);
}

?>