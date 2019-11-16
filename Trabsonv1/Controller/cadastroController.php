<?php

include_once "../Model/user.class.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$log = new User();

$row = $log->cadastrar($nome,$email,$senha);

if($row == 'ok'){
    ?>
    <script>alert('Cadastrado com sucesso!')</script>
    <?php
    header('../index.php');
}else{
    ?>
    <script>alert('Erro no cadastro. Tente novamente mais tarde!')</script>
    <?php
    header('../index.php');
}
?>