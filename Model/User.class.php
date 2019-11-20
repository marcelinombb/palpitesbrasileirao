<?php
include_once "connect.class.php";

class User extends connect{
    public function logar($login, $senha){
        $conn = parent::conn();
        $query = "SELECT * FROM `users` WHERE `email` = '$login' AND `senha`= '$senha'";

        return mysqli_query($conn,$query);
    }

    public function cadastrar($nome, $email, $senha){
        $nome = filter_var($nome,FILTER_SANITIZE_STRING);
        $email = filter_var($email,FILTER_SANITIZE_STRING);
        $senha = filter_var($senha,FILTER_SANITIZE_STRING);
        $conn = parent::conn();
        $query = "INSERT INTO `users` (`nome`, `email`, `senha`, `type`) VALUES ('$nome', '$email', '$senha', 2)";
        $res = mysqli_query($conn,$query);
        if($res){
            return 'ok';
        }
        return 'n ok';
    }
}
?>