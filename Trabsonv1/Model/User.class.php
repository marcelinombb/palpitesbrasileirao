<?php
include_once "connect.class.php";

class User extends connect{
    public function logar($login, $senha){
        $conn = parent::conn();
        $query = "SELECT * FROM `users` WHERE `email` = '$login' AND `senha`= '$senha'";

        return mysqli_query($conn,$query);
    }

    public function cadastrar($nome, $email, $senha){
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