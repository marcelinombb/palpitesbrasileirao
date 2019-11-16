<?php

include_once "../Model/user.class.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$log = new User();

$row = $log->cadastrar($nome,$email,$senha);

if($row == 'ok'){
    ?>
    <script>
    window.location.href = "../index.php";
    alert('Cadastrado com sucesso!');
    </script>
    <?php
}else{
    ?>
    <script>
    window.location.href = "../index.php";
    alert('Erro no cadastro. Tente novamente mais tarde!');
    </script>
    <?php
}
?>